<?php 

$firstName = addslashes($_GET["firstName"]);
$lastName =  addslashes($_GET["lastName"]);
$email =  addslashes($_GET["email"]);
$addToList =  addslashes($_GET["addToList"]);
$list = "";

$servername = "localhost";
$username = "root";
$password = "root";

$conn = new mysqli($servername, $username, $password, "bnawebsite");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo json_encode("Connection To Server Failed");
}

if ($addToList == "on") {
    $list = "yes";
}
else {
    $list = "no";
}

$sql = "INSERT INTO bnawebsite.users (firstName, lastName, email, optForEmail) VALUES ('$firstName', '$lastName', '$email', '$list');";
$result = mysqli_query($conn, $sql);


$conn->close();
echo json_encode("OBI-WAN KENOBI: Hello There\nGREVIOUS: General Kenobi\nGREVIOUS: You Are A Bold One");




?>