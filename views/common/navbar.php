<?php
echo '<nav class="navbar-wrapper navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
				
						<a href="/">Varun\'s Blog</a>
				
				
						<a href="all_articles.php">All Articles</a>
						<a href="login.php">Login</a>
						<a href="reset.php">Reset Database</a>
						<a href="add_user.php">Add User</a>
						<a href="post_article.php">Post Article</a>
						<a href="/user/logout.php">Log Out</a>
						<p class="navbar-brand navbar-fixed-bottom">';
						if (!isset($_SESSION['logged_in'])) {
								echo "Not logged in";
							} else {
								echo "Currently Logged in as: " . $_SESSION['logged_in'];
							}
			echo '</p>
				
		</div>
</nav>';
?>