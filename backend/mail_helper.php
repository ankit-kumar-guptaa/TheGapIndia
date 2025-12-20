<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Try to load PHPMailer
// Option 1: Composer Autoload
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require __DIR__ . '/../vendor/autoload.php';
} 
// Option 2: Manual Include (Assumes PHPMailer is in include/PHPMailer)
elseif (file_exists(__DIR__ . '/../include/PHPMailer/src/PHPMailer.php')) {
    require __DIR__ . '/../include/PHPMailer/src/Exception.php';
    require __DIR__ . '/../include/PHPMailer/src/PHPMailer.php';
    require __DIR__ . '/../include/PHPMailer/src/SMTP.php';
}

function sendEmail($to, $subject, $body, $attachments = []) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'no-reply@itsahayata.com';
        $mail->Password   = 'Support@1925';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('no-reply@itsahayata.com', 'Gap India');
        $mail->addAddress($to);
        
        // Admin Notification Copy (optional, can be handled by caller)
        // $mail->addBCC('hr@gapindia.com'); 

        // Attachments
        if (!empty($attachments)) {
            foreach ($attachments as $file) {
                $mail->addAttachment($file);
            }
        }

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;

        $mail->send();
        return true;
    } catch (Exception $e) {
        return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>