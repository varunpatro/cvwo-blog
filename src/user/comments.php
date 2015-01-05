<?php
require_once("../config/db_config.php");

// retrieve the relevant blog post
$blog_id = $_GET['id'];

// retrieve the comments associated with the relevant blog post
$array_of_comments = $conn->query("SELECT * FROM comments WHERE blog_id = $blog_id;");
echo '<legend><h3 class="form-signin-heading">Comments</h3></legend>';
if ($array_of_comments->num_rows > 0) {
	echo '<ul>';
	// diplay the comments associated with the relevant blog post
		for ($counter = 0; $counter < $array_of_comments->num_rows; $counter++) {
			$blog_comment = $array_of_comments->fetch_assoc();
			$comment_writer = login_query($blog_comment['author'])->fetch_assoc()['name'];
			$comment_body = $blog_comment['body'];
			$comment_time = $blog_comment['reg_date'];
			echo "<li><p class=\"lead\">$comment_body</p><p>Written by <strong>$comment_writer</strong> on <strong>$comment_time</strong></p></li>";
		}
	echo '</ul>';
} else {
			echo '<div class="lead"><p>No comments yet on this article.<p></div>';
}

// display the form for adding comments
echo '<form class="form-horizontal" action="/user/add_comment.php" method="POST">
			<fieldset>
					<div class="form-group">
						<div class="col-sm-5">
								<input class="form-control" id="comment_body" type="text" name="comment_body" placeholder="comment">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10">
								<button type="submit" class="btn btn-primary">Comment</button>
						</div>
					</div>
			</fieldset>
	</form>';
?>