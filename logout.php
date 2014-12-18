<?php
session_start();
echo $_SESSION["logged_in"] . ", you have successfully logged out!";

session_unset("logged_in");


?>