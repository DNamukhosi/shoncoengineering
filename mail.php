<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$fromemail="damarisnamukhosi@gmail.com";
$frompassword="1qazXSW@#EDC";
$toemail="damarisnamukhosi@gmail.com";
$email = $_POST["email"];
$names = $_POST["fullName"];
$company =  $_POST["companyName"];
$phone = $_POST["phone"];
$comments = $_POST["comments"];

$message = "Name : " . $names . "<br><br>" . "Sender Email : "  . $email . "<br><br>" . "Company name : " . $company . "<br><br>" . "Phone : " . $phone . "<br><br>" . "Comments : " . $comments; 
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = "smtp.gmail.com";                   // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $fromemail;              // SMTP username
    $mail->Password = $frompassword;                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($fromemail, 'Mailer');          //This is the email your form sends From
    $mail->addAddress($toemail, 'Joe User'); // Add a recipient address


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'From Website';
    $mail->Body    = $message;
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
 header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
