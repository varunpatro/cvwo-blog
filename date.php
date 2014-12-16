<?php
$header = "content-type: application/json";
header($header);

$date = date ("M d, Y");
$return = array("friendly_date" => $date);

print json_encode($return);

?>