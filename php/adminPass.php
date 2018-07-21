<?php

$password = $_GET["pass"];
$correctPass = 'admin';
if ($password == $correctPass) {
    echo json_encode("true");
}
else {
    echo json_encode("false");
}

?>