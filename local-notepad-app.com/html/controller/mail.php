<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

class sendmail
{
    public $mail;
    public function __construct(PHPMailer $mail)
    {
        $this->mail = $mail;
    }
    public function amethod()
    {

        $this->mail->Host = "smtp.gmail.com";
        $this->mail->isSMTP();
        $this->mail->SMTPAuth = true;
        $this->mail->SMTPSecure = "tls";
        $this->mail->Port = "587";
        $this->mail->Username = "nikhil.khandelwal@innoraft.com";
        $this->mail->Password = "ifnmekwcyymauztx";
        $this->mail->Subject = "test email";
        $this->mail->setFrom("nikhil.khandelwal@innoraft.com");
        $this->mail->Body = "this is plain text";
        $this->mail->addAddress($_POST['email']);
        $this->mail->send();
        $this->mail->smtpClose();
    }
}

if (isset($_POST['submit'])) {
    $mail = new PHPMailer(true);
    $myobj = new sendmail($mail);
    $myobj->amethod();
}
