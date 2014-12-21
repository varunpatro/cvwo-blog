<?php

require_once("../config/db_config.php");
echo "<h2>Blog Articles</h2>";

if (!($blog_articles = $conn->query("SELECT * FROM articles ORDER BY id DESC;"))) {
	echo "Querying articles failed: (" . $conn->errno . ") " . $conn->error;
} 


if ($blog_articles->num_rows > 0) {
	echo "<ul>";
	while ($row = $blog_articles->fetch_assoc()) {
		$id= $row['id'];
		echo "<li><a href=\"/views/blog_post.php?id=$id\">" . $row['title'] . "</a></li>";
	}
	echo "</ul>";
} else {
	echo "<p>No articles at present!</p>";
}	

?>