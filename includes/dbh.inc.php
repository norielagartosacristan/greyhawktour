<?php
$host = 'localhost';
$dbname = 'travel_and_tours';
$username = 'root'; // Change this if your MySQL username is different
$password = ''; // Your MySQL password

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
