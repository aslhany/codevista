<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Failed to connect to database: " . $conn->connect_error);
}
?>
