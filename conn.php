<?php
$dbhost = $_SERVER['RDS_HOSTNAME'];
$username = $_SERVER['RDS_USERNAME'];
$password = $_SERVER['RDS_PASSWORD'];
mysql_connect({$dbhost}, {$username},{$password})or
		die("Could not connect: " . mysql_error());
		mysql_select_db("db");
		
?>
