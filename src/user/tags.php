<?php
	require_once("../config/db_config.php");	

	if (!($article_tags = $conn->query("SELECT * FROM tags WHERE blog_id = $blog_id ORDER BY id DESC;"))) {
		echo "Querying articles failed: (" . $conn->errno . ") " . $conn->error;
	}
	if ($article_tags->num_rows > 0) {
		echo '<div class=""><p>_______________</p><p>Tags: </p>';
		while ($row = $article_tags->fetch_assoc()) {
			echo "<code class=\"btn btn-default\">{$row['tag']}</code>&nbsp;";
		}
		echo "</div>";
	} else {
		echo '<p class="no-tags"></p>';
	}
?>
