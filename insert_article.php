<?php
session_start();
require_once("conn.php");

$art = $_POST['art'];
$title = $_POST['title'];
$uname = $_SESSION['logged_in'];

$sql_query = "INSERT INTO articles (title, author, article) VALUES (\"$title\", \"$uname\", \"$art\");";

$result = $conn->query($sql_query);

if ($result) {
	echo "Article posted";
	echo $art;
} else {
	echo "Error posting article: " . $conn->error;
}

?>