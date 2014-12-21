<?php

require_once("../config/db_config.php");
$blog_id = $_GET['id'];
$query = "SELECT * FROM articles WHERE id = $blog_id;";
$array_of_posts = $conn->query($query);
echo $query;
if ($array_of_posts->num_rows > 0) {
	$blog_post = $array_of_posts->fetch_assoc();
} else {
	$_SESSION['message'] = "No post of id = $blog_id";
	header("Location: /");
}
$id = $blog_post['id'];
echo "$id";
?>
