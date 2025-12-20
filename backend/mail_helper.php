<?php
// Using PHP's native mail() function as requested
// This relies on the server's local mail server configuration (sendmail/postfix)

function sendEmail($to, $subject, $body, $attachments = []) {
    // Sender configuration
    $fromEmail = 'no-reply@itsahayata.com'; // Ensure this domain is allowed by your hosting provider
    $fromName = 'Gap India';

    // Generate a unique boundary for the email
    $boundary = md5(uniqid(time()));

    // Headers
    $headers  = "From: $fromName <$fromEmail>\r\n";
    $headers .= "Reply-To: $fromEmail\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Message Body (HTML)
    $message  = "--$boundary\r\n";
    $message .= "Content-Type: text/html; charset=\"UTF-8\"\r\n";
    $message .= "Content-Transfer-Encoding: 7bit\r\n";
    $message .= "\r\n";
    $message .= "$body\r\n";
    $message .= "\r\n";

    // Attachments
    if (!empty($attachments)) {
        foreach ($attachments as $filePath) {
            if (file_exists($filePath)) {
                $fileName = basename($filePath);
                $fileContent = file_get_contents($filePath);
                $fileData = chunk_split(base64_encode($fileContent));
                
                $message .= "--$boundary\r\n";
                $message .= "Content-Type: application/octet-stream; name=\"$fileName\"\r\n";
                $message .= "Content-Disposition: attachment; filename=\"$fileName\"\r\n";
                $message .= "Content-Transfer-Encoding: base64\r\n";
                $message .= "\r\n";
                $message .= "$fileData\r\n";
            }
        }
    }

    // Close the boundary
    $message .= "--$boundary--";

    // Attempt to send
    // The -f parameter sets the Return-Path (envelope sender) which helps prevent spam flagging
    if (mail($to, $subject, $message, $headers, "-f$fromEmail")) {
        return true;
    } else {
        // Fallback without -f parameter in case of restricted permissions
        if (mail($to, $subject, $message, $headers)) {
            return true;
        } else {
            return "Mail delivery failed. Please check server mail() configuration.";
        }
    }
}
?>