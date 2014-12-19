<?php
session_start();
?>

<!doctype html>
<html>
	<head>
		<title>Post Articles</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/signin.css">
		<script src="javascripts/post_article.js"></script>
	</head>
	<body>
		<div class="container">
			<?php
			require_once("nav.php");
			echo '<br>';

			if (!isset($_SESSION["logged_in"])) {
				echo '<h3>You\'re not logged in. <br><br> Please login to post an article: <br><br> <a class="btn btn-primary" href="login.php">Login</a></h3>';
			} else {
				echo '<form class="form-signin" role="form">
				<fieldset>
					<legend><h3 class="form-signin-heading">Please Post Your Article</h3></legend>
					<!-- <input class="form-control" id="username" type="text" name="username" placeholder="Username" required autofocus> -->
					<br>
					<input class="form-control" id="title" type="text" name="title" placeholder="Title" required>
					<br>
					<textarea id="article" name="article" class="form-control" rows="10" placeholder="Article"></textarea>
					<br>
					<button id="post" onclick="post_article()" type="button" class="btn btn-lg btn-primary btn-block">Post Article</button>
				</fieldset>
			</form>';
			}
			?>
			<p class="insert"></p>
		</div>
	</body>
</html>