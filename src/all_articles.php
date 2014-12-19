<?php
session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<title>All Articles</title>
	</head>
	<body>
	<?php require_once("nav.php"); ?>
		<div class="container">
			<?php
			echo "<br><br><br>";
			require_once("conn.php");

			$sql_query = "SELECT * FROM articles;";
			$articles = $conn->query($sql_query);

			if ($articles->num_rows > 0) {
				while ($row = $articles->fetch_assoc()) {
					echo ($row["article"]);
				}
			} else {
				echo "0 results";
			}
			?>
		</div>	
	</body>
</html>