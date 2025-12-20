<?php
// Simple SMTP Mailer for Gap India (No PHPMailer Dependency)

class GapMailer {
    private $host = 'smtp.hostinger.com';
    private $port = 587;
    private $username = 'no-reply@itsahayata.com';
    private $password = 'Support@1925';
    private $socket;
    private $logs = [];

    public function send($to, $subject, $body, $attachments = []) {
        try {
            // 1. Connect
            $this->connect();
            
            // 2. Handshake & Auth
            $this->sendCommand("EHLO " . gethostname());
            $this->sendCommand("STARTTLS");
            
            // Upgrade to secure socket
            stream_socket_enable_crypto($this->socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);
            $this->sendCommand("EHLO " . gethostname());
            
            $this->sendCommand("AUTH LOGIN");
            $this->sendCommand(base64_encode($this->username));
            $this->sendCommand(base64_encode($this->password));

            // 3. Email Data
            $this->sendCommand("MAIL FROM: <{$this->username}>");
            $this->sendCommand("RCPT TO: <$to>");
            
            // Handle BCC (Admin) - Optional, sending separate mail is better usually, but here we can add another RCPT
            // $this->sendCommand("RCPT TO: <hr@gapindia.com>"); 

            $this->sendCommand("DATA");

            // 4. Build MIME Headers & Body
            $boundary = md5(uniqid(time()));
            
            $headers  = "From: Gap India <{$this->username}>\r\n";
            $headers .= "To: $to\r\n";
            $headers .= "Subject: $subject\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
            $headers .= "\r\n";

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
            $message .= "."; // End of message

            fwrite($this->socket, $headers . $message . "\r\n");
            $this->readResponse();

            // 5. Quit
            $this->sendCommand("QUIT");
            fclose($this->socket);
            
            return true;

        } catch (Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }

    private function connect() {
        $this->socket = fsockopen($this->host, $this->port, $errno, $errstr, 30);
        if (!$this->socket) {
            throw new Exception("Could not connect to SMTP host: $errstr");
        }
        $this->readResponse();
    }

    private function sendCommand($cmd) {
        fwrite($this->socket, $cmd . "\r\n");
        $response = $this->readResponse();
        
        // Basic error checking (codes 4xx and 5xx are errors)
        $code = substr($response, 0, 3);
        if ($code >= 400) {
            throw new Exception("SMTP Error [$code]: $response");
        }
        return $response;
    }

    private function readResponse() {
        $response = "";
        while ($str = fgets($this->socket, 515)) {
            $response .= $str;
            if (substr($str, 3, 1) == " ") { break; }
        }
        return $response;
    }
}

// Global helper function to match existing usage
function sendEmail($to, $subject, $body, $attachments = []) {
    $mailer = new GapMailer();
    return $mailer->send($to, $subject, $body, $attachments);
}
?>