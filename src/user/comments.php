<?php
require_once("../config/db_config.php");
$blog_id = $_GET['id'];
$array_of_comments = $conn->query("SELECT * FROM comments WHERE blog_id = $blog_id;");
echo '<legend><h3 class="form-signin-heading">Comments</h3></legend>';
if ($array_of_comments->num_rows > 0) {
	echo '<ul>';
	for ($counter = 0; $counter < $array_of_comments->num_rows; $counter++) { 
		$blog_comment = $array_of_comments->fetch_assoc();
		$comment_writer = login_query($blog_comment['author'])->fetch_assoc()['name'];
		$comment_body = $blog_comment['body'];
		$comment_time = $blog_comment['reg_date'];
		echo "<li><p>$comment_body</p><p>$comment_writer</p><p>$comment_time</p></li>";
	}
	echo '</ul>';
} else {
	echo '<div class="lead"><p>No comments yet on this article.<p></div>';		
}

echo '<form class="form-horizontal" action="/user/add_comment.php" method="POST">
		<fieldset>
			<div class="form-group">
				<label class="control-label col-sm-1" for="comment_body">Comment</label>
				<div class="col-sm-5">
					<input class="form-control" id="comment_body" type="text" name="comment_body" placeholder="comment">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<button type="submit" class="btn btn-primary">Comment</button>
				</div>
			</div>
		</fieldset>
	</form>';
?>