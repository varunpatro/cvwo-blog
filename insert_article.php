<?php
session_start();
require_once("conn.php");

$art = $_POST['art'];
$title = $_POST['title'];
$uname = $_SESSION['logged_in'];
echo $uname;

$sql_query = "INSERT INTO articles (title, author, article) VALUES (\"$title\", \"$uname\", \"$art\");";

$result = $conn->query($sql_query);

if ($result) {
	echo "Article posted";
} else {
	echo "Error posting article: " . $conn->error;
}

?>