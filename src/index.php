<?php
require_once("config/init.php");
?>
<html>
	<head>
		<title>Varun's Blog</title>
	</head>
	<body>
		<div class="container content-secondary">
			<?php require_once("views/common/navbar.php");
			
				
				if (isset($_SESSION['message'])) {
					echo '<div class="alert alert-success container"><p>';
						echo $_SESSION['message'];
						unset($_SESSION['message']);
					echo '</p></div>';
				}
			?>
			
			<!-- <div class="alert alert-danger" role="alert">
				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				<span class="sr-only">Error:</span>
				Enter a valid email address
			</div> -->
			<div class="container">
				<?php
				require_once("config/db_config.php");
				echo '<h1 class="page-header">Blog Articles</h1>';
				if (!($blog_articles = $conn->query("SELECT * FROM articles ORDER BY id DESC;"))) {
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
				echo '<p>No articles at present!</p><span class="glyphicon glyphicon-pencil"></span>';
				}
				?>
			</div>
		</div>
	</body>
</html>