<?php
$servername = "localhost";
$username = "root"; // Default MySQL username
$password = ""; // Default MySQL password is blank in XAMPP
$database = "crime1_userlogin";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
