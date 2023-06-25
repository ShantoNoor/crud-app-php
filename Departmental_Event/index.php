<?php
	include 'config.php';
	$query = "SELECT * FROM departmental_event_tb";
	$data = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>View Events</title>
</head>
<body>
	<h1>
		<?php
			if(mysqli_num_rows($data)) {
				echo 'Events in Database ...';
			} else {
				echo 'No Event found in Database ...';
			}
		?>
	</h1>

	<?php
		if(mysqli_num_rows($data)) {
			?>
				<table border="1px" cellpadding="10px" cellspacing="0">
					<tr>
						<th>Event ID</th>
						<th>Event Name</th>
						<th>Event Place</th>
						<th>Date</th>
						<th>Time</th>
						<th>Current Participent</th>
						<th>Max Participent</th>
						<th>Action</th>
					</tr>
			<?php

			while ($row = mysqli_fetch_array($data)) {
				?>
					<tr>
						<td><?php echo $row['id']?></td>
						<td><?php echo $row['name']?></td>
						<td><?php echo $row['place']?></td>
						<td><?php echo $row['date']?></td>
						<td><?php echo $row['time']?></td>
						<td><?php echo $row['current_participent']?></td>
						<td><?php echo $row['max_participent']?></td>
						<td>
							<a href="update.php?id=<?php echo $row['id']?>"><button>EDIT</button></a>
							<a href="delete.php?id=<?php echo $row['id']?>"><button onclick="return confirm('Are you sure, you want delete?')">DELETE</button></a>
						</td>
					</tr>
				<?php
			}

			?></table><?php
		}
	?>

	<br>
	<a href="add.php"><button>Add Event</button></a>
</body>
</html>