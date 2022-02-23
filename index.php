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

$mail->Username = 'raitochong@gmail.com';
$mail->Password = 'password';

$mail->setFrom('raitochong@gmail.com', 'Raito');
$mail->addAddress('kwongwei135@gmail.com');
$mail->addReplyTo('raitochong@gmail.com');

$mail->isHTML(true);
$mail->Subject = 'PHP Mailer Subject';
$mail->Body = '<h1 align = center>Test</h>';
$mail->addAttachment('C:\Users\ASUS\Pictures\Anime\kv_ubw.png');

if(!$mail->send()){
    echo 'Message could not be sent';
} else {
    echo 'Message has been sent!';
}

?>
