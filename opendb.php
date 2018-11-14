<?php

	include 'config.php';
	$conn = mysql_connect($dbhost,$dbuser,$dbpass, $dbname);
	if(!$conn){
		die(mysqli_connect_error($conn));
	}

?>