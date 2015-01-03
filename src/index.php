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
			require_once("views/common/alert.php");
			if (!isset($_SESSION['alert_status'])) {
				alert('success');
			} else {
				alert($_SESSION['alert_status']);
				unset($_SESSION['alert_status']);
			}
			?>
			
			<div class="container">
				<?php
				require_once("config/db_config.php");
				echo '<h1 class="page-header">Blog Articles</h1>';
				if (!($blog_articles = $conn->query("SELECT * FROM articles ORDER BY id DESC;"))) {
				echo "Querying articles failed: (" . $conn->errno . ") " . $conn->error;
				}
				if ($blog_articles->num_rows > 0) {
				echo '<ul class="lead">';
									while ($row = $blog_articles->fetch_assoc()) {
									$id = $row['id'];
									echo "<li><a href=\"/views/blog_post.php?id=$id\">" . $row['title'] . "</a></li>";
									}
				echo "</ul>";
				} else {
				echo '<p class="lead">No articles at present!</p>';
				}
				?>
			</div>
		</div>
	</body>
</html>