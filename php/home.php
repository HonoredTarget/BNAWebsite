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
// Message Board Messages
$sql = "SELECT * FROM bnawebsite.messageboard ORDER BY idmessageboard DESC LIMIT 4;";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {
    $returnString .= "<div class='mess'>";
    $returnString .= "<h4>$row[title]</h4><hr>";
    $returnString .= "<h6>$row[dateSubmited]</h6>";
    $returnString .= "<p>$row[message]</p>";
    $returnString .= "</div>";
;}
$returnString .= "&&&()";
// Array Split by &&&() 

// Title For JumboTron
$sql = "SELECT * FROM bnawebsite.websitetext WHERE identifier = 'homeHead';";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {
    $returnString .=  "$row[text]";
}
$returnString .= "&&&()";

// Photo For Jumbotron
//<img src="img/portrait-landscape.jpg" class="por" alt="">
$sql = "SELECT * FROM bnawebsite.websitetext WHERE identifier = 'homePic';";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {
    $returnString .=  "<img src='$row[text]' class='por' alt=''>";
}
$returnString .= "&&&()";

// Body For Jumbotron
$sql = "SELECT * FROM bnawebsite.websitetext WHERE identifier = 'homeBody';";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {
    $returnString .=  "<h3>$row[text]</h3>";
}
$returnString .= "&&&()";


$conn->close();
echo json_encode($returnString);

?>