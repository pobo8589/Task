<?php
require 'vendor/autoload.php';
require_once __DIR__ . '/vendor/autoload.php';
$mail = new \PHPMailer\PHPMailer\PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = \PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.wp.pl';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'todolistt@wp.pl';                     // SMTP username
    $mail->Password   = 'todolist';                               // SMTP password
    $mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('todolistt@wp.pll', 'Bartosz');
    $mail->addAddress('todolistt@wp.pl', 'Bartosz');     // Add a recipient
          // Name is optional
    $mail->addReplyTo('todolistt@wp.pl', 'Bartosz');



    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>