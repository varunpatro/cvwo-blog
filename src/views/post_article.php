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
			<form role="form" class="form-horizontal" action="/user/post.php" method="POST">
				<fieldset>
					<legend><h3 class="form-signin-heading">Post Article</h3></legend>
					<div class="form-group">
						<label class="control-label col-sm-2" for="article_title">Title</label>
						<div class="col-sm-10">
							<input class="form-control" id="article_title" type="text" name="article_title" placeholder="title" required autofocus>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="article_body">Content</label>
						<div class="col-sm-10">
							<textarea name="article_body" class="form-control" rows="15" placeholder="content" id="article_body" required></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="article_tags">Tags</label>
						<div class="col-sm-10">
							<input class="form-control" id="article_tags" type="text" name="article_tags" placeholder="enter tags separated by commas">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-primary">Post</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</body>
</html>