<?php
header('Content-Type: application/json');
require_once 'db_config.php';
require_once 'mail_helper.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = $_POST['full_name'] ?? '';
    $mobile = $_POST['mobile'] ?? '';
    $email = $_POST['email'] ?? '';
    $current_role = $_POST['current_role'] ?? '';

    if (empty($full_name) || empty($email) || empty($_FILES['cv_file'])) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill all fields and upload a CV.']);
        exit;
    }

    // File Upload Logic
    $target_dir = "uploads/cvs/";
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    
    $file_name = time() . '_' . basename($_FILES["cv_file"]["name"]);
    $target_file = $target_dir . $file_name;
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    $allowed_types = ['pdf', 'doc', 'docx'];
    if (!in_array($file_type, $allowed_types)) {
        echo json_encode(['status' => 'error', 'message' => 'Only PDF, DOC, and DOCX files are allowed.']);
        exit;
    }

    if (move_uploaded_file($_FILES["cv_file"]["tmp_name"], $target_file)) {
        try {
            // 1. Save to Database
            $stmt = $pdo->prepare("INSERT INTO cv_submissions (full_name, mobile, email, current_role, file_path) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$full_name, $mobile, $email, $current_role, $target_file]);

            // 2. Send Email to Admin (with attachment)
            $admin_subject = "New CV Submission: $full_name";
            $admin_body = "
                <h3>New Candidate Application</h3>
                <p><strong>Name:</strong> $full_name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Mobile:</strong> $mobile</p>
                <p><strong>Role:</strong> $current_role</p>
                <p>Please find the CV attached.</p>
            ";
            // Attach the file
            sendEmail('hr@gapindia.com', $admin_subject, $admin_body, [$target_file]);

            // 3. Send Thank You Email to User
            $user_subject = "Application Received - Gap India";
            $user_body = "
                <p>Dear $full_name,</p>
                <p>Thank you for submitting your profile. We have received your CV and will review it shortly.</p>
                <p>If your profile matches our current openings, our recruitment team will contact you.</p>
                <br>
                <p>Best Regards,<br>Gap India Team</p>
            ";
            sendEmail($email, $user_subject, $user_body);

            echo json_encode(['status' => 'success', 'message' => 'CV submitted successfully!']);

        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Sorry, there was an error uploading your file.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>