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
			require_once("conn.php");

			$sql_query = "SELECT * FROM articles;";
			$articles = $conn->$sql_query;

			
			?>
		</div>	
	</body>
</html>