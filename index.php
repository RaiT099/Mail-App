<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';

$mail->Username = 'xxxx@gmail.com';
$mail->Password = 'password';

$mail->setFrom('xxxx@gmail.com', 'xxxx');
$mail->addAddress('yyyy@gmail.com');
$mail->addReplyTo('xxxx@gmail.com');

$mail->isHTML(true);
$mail->Subject = 'PHP Mailer Subject';
$mail->Body = '<h1 align = center>Test</h>';
$mail->addAttachment('C:\Users\ASUS\Pictures\kv_ubw.png');

if(!$mail->send()){
    echo 'Message could not be sent';
} else {
    echo 'Message has been sent!';
}

?>
