<?php
header('Content-Type: application/json');
require_once 'db_config.php';
require_once 'mail_helper.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill in all required fields.']);
        exit;
    }

    try {
        // 1. Save to Database
        $stmt = $pdo->prepare("INSERT INTO contact_queries (`name`, `email`, `phone`, `subject`, `message`) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$name, $email, $phone, $subject, $message]);

        // 2. Send Email to Admin
        $admin_subject = "New Contact Query: $subject";
        $admin_body = "
            <h3>New Website Inquiry</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong><br>$message</p>
        ";
        sendEmail('hr@gapindia.com', $admin_subject, $admin_body);

        // 3. Send Thank You Email to User
        $user_subject = "We've received your message - Gap India";
        $user_body = "
            <p>Dear $name,</p>
            <p>Thank you for contacting Gap India. We have received your message regarding '<strong>$subject</strong>'.</p>
            <p>Our team will get back to you within 24 hours.</p>
            <br>
            <p>Best Regards,<br>Gap India Team</p>
        ";
        sendEmail($email, $user_subject, $user_body);

        echo json_encode(['status' => 'success', 'message' => 'Message sent successfully!']);

    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>