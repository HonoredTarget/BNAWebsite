<?php 

$homePageText = addslashes($_GET['homePageText']);
$membershipPageText = addslashes($_GET['membershipPageText']);

$servername = "localhost";
$username = "root";
$password = "root";

$conn = new mysqli($servername, $username, $password, "bnawebsite");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo json_encode("Connection To Server Failed");
}

$sql = "UPDATE bnawebsite.websitetext SET text = '$homePageText' WHERE idwebsitetext = 2;";
$result = mysqli_query($conn, $sql);

$sql = "UPDATE bnawebsite.websitetext SET text = '$membershipPageText' WHERE idwebsitetext = 6;";
$result2 = mysqli_query($conn, $sql);

$conn->close();
echo json_encode("Stranger In A Strange Land.");
// Stranger In A Strange Land.


?>