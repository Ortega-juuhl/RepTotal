<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reptotal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: Set character set to UTF-8 to support special characters
$conn->set_charset("utf8");

// Close connection when done
// $conn->close();
?>
