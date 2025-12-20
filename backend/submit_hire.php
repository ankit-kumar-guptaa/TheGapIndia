<?php
header('Content-Type: application/json');
require_once 'db_config.php';
require_once 'mail_helper.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $company_name = $_POST['company_name'] ?? '';
    $contact_person = $_POST['contact_person'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $industry = $_POST['industry'] ?? '';
    $role_description = $_POST['role_description'] ?? '';

    if (empty($company_name) || empty($email) || empty($phone)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill in all required fields.']);
        exit;
    }

    try {
        // 1. Save to Database
        $stmt = $pdo->prepare("INSERT INTO hire_requests (`company_name`, `contact_person`, `email`, `phone`, `industry`, `role_description`) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$company_name, $contact_person, $email, $phone, $industry, $role_description]);

        // 2. Send Email to Admin
        $admin_subject = "New Talent Request: $company_name";
        $admin_body = "
            <h3>New Hiring Request</h3>
            <p><strong>Company:</strong> $company_name</p>
            <p><strong>Contact Person:</strong> $contact_person</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Industry:</strong> $industry</p>
            <p><strong>Role:</strong> $role_description</p>
        ";
        sendEmail('hr@gapindia.com', $admin_subject, $admin_body);

        // 3. Send Thank You Email to User
        $user_subject = "We've received your hiring request - Gap India";
        $user_body = "
            <p>Dear $contact_person,</p>
            <p>Thank you for choosing Gap India. We have received your requirement for <strong>$role_description</strong>.</p>
            <p>Our team will review your needs and get back to you shortly.</p>
            <br>
            <p>Best Regards,<br>Gap India Team</p>
        ";
        sendEmail($email, $user_subject, $user_body);

        echo json_encode(['status' => 'success', 'message' => 'Request submitted successfully!']);

    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>