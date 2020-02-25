<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = gethostname();
$mail->SMTPAuth = true;
$mail->Username = 'sender@example.com';
$mail->Password = 'password';
$mail->setFrom('sender@example.com');
$mail->addAddress('recipient@example.com');
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the body.';
$mail->send();
?>