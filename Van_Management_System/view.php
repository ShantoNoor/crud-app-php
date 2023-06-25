<?php include 'config.php' ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title>Vans | Van Management System</title>
</head>
<body>
	<?php
		$query = "SELECT * FROM van_info";
		$data = mysqli_query($conn, $query);

		if(mysqli_num_rows($data)) {
			?>
				<h1>All Vans</h1>
				<table border="1px" cellpadding="10px" cellspacing="0">
					<tr>
						<th>ID</th>
						<th>License Number</th>
						<th>Current Location</th>
						<th>Current Load</th>
						<th>Max Capacity</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
			<?php
			while ($row = mysqli_fetch_array($data)) {
				?>
					<tr>
						<td><?php echo $row['id']?></td>
						<td><?php echo $row['license_number']?></td>
						<td><?php echo $row['current_location']?></td>
						<td><?php echo $row['current_load']?></td>
						<td><?php echo $row['max_capacity']?></td>
						<td><?php echo $row['status']?></td>
						<td>
							<a href="update.php?id=<?php echo $row['id']?>"><button>EDIT</button></a>
							<a href="delete.php?id=<?php echo $row['id']?>"><button onclick="return confirm('Are you sure, you want delete?')">DELETE</button></a>
						</td>
					</tr>
				<?php
			}
			?></table><?php
		} else {
			?>
				<h1>No Van found ...</h1>
			<?php
		}
	?>
	<br>
	<a href="add.php"><button>Add Van</button></a>
	<a href="logout.php"><button>Log Out</button></a>
</body>
</html>