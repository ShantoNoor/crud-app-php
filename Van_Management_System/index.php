<?php
	session_start();
	if(isset($_SESSION['uid'])) {
		header("Location: view.php");
	} 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">

	<title>Van Management System</title>
</head>
<body>
	<h1>Welcome to Gopalgonj's Van Management System</h1>
	<br>
	<form action="login.php" method="post">
     	<label for="uid">User ID</label><br>
     	<input type="text" name="uid" required>
     	<br><br>
     	<label for="password">Password</label><br>
     	<input type="password" name="password" required>
     	<br><br>
     	<button type="submit">Log In</button>
     </form>
</body>
</html>