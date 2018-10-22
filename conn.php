<?php
mysql_connect('myrdsdb.c0uoizh0juf5.ap-southeast-2.rds.amazonaws.com', 'test','Test1234')or
		die("Could not connect: " . mysql_error());
		mysql_select_db("db");
		
?>
