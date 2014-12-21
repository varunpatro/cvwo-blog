<?php
require_once("config/init.php");
?>
<html>
	<body>
		<?php require_once("views/common/navbar.php"); ?>
		<p>
			<?php 
			echo $_SESSION['message'];
			$_SESSION['message'] = "";
			?>
		</p>
		<div class="container">
		<?php require_once("views/blog_articles.php"); ?>
		</div>
	</body>
</html>