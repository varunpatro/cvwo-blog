<?php

require_once("../config/db_config.php");

// obtain the tag either through ajax or using session variables 
if (isset($_GET['tag'])) {
   $tag_content = $_GET['tag'];
} else {
  $tag_content = $_SESSION['tag_search_through_session'];
}

// retrieve associated articles with the required tag
if (!($tag_query = $conn->query("SELECT blog_id FROM tags WHERE tag = \"$tag_content\" ORDER BY id DESC;"))) {
	echo "Querying articles failed: (" . $conn->errno . ") " . $conn->error;
}
if ($tag_query->num_rows > 0) {
	$blog_ids = array();
	while ($tag_row = $tag_query->fetch_assoc()) {
		array_push($blog_ids, $tag_row['blog_id']);

	}
	echo "<h3>Articles with tag: $tag_content</h3>";
	echo '<ul class="lead">';

// retrieve the names of the blog articles with the required tag
	while(count($blog_ids) > 0) {
		$art_id = intval(array_pop($blog_ids));
		$blog_art_query = $conn->query("SELECT * from articles WHERE id = $art_id;");
		$art_data = $blog_art_query->fetch_assoc();
		echo "<li><a href=\"/views/blog_post.php?id=" . $art_id . "\">" . $art_data['title'] . "</a></li>";
	}
	echo '</ul>';

} else {
	echo '<p class="lead">No articles with this tag.</p>';
}

	
?>
