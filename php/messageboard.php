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

$sql = "SELECT * FROM bnawebsite.messageboard ORDER BY idmessageboard DESC LIMIT 15;";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {
    $returnString .= "<div class='row'>";
    $returnString .= "<div class='col-md-12'>";
    $returnString .= "<h4 class='title'>$row[title]</h4><hr>";
    $returnString .= "<p class='date'>$row[dateSubmited]</p>";
    $returnString .= "<p class='mainText'>$row[message]</p>";
    $returnString .= "</div></div>";
;}



$conn->close();
echo json_encode($returnString);

?>