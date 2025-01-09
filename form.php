<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root"; 
$password = "";
$database = "assignment_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['Namesurname']);
    $email = htmlspecialchars($_POST['Email']);
    $telno = htmlspecialchars($_POST['Telephone']);
    $message = htmlspecialchars($_POST['Note']);
  
    if (strlen($telno) > 15) {
        echo "Phone number is too long!";
        exit();
    }
    if (!preg_match('/^[0-9]+$/', $telno)) {
        echo "Phone number must contain only digits!";
        exit();
    }

    $sql = "INSERT INTO form (namesurname, email, telephone, note) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssss", $name, $email, $telno, $message);

        if ($stmt->execute()) {
            echo "Submission successful!";
        } else {
            echo "ERROR: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error with SQL preparation: " . $conn->error;
    }
}

$conn->close();
?>
