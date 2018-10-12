<?php
	date_default_timezone_set('Asia/Jakarta');
	
	$servername	= "localhost";
	$username	= "root";
	$password	= "";
	$dbname		= "pertamina";
	
	$conn	= mysqli_connect($servername, $username, $password, $dbname);
	
// Check connection	
	if(!$conn) {
	die("Connection Failed: " . mysqli_connect_error());
	}
?>