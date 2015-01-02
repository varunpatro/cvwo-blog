<?php
require_once("init.php");

$db_servername = "localhost";
$db_username = "varun";
$db_password  = "house";
$db_name = "blog";

// Create connection
$conn = new mysqli($db_servername, $db_username, $db_password, $db_name);
// Check connection
if ($conn->connect_error) {
	echo "<p>Connection Failed: " . $conn->connect_error + " </p>";
} else {
	// echo "<p>Connection Succesfull!</p>";
}


$add_user = $conn->prepare("INSERT INTO users (username, password, name) VALUES (?, ?, ?)");
$add_user->bind_param("sss", $uname, $pass, $name);

function add($u, $p, $n) {
	global $uname, $pass, $name, $add_user;
	$uname = $u;
	$pass = $p;
	$name = $n;
	$add_user->execute();
}

function login_query($login_username) {
	global $conn;
	return $conn->query("SELECT * FROM users WHERE username = \"$login_username\";");	
}


$article = $conn->prepare("INSERT INTO articles (title, body, author) VALUES (?, ?, ?)");
$article->bind_param("sss", $title, $body, $author);


function post($t, $b, $a) {
	global $title, $body, $author, $article;
	$title = $t;
	$body = $b;
	$author = $a;
	$article->execute();
}

// $edited_article = $conn->prepare("UPDATE articles SET title = (?), body = (?), WHERE id = (?)");
// $edited_article->bind_param("ssi", $alter_title, $alter_body, $alter_id);

// function edit_article($title, $body, $id) {
// 	global $edited_article, $alter_id, $alter_body, $alter_title;
// 	$alter_id = $id;
// 	$alter_body = $body;
// 	$alter_title = $title;
// 	$edited_article->execute();
// }

$del_article = $conn->prepare("DELETE FROM articles WHERE id = ?");
$del_article->bind_param("i", $del_id);

function delete_article($article_id) {
	global $del_id, $del_article;
	$del_id = $article_id;
	$del_article->execute();
}

function can_alter($article_id) {
	global $conn;
	$results = $conn->query("SELECT * FROM articles WHERE id = $article_id AND author = \"{$_SESSION['username']}\";");
	if ($results->num_rows > 0) {
		return true;
	} else {
		return false;
	}
}

function db_reset () {
	global $conn;
	$db_reset_query = <<<RESET
	USE blog;

	DROP TABLE IF EXISTS users;
	CREATE TABLE users
	(
		id 				INT UNSIGNED NOT NULL AUTO_INCREMENT, # Unique ID for the writer
		username 		VARCHAR(25) NOT NULL, 				  # Writer's username
		password 		VARCHAR(25) NOT NULL, 				  # Writer's password
		name 			VARCHAR(40) NOT NULL, 				  # Writer's name
		reg_date		TIMESTAMP, 							  # Time of Registration
		PRIMARY KEY 	(id, username)
	);

	DROP TABLE IF EXISTS articles;
	CREATE TABLE articles
	(
		id 				INT UNSIGNED NOT NULL AUTO_INCREMENT, # Unique ID for the article
		title 			VARCHAR(100), 						  # Article's title
		body 	 		VARCHAR(8000), 						  # Article Content
		author 			VARCHAR(25), 						  # Writer's username
		reg_date		TIMESTAMP, 							  # Posting Time
		PRIMARY KEY 	(id)
	);

	INSERT INTO users (name, username, password) VALUES ("administrator", "admin", "adminpass");
RESET;

	$result = $conn->multi_query($db_reset_query);

	if ($result) {
		return "Table created!";
	} else {
		return "Error creating table: " . $conn->error;
	}
}

?>