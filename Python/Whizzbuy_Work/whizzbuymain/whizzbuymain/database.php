<?php
$servername ="whizzbuydev.c1vkqotq7mru.us-west-2.rds.amazonaws.com";
$username = "whizzbuydev";
$password = "whizzbuydev";
$dbname = "whizzbuydev"; 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Connection error";
} 
?>