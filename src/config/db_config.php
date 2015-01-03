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

function last_id() {
	global $conn;
	$last_row_query = $conn->query("SELECT id FROM articles ORDER BY id DESC LIMIT 1;");
	$last_row = $last_row_query->fetch_assoc();
	return $last_row['id'];
}


function listify($data) {
	return explode(",", $data);
}

$tag = $conn->prepare("INSERT INTO tags (blog_id, tag) VALUES (?, ?);");
$tag->bind_param("is", $b_id, $tag_content);

function post_tags($blog_id, $tags) {
	global $conn, $tag, $b_id, $tag_content;
	$tag_list = listify(str_replace(" ", "", $tags));
	$b_id = $blog_id;
	for ($counter = 0; $counter < count($tag_list); $counter++) {
		$tag_content = $tag_list[$counter];
		if ($tag_content !== "") {
			$tag->execute();
		}
	}

}

$article = $conn->prepare("INSERT INTO articles (title, body, author) VALUES (?, ?, ?)");
$article->bind_param("sss", $title, $body, $author);


function post($art_title, $art_body, $art_tags, $art_author) {
	global $title, $body, $author, $article;
	$title = $art_title;
	$body = $art_body;
	$author = $art_author;
	$article->execute();
	return post_tags(last_id(), $art_tags);
}

$edited_article = $conn->prepare("UPDATE articles SET title = ?, body = ? WHERE id = ?;");
$edited_article->bind_param("ssi", $alter_title, $alter_body, $alter_id);

function edit_article($title, $body, $id) {
	global $edited_article, $alter_id, $alter_body, $alter_title;
	$alter_id = $id;
	$alter_body = $body;
	$alter_title = $title;
	$edited_article->execute();
}

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

$add_comm = $conn->prepare("INSERT INTO comments (body, author, blog_id) VALUES (?, ?, ?)");
$add_comm->bind_param("ssi", $comm_body, $comm_writer, $comm_id);


function add_comment($b, $w, $i) {
	global $comm_body, $comm_writer, $comm_id, $add_comm;
	$comm_body = $b;
	$comm_writer = $w;
	$comm_id = $i;
	$add_comm->execute();
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

	DROP TABLE IF EXISTS comments;
	CREATE TABLE comments
	(
		id 				INT UNSIGNED NOT NULL AUTO_INCREMENT, # Unique ID for the comment
		blog_id 		INT UNSIGNED,						  # Blog Post's ID
		body 			VARCHAR(2000), 						  # Comment's body
		author 			VARCHAR(25), 						  # Comment's writer
		reg_date 		TIMESTAMP, 							  # Posting Time
		PRIMARY KEY 	(id)
	);

	DROP TABLE IF EXISTS tags;
	CREATE TABLE tags
	(
		id 				INT UNSIGNED NOT NULL AUTO_INCREMENT, # Unique ID for the tags
		blog_id			INT UNSIGNED, 						  # Blog Post's ID
		tag 			VARCHAR(25), 						  # Tag name
		reg_date 		TIMESTAMP, 							  # Posting Time
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