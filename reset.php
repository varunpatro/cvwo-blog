<?php

$servername = "localhost";
$username = "varun";
$password  = "house";
$db = "blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
	echo "Connection Failed:" . $conn->connect_error;
} else {
	echo "Connection Successful!";
}

$query = <<<FILE
USE blog;

DROP TABLE IF EXISTS users;
CREATE TABLE users
(
	id 				INT UNSIGNED NOT NULL AUTO_INCREMENT, # Unique ID for the record
	username 		VARCHAR(25) NOT NULL, 				  # Username for Writers
	password 		VARCHAR(25) NOT NULL, 				  # Password for Writers
	reg_date		TIMESTAMP, 							  # Time of Registration
	PRIMARY KEY 	(id)
);
FILE;

$result = $conn->multi_query($query);

if ($result) {
	echo "Table created!";
} else {
	echo "Error creating table: " . $conn->error;
}
?>