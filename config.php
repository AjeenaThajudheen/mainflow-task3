<?php
$servername = "localhost";
$username = "root";
$password = ""; // Enter your MySQL root password here
$dbname = "dream_makerz_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
