<?php
require_once("../config/db_config.php");
if (!isset($_SESSION['logged_in'])) {
	$_SESSION['message'] = "You need to login to edit your articles. Please login here.";
	header("Location: /views/login_page.php");
}
$blog_id = $_SESSION['edit_id'];
$array_of_posts = $conn->query("SELECT * FROM articles WHERE id = $blog_id;");
if ($array_of_posts->num_rows > 0) {
	$blog_post = $array_of_posts->fetch_assoc();
	$article_title = $blog_post['title'];
	$article_body = $blog_post['body'];
} else {
	$_SESSION['message'] = "No post of id = $blog_id";
	header("Location: /");
}
?>
<html>
	<body>
		<?php
		require_once("common/navbar.php"); ?>
		<div class="container">
			<form role="form" class="form-horizontal" action="/user/alter_post.php" method="POST">
				<fieldset>
					<legend><h3 class="form-signin-heading">Edit Article</h3></legend>
					<div class="form-group">
						<label class="control-label col-sm-2" for="article_title">Title</label>
						<div class="col-sm-10">
							<input class="form-control" id="article_title" type="text" name="article_title" placeholder="title" value=<?php echo "\"$article_title\""?>  required autofocus>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="article_body">Content</label>
						<div class="col-sm-10">
							<textarea name="article_body" class="form-control" rows="15" placeholder="content" id="article_body" required><?php echo "{$blog_post['body']}"?></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-primary">Edit</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</body>
</html>