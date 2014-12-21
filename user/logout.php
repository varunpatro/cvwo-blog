<?php

//use the current session
session_start();

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

header("Location: /config/message_passing.php?m=logout")

?>