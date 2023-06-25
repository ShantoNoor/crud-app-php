<?php
	include 'config.php';
	$error = array('error'=>'', 'max_participent'=>'');

	if(isset($_POST['submit_btn'])) {
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

		$query = "INSERT INTO departmental_event_tb (name, place, date, time, current_participent, max_participent) VALUES('$name', '$place', '$date', '$time', '$current_participent', '$max_participent')";

		if($error['error'] != 'true') {
			$data = mysqli_query($conn, $query);
			if($data) {
				?>
					<script>
						alert('Event added successfully.');
						window.open('index.php', '_self');
					</script>

				<?php
			} else {
				?>
					<script>alert('Failed to add Event. Try again ...')</script>
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

	<title>Add Event</title>
</head>
<body>
	<h1>Add Event</h1>
	<form action="" method="POST">
     	<label for="name">Event Name</label><br>
		<input type="text" name="name" required maxlength="50">

		<br><br>
     	<label for="place">Event Place</label><br>
		<input type="text" name="place" required maxlength="50">

		<br><br>
     	<label for="date">Event Date</label><br>
		<input type="date" name="date" required>

		<br><br>
     	<label for="time">Event Time</label><br>
		<input type="time" name="time" required value="<?php echo $row['time'] ?>">

		<br><br>
     	<label for="current_participent">Current Participent</label><br>
		<input type="number" name="current_participent" required maxlength="50">
		<span><?php echo $error['max_participent'] ?></span>

		<br>
     	<label for="max_participent">Max Participent</label><br>
		<input type="number" name="max_participent" required maxlength="50">

		<br><br>
		<input type="submit" name="submit_btn" Value="Add Event">
	</form>

	<br>
	<a href="index.php"><button>View Events</button></a>
</body>
</html>