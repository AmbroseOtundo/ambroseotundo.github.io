<?php
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'liboffence'; 

$conn = new mysqli($db_host,$db_user,$db_pass,$db_database);
	if($conn -> connect_error) {
		die('Failed to connect to server: ' . mysqli_error());
	}

?>