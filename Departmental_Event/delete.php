<?php 
	include 'config.php';

	$id = $_GET['id'];
	$delete = "DELETE FROM departmental_event_tb WHERE id='$id'";
	$data = mysqli_query($conn, $delete);
	if($data) {
		?>
			<script>
				alert('Event deleted successfully.');
				window.open('index.php', '_self');
			</script>
		<?php
	} else {
		?>
			<script>alert('Failed to delete Event. Try again ...')</script>
		<?php
	}
?>
