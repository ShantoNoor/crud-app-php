<?php 
	include 'config.php';
	$error = array('error'=>'', 'license_number'=>'', 'max_capacity'=>'');

	if(isset($_POST['submit_btn'])) {
		$license_number = $_POST['license_number'];
		$current_location = $_POST['current_location'];
		$current_load = $_POST['current_load'];
		$max_capacity = $_POST['max_capacity'];
		$status = $_POST['status'];

		// validate operations
		$exp = "/(.*?)-(.*?)-(.*?)-(\d){6}/i";
		if(!preg_match($exp, $license_number)) {
			$error['license_number'] = 'Please enter a valid License Number';
			$error['error'] = 'true';
		}

		if($current_load > $max_capacity) {
			$error['max_capacity'] = 'Maximum Capacity can not be smaller than Current Load';
			$error['error'] = 'true';
		}

		$query = "INSERT INTO van_info (license_number, current_location, current_load, max_capacity, status) VALUES('$license_number', '$current_location', '$current_load', '$max_capacity', '$status')";

		if($error['error'] != 'true') {
			$data = mysqli_query($conn, $query);
			if($data) {
				?>
					<script>
						alert('Van added successfully.');
						window.open('view.php', '_self');
					</script>

				<?php
			} else {
				?>
					<script>alert('Failed to add van. Try again ...')</script>
				<?php
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">

	<title>Update Van | Van Management System</title>
</head>
<body>
	<h1>Add Van</h1>
	<form action="" method="POST">
     	<label for="license_number">License Number</label><br>
		<input type="text" name="license_number" required>
		<span><?php echo $error['license_number'] ?></span>

		<br>
     	<label for="current_location">Current Location</label><br>
		<input type="text" name="current_location" required>

		<br><br>
     	<label for="current_load">Current Load</label><br>
		<input type="number" name="current_load" required>

		<br><br>
     	<label for="max_capacity">Maximum Capacity</label><br>
		<input type="number" name="max_capacity" required>
		<span><?php echo $error['max_capacity'] ?></span>

		<br>
     	<label for="status">Status</label><br>
		<input type="text" name="status" required>

		<br><br>
		<input type="submit" name="submit_btn" Value="Add">
	</form>

	<br>
	<a href="view.php"><button>View Vans</button></a>
	<a href="logout.php"><button>Log Out</button></a>
</body>
</html>