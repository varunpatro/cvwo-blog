<?php
require_once("../config/db_config.php");
$blog_id = $_GET['id'];
$array_of_comments = $conn->query("SELECT * FROM comments WHERE id = $blog_id;");
if ($array_of_comments->num_rows > 0) {
	$blog_comment = $array_of_comments->fetch_assoc();
	$comment_writer = login_query($blog_comment['author'])->fetch_assoc()['name'];
	$comment_body = $blog_comment['body'];
	$comment_time = $blog_comment['reg_date'];
} else {
	echo "No comments yet on this article.<br>";
	echo 'Click here to comment: <span><button type="button" onclick="display_comment_box(this)">Comment</button></span>';
}
?>