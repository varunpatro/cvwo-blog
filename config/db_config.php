<?php
// require_once("/config/init.php");

$servername = "localhost";
$username = "varun";
$password  = "house";
$dbname = "blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	echo "<p>Connection Failed: " . $conn->connect_error + " </p>";
} else {
	// echo "<p>Connection Succesfull!</p>";
}

?>