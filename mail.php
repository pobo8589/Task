<?php
require 'vendor/autoload.php';
require_once __DIR__ . '/vendor/autoload.php';
$mail = new \PHPMailer\PHPMailer\PHPMailer(true);

try {

    $mail->SMTPDebug = \PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.wp.pl';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'todolistt@wp.pl';
    $mail->Password   = 'todolist';
    $mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;


    $mail->setFrom('todolistt@wp.pll', 'Bartosz');
    $mail->addAddress('todolistt@wp.pl', 'Bartosz');

    $mail->addReplyTo('todolistt@wp.pl', 'Bartosz');




    $mail->isHTML(true);
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>