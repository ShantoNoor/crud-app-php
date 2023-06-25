<?php 
	include 'config.php';
	$error = array('error'=>'', 'max_participent'=>'');

	$id = $_GET['id'];
	$select = "SELECT * FROM departmental_event_tb WHERE id='$id'";
	$data = mysqli_query($conn, $select);
	$row = mysqli_fetch_array($data);

	if(isset($_POST['update_btn'])) {
		$name = $_POST['name'];
		$place = $_POST['place'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$current_participent = $_POST['current_participent'];
		$max_participent = $_POST['max_participent'];

		if($current_participent > $max_participent) {
			$error['max_participent'] = 'Maximum Participents can not be smaller than Current Participents';
			$error['error'] = 'true';
		}

		$update = "UPDATE departmental_event_tb SET name = '$name', place = '$place', date = '$date', time = '$time', current_participent = '$current_participent', max_participent='$max_participent' WHERE id = '$id' ";

		if($error['error'] != 'true') {
			$data = mysqli_query($conn, $update);
			if($data) {
				?>
					<script>
						alert('Event updated successfully.');
						window.open('index.php', '_self');
					</script>
				<?php
			} else {
				?>
					<script>alert('Failed to update Event. Try again ...')</script>
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

	<title>Update Event</title>
</head>
<body>
	<h1>Update Van</h1>
	<form action="" method="POST">
		<label for="name">Event Name</label><br>
		<input type="text" name="name" required maxlength="50" value="<?php echo $row['name'] ?>">

		<br><br>
     	<label for="place">Event Place</label><br>
		<input type="text" name="place" required maxlength="50" value="<?php echo $row['place'] ?>">

		<br><br>
     	<label for="date">Event Date</label><br>
		<input type="date" name="date" required value="<?php echo $row['date'] ?>">

		<br><br>
     	<label for="time">Event Time</label><br>
		<input type="time" name="time" required value="<?php echo $row['time'] ?>">

		<br><br>
     	<label for="current_participent">Current Participent</label><br>
		<input type="number" name="current_participent" required maxlength="50" value="<?php echo $row['current_participent'] ?>">
		<span><?php echo $error['max_participent'] ?></span>

		<br>
     	<label for="max_participent">Max Participent</label><br>
		<input type="number" name="max_participent" required maxlength="50" value="<?php echo $row['max_participent'] ?>">

		<br><br>
		<input type="submit" name="update_btn" value="Update Event">
	</form>
	<br>
	<a href="index.php"><button>View Events</button></a>
</body>
</html>