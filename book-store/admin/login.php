<?php
	session_start();
	$name = $_POST['name'];
	$pass = $_POST['pass'];

	if ($name == "admin" && $pass == "12345678910") {
		$_SESSION['auth'] = true;
		header("location: cat-list.php");
	}
	else {
		header("location: index.php");
	}
?>