<?php

require_once("../config/db_config.php");

$tag_content = $_GET['tag'];


if (!($tag_query = $conn->query("SELECT blog_id FROM tags WHERE tag = \"$tag_content\" ORDER BY id DESC;"))) {
	echo "Querying articles failed: (" . $conn->errno . ") " . $conn->error;
}
if ($tag_query->num_rows > 0) {
	$blog_ids = array();
	while ($tag_row = $tag_query->fetch_assoc()) {
		array_push($blog_ids, $tag_row['blog_id']);

	}
	// echo gettype(intval(array_pop($blog_ids)));
	// var_dump($blog_ids);
	echo "hello";
	while(count($blog_ids) > 0) {
	// 	$art_id = intval(array_pop($blog_ids));
	// 	$blog_art_query = $conn->("SELECT * from articles WHERE id = $art_id");
	// 	$art_data = $blog_art_query->fetch_assoc();
	// 	echo "<li><a href=\"/views/blog_post.php?id=$art_id\">" . $art_data['title'] . "</a></li>";
		// echo "hello";
	}

} else {
	echo '<p class="lead">No articles with this tag.</p>';
}

	
?>
