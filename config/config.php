<?php
$servername = "localhost";
$username = "invisible-app";
$password = "invisible";
$dbname = "invisible-app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
?>  

