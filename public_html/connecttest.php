<?php
$mysqli = new mysqli('localhost', 'mohammed', '1234', 'wp_zorgdossier');

if ($mysqli->connect_error) {
	echo 'Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
}
else {
	echo "Successfully connected to database";
}

?>
