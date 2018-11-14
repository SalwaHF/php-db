<?php 

	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBNAME', 'php_db');

	$host = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

?>