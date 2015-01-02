<?php
require_once("../config/init.php");
if (!isset($_SESSION['logged_in'])) {
	$_SESSION['message'] = "You need to login to post an article. Please login here.";
	header("Location: /views/login_page.php");
}
?>

<html>
	<head>
		<title>Writer's Portal</title>
	</head>
	<body>
		<div class="container content-secondary">
			<?php 
			require_once("common/navbar.php");
			require_once("common/alert.php");
			alert('success');
			?>
			
			<div class="container">
				<?php
				require_once("../config/db_config.php");
				echo '<h1 class="page-header">Your Blog Articles</h1>';
				if (!($blog_articles = $conn->query("SELECT * FROM articles WHERE author=\"{$_SESSION['username']}\" ORDER BY id DESC;"))) {
				echo "Querying articles failed: (" . $conn->errno . ") " . $conn->error;
				}
				if ($blog_articles->num_rows > 0) {
				echo "<ul>";
									while ($row = $blog_articles->fetch_assoc()) {
									$id= $row['id'];
									echo "<li><a href=\"/views/blog_post.php?id=$id\">" . $row['title'] . "</a></li>";
									}
				echo "</ul>";
				} else {
				echo '<p class="lead">You have not written any articles! Please write one here: 
				<span><a href="post_article.php">Post Article</a></span></p>';
				}
				?>
			</div>
		</div>
	</body>
</html>