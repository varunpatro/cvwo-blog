<?php
function alert($alert_type) {
	if (isset($_SESSION['message'])) {
		echo '<div class="alert alert-' . $alert_type . ' container"><p class="lead"><strong>';
		echo $_SESSION['message'];
		unset($_SESSION['message']);
		echo '</strong></p></div>';
	}
}

?>