<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$email = $_GET["email"];
$phone = $_GET["phoneNumber"];
$subject = $_GET["subject"];
$content = $_GET["content"];
$contactForm;

if ($phone != "") {
    $contactForm = "Contact Information:<br>Email: " . $email . "<br>Phone Number: " . $phone;
}
else {
    $contactForm = "Contact Information:<br>Email: " . $email;
}

$formCont = $contactForm . "<br><h3><b>" . $subject . "</b></h3><br><h4>" . $content . "</h4>";
//$contactForm + "\n\n" + $subject + "\n\n" + $content;

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'websitebna';
$mail->Password = 'randompassword99';
$mail->SetFrom('no-reply@bna.com');
$mail->Subject = 'Brittany Neighborhood Association Contact Form';
$mail->Body = $formCont;
$mail->AddAddress('owen@oertell.net');

$mail->Send();

// "Do You Know The Tragedy Of Darth Plagueis THe Wise?"
echo json_encode($content);

?>