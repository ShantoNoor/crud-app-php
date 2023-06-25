<?php
	if(isset($_POST['uid']) && isset($_POST['password'])) {
		$id = "8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918";
		$pass = "4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2";

		$id_sha256 = hash('sha256', $_POST['uid']);
		$pass_sha256 = hash('sha256', $_POST['password']);

		if($id === $id_sha256 && $pass === $pass_sha256) {
			session_start();
			$_SESSION['uid'] = $_POST['uid'];
			header("Location: view.php");
		} else {
			header("Location: index.php");
		}
	} else {
		header("Location: index.php");
	}
?>