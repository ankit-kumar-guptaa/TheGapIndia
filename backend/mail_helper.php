<?php
// Simple SMTP Mailer for Gap India (Updated for Better Compatibility)

class GapMailer {
    private $host = 'smtp.hostinger.com';
    private $port = 587;
    private $username = 'no-reply@itsahayata.com';
    private $password = 'Support@1925';
    private $timeout = 30; // Timeout in seconds
    private $debug = false; // Set to true to see debug logs in response

    public function send($to, $subject, $body, $attachments = []) {
        try {
            $socket = fsockopen($this->host, $this->port, $errno, $errstr, $this->timeout);
            if (!$socket) {
                throw new Exception("Could not connect: $errstr ($errno)");
            }

            $this->read($socket); // Welcome message

            $this->cmd($socket, "EHLO " . gethostname());
            $this->cmd($socket, "STARTTLS");

            if (!stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
                throw new Exception("TLS negotiation failed");
            }

            $this->cmd($socket, "EHLO " . gethostname());
            $this->cmd($socket, "AUTH LOGIN");
            $this->cmd($socket, base64_encode($this->username));
            $this->cmd($socket, base64_encode($this->password));

            $this->cmd($socket, "MAIL FROM: <{$this->username}>");
            $this->cmd($socket, "RCPT TO: <$to>");

            $this->cmd($socket, "DATA");

            // --- HEADERS ---
            $boundary = md5(uniqid(time()));
            
            $headers  = "From: Gap India <{$this->username}>\r\n";
            $headers .= "To: $to\r\n";
            $headers .= "Subject: $subject\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
            $headers .= "\r\n";

            // --- BODY ---
            $message  = "--$boundary\r\n";
            $message .= "Content-Type: text/html; charset=\"UTF-8\"\r\n";
            $message .= "Content-Transfer-Encoding: 7bit\r\n";
            $message .= "\r\n";
            $message .= "$body\r\n";
            $message .= "\r\n";

            // --- ATTACHMENTS ---
            if (!empty($attachments)) {
                foreach ($attachments as $filePath) {
                    if (file_exists($filePath)) {
                        $fileName = basename($filePath);
                        $fileData = chunk_split(base64_encode(file_get_contents($filePath)));
                        
                        $message .= "--$boundary\r\n";
                        $message .= "Content-Type: application/octet-stream; name=\"$fileName\"\r\n";
                        $message .= "Content-Disposition: attachment; filename=\"$fileName\"\r\n";
                        $message .= "Content-Transfer-Encoding: base64\r\n";
                        $message .= "\r\n";
                        $message .= "$fileData\r\n";
                    }
                }
            }

            $message .= "--$boundary--\r\n";
            $message .= "."; // End of data

            // Send headers and message together
            fputs($socket, $headers . $message . "\r\n");
            $this->read($socket); // Read response for data end

            $this->cmd($socket, "QUIT");
            fclose($socket);

            return true;

        } catch (Exception $e) {
            return "Mail Error: " . $e->getMessage();
        }
    }

    private function cmd($socket, $command) {
        fputs($socket, $command . "\r\n");
        $response = $this->read($socket);
        // Check for error codes (4xx or 5xx)
        $code = substr($response, 0, 3);
        if ($code >= 400) {
            throw new Exception("SMTP Error: $response");
        }
        return $response;
    }

    private function read($socket) {
        $response = "";
        while ($str = fgets($socket, 515)) {
            $response .= $str;
            // Stop if line is 4th char is space (e.g., "250 OK")
            if (substr($str, 3, 1) == " ") { break; }
        }
        if ($this->debug) {
            // error_log("SMTP: " . $response); // Uncomment for server logs
        }
        return $response;
    }
}

// Global helper function
function sendEmail($to, $subject, $body, $attachments = []) {
    $mailer = new GapMailer();
    return $mailer->send($to, $subject, $body, $attachments);
}
?>