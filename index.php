<?php
// Start the Session
session_start();

if (!isset($_SESSION['appStarted'])) {
	$_SESSION['appStarted'] = true;
}

?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<title>Varun's Blog for all Authors</title>
	</head>
	<body>
		<div class="container">
			<div class="intro">
				<h1> </h1><br>
				
				<h1>Hey there!</h1>
				
				<br>
				<h3>Welcome to Varun's Blog! Here you can view articles by various authors as well as sign up to write your own articles for the world. Happy reading!</h3><br>

				<h4> <?php 
				if (!isset($_SESSION['logged_in'])) {
					echo "Not logged in";
				} else {
					echo "Currently Logged in as: " . $_SESSION['logged_in']; 
				}
				?> </h4>
			</div>
			<nav class="navbar-wrapper navbar-default navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="#	">Varun's Blog</a>
					</div>
					<div class="collapse navbar-collapse navbar-ex1-collapse nav navbar-nav">
						<a class="navbar-brand" href="all_articles.html">All Articles</a>
						<a class="navbar-brand" href="login.php">Login</a>
						<a class="navbar-brand" href="reset.php">Reset Database</a>
						<a class="navbar-brand" href="add_user.html">Add User</a>
						<a class="navbar-brand" href="post_article.html">Post Article</a>
						<a class="navbar-brand" href="logout.php">Log Out</a>
					</div>
				</nav>
			</div>
		</body>
	</html>