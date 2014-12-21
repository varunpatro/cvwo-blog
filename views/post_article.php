<?php
require_once("../config/init.php");
if (!isset($_SESSION['logged_in'])) {
	$_SESSION['message'] = "You need to login to post an article. Please login here.";
	header("Location: /views/login_page.php");
}
?>
<html>
	<body>
		<?php
		require_once("../views/common/navbar.php"); ?>
		<div class="container">
			<form role="form" action="/user/post.php" method="POST">
				<fieldset>
					<legend><h3 class="form-signin-heading">Post Article</h3></legend>
					<input class="form-control" id="article_title" type="text" name="article_title" placeholder="title" required autofocus>
					<br>
					<textarea name="article_body" placeholder="body" id="article_body" required></textarea>
					<button type="submit">Post</button>
				</fieldset>
			</form>
			<p class="insert"></p>
		</div>
	</body>
</html>