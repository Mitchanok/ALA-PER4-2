<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "energy";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("conection failed: " . $conn->connect_error);

}
?>