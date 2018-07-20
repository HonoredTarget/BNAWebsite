<?php 

$servername = "localhost";
$username = "root";
$password = "root";
$returnString = "";

$conn = new mysqli($servername, $username, $password, "bnawebsite");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo json_encode("Connection To Server Failed");
}

// Title For Member
$sql = "SELECT * FROM bnawebsite.websitetext WHERE identifier = 'memberHead';";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {
    $returnString .=  "$row[text]";
;}
$returnString .= "&&&()";

// Body For Jumbotron
$sql = "SELECT * FROM bnawebsite.websitetext WHERE identifier = 'memberText';";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {
    $returnString .=  "$row[text]";
;}
$returnString .= "&&&()";

// Photo for Member 
$sql = "SELECT * FROM bnawebsite.websitetext WHERE identifier = 'memberPic';";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {
    $returnString .=  "<img src='$row[text]' class='why-pic' alt=''>";
;}
$returnString .= "&&&()";


$conn->close();
echo json_encode($returnString);

?>