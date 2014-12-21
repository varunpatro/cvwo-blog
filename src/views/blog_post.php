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
</head>
<body>
<?php require_once("common/navbar.php"); ?>
<article>
<h2><?php echo $blog_post["title"]; ?></h2>
<h4><?php echo "Written by: $writer";?></h4>
<h4><?php echo "Posted on: {$blog_post['reg_date']}"; ?></h4>
<p><?php echo str_replace("\n", "<br>", $blog_post["body"]); ?></p>
</article>
</body>
</html>