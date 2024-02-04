<?php
    date_default_timezone_set('Asia/Kolkata');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require_once FCPATH."plugin/PHPmailer/src/Exception.php";
    require_once FCPATH."plugin/PHPmailer/src/PHPMailer.php";
    require_once FCPATH."plugin/PHPmailer/src/SMTP.php";
    
    class mailer{
        public $setMail;
        function config(){
            $data['email_host']			= 'smtp.gmail.com';
            $data['email_username']		= 'khushal@sansoftwares.com';
            $data['email_password']		= 'wikugysdtvjdxmnp';
            $data['email_port']			=  587;
            $data['email_display_name']	= 'Himanshu Galav';
            $data['is_ssl']	= true;
            return (object)$data;
        }

        function mailConfig() {
            
            $mail = $this->config(); 
            if (empty($mail->email_host) or empty($mail->email_username) or empty($mail->email_password)) {
                return json_encode(array('status' => false, 'message' => 'Mail configuration not exist, Please check branch setting'));
            } 

            $this->setMail = new PHPMailer();
            $this->setMail->SMTPDebug = 0;
            $this->setMail->isSMTP();
            $this->setMail->Host = $mail->email_host;
            $this->setMail->SMTPAuth = true;
            $this->setMail->Username = $mail->email_username;
            $this->setMail->From = $mail->email_username;
            $this->setMail->FromName = $mail->email_display_name;
            $this->setMail->Password = $mail->email_password;
            $this->setMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $this->setMail->Port = $mail->email_port ? $mail->email_port : 587;
            $this->setMail->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));
            // //Recipients
            $this->setMail->SMTPSecure = 'tls';
           $this->setMail->isHTML(true);
            $this->setMail->setFrom($mail->email_username, $mail->email_display_name);


        }

        function sendEmail($to = '', $sub = '', $msg = '', $data = array()) {
            $this->mailConfig();
           
            if (empty($to) or empty($sub) or empty($msg)) {
                return json_encode(array('status' => false, 'message' => 'To/Subject/Message are required fields'));
            }
    
            try {  
                $this->setMail->addAddress($to, '');
               if (!empty($data['cc'])) {
                    $this->setMail->addCC($data['cc']);
                }
                if (!empty($data['StringAttachment'])) { 
                    foreach($data['StringAttachment'] as $sa){
                        $this->setMail->addStringAttachment($sa['html'], $sa['name']);
                    }
                }
                if (!empty($data['attachment'])) {
                    foreach($data['attachment'] as $at){ 
                        $this->setMail->addAttachment($at['file'],$at['name']);
                    }
                }
    
                $this->setMail->Subject = $sub;
                $this->setMail->Body = $msg;
                $this->setMail->isHTML(true);
                
                if ($this->setMail->send()) {
                    return json_encode(array('status' => true, 'message' => 'Message has been sent'));
                } else {
                    return json_encode(array('status' => false, 'message' => "Message could not configured mail. Mailer Error : " . $this->setMail->ErrorInfo));
                }
    
            } catch (Exception $e) {
                return json_encode(array('status' => false, 'message' => "Message could not be sent. Mailer Error: " . $this->setMail->ErrorInfo));
                
            }
        }
        

    }
