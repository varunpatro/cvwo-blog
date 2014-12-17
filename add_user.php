<?php

echo "Hi there!";

$servername = "localhost";
$username = "varun";
$password  = "house";
$dbname = "blog";

$uname = $_POST['uname'];
$pass = $_POST['pass'];

echo $uname;
echo $pass;

$sql_query = "INSERT INTO users (username, password) VALUES (\"$uname\", \"$pass\");";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	echo "connection failed: " . $conn->connect_error;
} else {
	echo "connection succesfull!";
}

echo $sql_query;

$result = $conn->query($sql_query);

if ($result) {
	echo "User's Details Added";
} else {
	echo "Error Adding User's Details: " . $conn->error;
}

?>