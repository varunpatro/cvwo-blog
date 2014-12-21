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
	id 				INT UNSIGNED NOT NULL AUTO_INCREMENT, # Unique ID for the writer
	username 		VARCHAR(25) NOT NULL, 				  # Writer's username
	password 		VARCHAR(25) NOT NULL, 				  # Writer's password
	reg_date		TIMESTAMP, 							  # Time of Registration
	PRIMARY KEY 	(id, username)
);

DROP TABLE IF EXISTS articles;
CREATE TABLE articles
(
	id 				INT UNSIGNED NOT NULL AUTO_INCREMENT, # Unique ID for the article
	title 			VARCHAR(100), 						  # Article's title
	article 		VARCHAR(8000), 						  # Article Content
	author 			VARCHAR(25), 						  # Writer's username
	reg_date		TIMESTAMP, 							  # Posting Time
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