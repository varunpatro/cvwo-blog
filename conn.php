<?php

$servername = "localhost";
$username = "varun";
$password  = "house";
$dbname = "blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	echo "connection failed: " . $conn->connect_error;
} else {
	// echo "connection succesfull!";
}

?>