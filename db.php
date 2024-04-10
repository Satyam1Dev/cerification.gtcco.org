<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gtco";

$conn = new mysqli($servername, $username, $password, $dbname);
{
   // echo "Connected Sussesfully";
}
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>