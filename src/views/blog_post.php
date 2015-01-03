<?php
require_once("../config/db_config.php");
$blog_id = $_GET['id'];
$_SESSION['blog_id'] = $blog_id;
$array_of_posts = $conn->query("SELECT * FROM articles WHERE id = $blog_id;");
if ($array_of_posts->num_rows > 0) {
	$blog_post = $array_of_posts->fetch_assoc();
	$writer = login_query($blog_post['author'])->fetch_assoc()['name'];
} else {
	$_SESSION['message'] = "No post of id = $blog_id";
	header("Location: /");
}
?>
<html>
	<head>
		<title><?php echo $blog_post["title"]; ?> </title>
		<script src="../static/comments.js"></script>
	</head>
	<body>
		<?php require_once("common/navbar.php"); ?>
		<div class="container">
			<article>
				<h1><?php echo $blog_post["title"]; ?></h1>
				<p><?php echo "Written by: <strong>$writer</strong> on <strong>{$blog_post['reg_date']}</strong>"; ?></p>
				<p>_______________</p>
				<p class="lead"><?php echo str_replace("\n", "<br>", $blog_post["body"]); ?></p>
				<p>_______________</p>
				<div id="comments">
					<p><?php require_once("../user/comments.php"); ?></p>
					<p id="comment_form">
					</p>
				</div>
			</article>
		</div>
	</body>
</html>