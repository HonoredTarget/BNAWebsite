<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

date_default_timezone_set("America/New_York");

$title = $_GET["title"];
$subject = $_GET["subject"];
$body = $_GET["body"];
$addToMessageboard = $_GET["addToMessageboard"];
$sendAsEmail = $_GET["sendAsEmail"];
$date = date("h:i a m/d/y");
$sql;

echo json_encode($addToMessageboard);
$servername = "localhost";
$username = "root";
$password = "root";

$conn = new mysqli($servername, $username, $password, "bnawebsite");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo json_encode("Connection To Server Failed");
}

if ($addToMessageboard == "on") {
    // Add To Message Board
    $sql = "INSERT INTO bnawebsite.messageboard (message, title, dateSubmited) VALUES ('$body', '$title', '$date');";
    echo json_encode($sql);
    $result = mysqli_query($conn, $sql);
}
if ($sendAsEmail == "on") {
    try {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = '465';
        $mail->isHTML();
        $mail->Username = 'websitebna@gmail.com';
        $mail->Password = 'randompassword99';
        $mail->SetFrom('no-reply@bna.com', "Brittany Neighborhood Association");
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress('websitebna@gmail.com');

        $sql = "SELECT * FROM bnawebsite.users WHERE optForEmail = 'yes';";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)) {
            $mail->addBCC("$row[email]");
        }
       

        $mail->Send();
    }
    catch (Exception $e) {
        echo json_encode("Message Could Not Be Sent. Mail Error: " . $mail->ErrorInfo);
    }
    // Send Message As Email
}
// https://www.w3schools.com/html/html_formatting.asp




$conn->close();
echo json_encode("Hello");

?>