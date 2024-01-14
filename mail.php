<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-6.9.1/src/Exception.php';
require 'PHPMailer-6.9.1/src/PHPMailer.php';
require 'PHPMailer-6.9.1/src/SMTP.php';

$name =  $_POST['name'];
$email =  $_POST['email'];
$subject =  $_POST['subject'];
$message =  $_POST['message'];

$mail = new PHPMailer(true);

try {
    // Set up the PHPMailer configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'milimbochitundu15@gmail.com';
    $mail->Password = 'mhynbsqbeigdfrjx';
    $mail->SMTPSecure = 'tls'; // or 'ssl'
    $mail->Port = 587; // or 465
    // $mail->SMTPDebug = 2; 
    // 2 for detailed debug output


    // Set other email parameters
    $mail->setFrom($email, $name);
    $mail->addReplyTo($email, $name);
    $mail->addAddress('milimbochitundu15@gmail.com'); // Replace with your recipient's email
    $mail->Subject = $subject;
    $mail->Body = $message;

    // Send the email
    $mail->send();
    echo 'Email sent successfully';
} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}
