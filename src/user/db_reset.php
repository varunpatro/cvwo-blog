<?php
require_once("logout.php");
require_once("../config/db_config.php");

db_reset();

header("Location: /config/message_passing.php?m=db_reset");

?>