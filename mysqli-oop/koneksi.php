<?php 

	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBNAME', 'php_db');

	$host = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

?>