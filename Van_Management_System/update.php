<?php 
	include 'config.php';
	$error = array('error'=>'', 'license_number'=>'', 'max_capacity'=>'');

	$id = $_GET['id'];
	$select = "SELECT * FROM van_info WHERE id='$id'";
	$data = mysqli_query($conn, $select);
	$row = mysqli_fetch_array($data);

	if(isset($_POST['update_btn'])) {
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

		$update = "UPDATE van_info SET license_number = '$license_number', current_location = '$current_location', current_load = '$current_load', max_capacity = '$max_capacity', status='$status' WHERE id = '$id' ";

		if($error['error'] != 'true') {
			$data = mysqli_query($conn, $update);
			if($data) {
				?>
					<script>
						alert('Van updated successfully.');
						window.open('view.php', '_self');
					</script>
				<?php
			} else {
				?>
					<script>alert('Failed to update van. Try again ...')</script>
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
	<h1>Update Van</h1>
	<form action="" method="POST">
		<label for="license_number">License Number</label><br>
		<input type="text" name="license_number" value="<?php echo $row['license_number'] ?>">
		<span><?php echo $error['license_number'] ?></span>

		<br>
		<label for="current_location">Current Location</label><br>
		<input type="text" name="current_location" value="<?php echo $row['current_location'] ?>">

		<br><br>
		<label for="current_load">Current Load</label><br>
		<input type="number" name="current_load" value="<?php echo $row['current_load'] ?>">

		<br><br>
		<label for="max_capacity">Maximum Capacity</label><br>
		<input type="number" name="max_capacity" value="<?php echo $row['max_capacity'] ?>">
		<span><?php echo $error['max_capacity'] ?></span>

		<br><br>
		<input type="text" name="status" value="<?php echo $row['status'] ?>">

		<br><br>
		<input type="submit" name="update_btn" value="Update">
	</form>
	<br>
	<button><a href="view.php">View Vans</a></button>
	<button><a href="logout.php">Log Out</a></button>
</body>
</html>