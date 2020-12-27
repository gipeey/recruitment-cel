<?php

	$server	= 'localhost';
	$user	= 'root';
	$password = '';
	$db_name	= 'recruitment';


	$conn = mysqli_connect($server, $user, $password, $db_name);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>