<?php

	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'recruitment';


	$conn = new mysqli('localhost', 'root', '', 'recruitment');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>