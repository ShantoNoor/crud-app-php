<?php 
	include 'config.php';

	$id = $_GET['id'];
	$delete = "DELETE FROM van_info WHERE id='$id'";
	$data = mysqli_query($conn, $delete);
	if($data) {
		?>
			<script>
				alert('Van deleted successfully.');
				window.open('view.php', '_self');
			</script>
		<?php
	} else {
		?>
			<script>alert('Failed to delete van. Try again ...')</script>
		<?php
	}
?>
