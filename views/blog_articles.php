<?php

require_once("../config/db_config.php");

if (!($blog_articles = $conn->query("SELECT * FROM articles;"))) {
	echo "Querying articles failed: (" . $conn->errno . ") " . $conn->error;
}


if ($blog_articles->num_rows > 0) {
	echo "<ul>";
	while ($row = $blog_articles->fetch_assoc()) {
		echo "<li><a href=\"\">" . $row['title'] . "</a></li>";
	}
	echo "</ul>";
} else {
	echo "<p>No articles at present!</p>";
}	



?>