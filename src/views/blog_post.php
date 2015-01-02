<?php
require_once("../config/db_config.php");
$blog_id = $_GET['id'];
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
				<h5><?php echo "Written by: $writer";?></h5>
				<h5><?php echo "Posted on: {$blog_post['reg_date']}"; ?></h5>
				<p>_______________</p>
				<p class=""><?php echo str_replace("\n", "<br>", $blog_post["body"]); ?></p>
				<p>_______________</p>
				<p><?php require_once("../user/comments.php"); ?></p>
			</article>
		</div>
	</body>
</html>