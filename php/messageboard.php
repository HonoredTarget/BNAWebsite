<?php 
/*
$servername = "localhost:3306";
$username = "root";
$password = "root";
$returnString;

$conn = new mysqli($servername, $username, $password, "bnawebsite");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$returnString .= "<div class='row'>";
$returnString .= "<div class='col-md-12'>";

$sql = "SELECT * FROM bnawebsite.messageboard ORDER BY 'idmessageboard' DESC LIMIT 15;";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {
    $returnString .= "<h4 class='title'>$row[title]</h4><hr>";
    $returnString .= "<p class='date'>$row[dateSubmited]</p>"
    $returnString .= "<p class='mainText'>$row[message]</p>"
;}

$returnString .= "</div></div>";

$conn->close(); */
echo json_encode("Hello There");

?>