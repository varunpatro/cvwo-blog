<?php

echo '<nav class="navbar-wrapper navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="/">Varun\'s Blog</a>
		</div>
		<div class="collapse navbar-collapse navbar-ex1-collapse nav navbar-nav">
			<a class="navbar-brand" href="all_articles.html">All Articles</a>
			<a class="navbar-brand" href="login.php">Login</a>
			<a class="navbar-brand" href="reset.php">Reset Database</a>
			<a class="navbar-brand" href="add_user.php">Add User</a>
			<a class="navbar-brand" href="post_article.php">Post Article</a>
			<a class="navbar-brand" href="logout.php">Log Out</a>
			<p class="navbar-brand navbar-fixed-bottom">Logged-In As: <a href="logout.php">Logged-In As: </a></p>

		</div>
	</div>
</nav>';


// if (!isset($_SESSION['logged_in'])) {
// 					echo "Not logged in";
// 				} else {
// 					echo "Currently Logged in as: " . $_SESSION['logged_in'];
// 				}
?>

