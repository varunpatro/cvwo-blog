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
				echo "<table><tr><th>ID</th><th>Name</th></tr>";
				//output data of each row
				while ($row = $articles->fetch_assoc()) {
					echo "<tr><td>".$row["id"]."</td><td>".$row["article"]." ".$row["title"]."</td></tr>";
				}
				echo "</table>";
			} else {
				echo "0 results";
			}
			?>
		</div>	
	</body>
</html>