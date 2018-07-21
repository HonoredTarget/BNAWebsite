<?php 

$returnString;

$servername = "localhost";
$username = "root";
$password = "root";

$conn = new mysqli($servername, $username, $password, "bnawebsite");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo json_encode("Connection To Server Failed");
}

$sql = "SELECT * FROM bnawebsite.websitetext WHERE identifier = 'homeBody';";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)) {
    $returnString .= "$row[text]";
}

$returnString .= "&&&()";

$sql = "SELECT * FROM bnawebsite.websitetext WHERE identifier = 'memberText';";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)) {
    $returnString .= "$row[text]";
}

$returnString .= "&&&()";

$conn->close();
echo json_encode($returnString);

?>