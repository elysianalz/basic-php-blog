<?php 
	
	$serverName = "localhost";
	$serverUser = "root";
	$serverPassword ="";
	$myDB = "myDB";

	$conn = new mysqli($serverName, $serverUser, $serverPassword, $myDB);

	if ($conn->connect_error) {
		die("connection failed" . $conn->connect_error);
	}