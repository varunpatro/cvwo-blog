<?php
require_once("config/init.php");
?>
<html>
	<body>
		<?php require_once("views/common/navbar.php"); ?>
		<p>
			<?php echo $_SESSION['message']; ?>
		</p>
	</body>
</html>