<?php
$servername = "localhost";
$username = "root"; // Default MySQL username
$password = ""; // Default MySQL password
$dbname = "crime1_officerlogin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
