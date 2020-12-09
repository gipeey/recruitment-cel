<?php

	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'recruitment-cel';


	$conn = new mysqli('localhost', 'root', '', 'recruitment-cel');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>