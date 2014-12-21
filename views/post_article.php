<?php
require_once("../config/init.php");
?>
<html>
	<body>
		<?php 
		require_once("../views/common/navbar.php"); ?>
		<p>
			<div class="container">
			<?php
			if (!isset($_SESSION["logged_in"])) {
				echo '<h3>You\'re not logged in. <br><br> Please login to post an article: <br><br> <a class="btn btn-primary" href="/views/login_page.php">Login</a></h3>';
			} else {
				echo '<form role="form" action="/user/post.php" method="POST">
				<fieldset>
					<legend><h3 class="form-signin-heading">Post Article</h3></legend>
					<input class="form-control" id="article_title" type="text" name="article_title" placeholder="title" required autofocus>
					<br>
					<textarea name="article_body" placeholder="body" id="article_body" required></textarea>
					<button type="submit">Post</button>
				</fieldset>
			</form>';
			}
			?>
			<p class="insert"></p>
		</div>
		</p>
	</body>
</html>