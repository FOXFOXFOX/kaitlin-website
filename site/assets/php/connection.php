<?php
	// Define database information:
	$mysql_hostname = 'localhost';
	$mysql_username = 'root';
	$mysql_password = '5oUzS0eiR8Ne';
	$mysql_database = 'ianpaschal';
	$connection = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);
	if (mysqli_connect_errno()) {
		die('Unable to connect to database!');
	}
?>