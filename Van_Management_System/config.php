<?php
	session_start();
	if(!$_SESSION['uid']) {
		header("Location: index.php");
	}
	
	$sname= "localhost";
	$unmae= "root";
	$password = "";

	$db_name = "van_db";

	$conn = mysqli_connect($sname, $unmae, $password, $db_name);

	if (!$conn) {
		echo "Connection failed!";
	}
?>