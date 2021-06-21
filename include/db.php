<?php
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_NAME', 'webProject');

	$mysql = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if ($mysql -> connect_errno) exit('Error Database');
	$mysql -> set_charset('utf8');
	$mysql -> close();
?>