<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Category Delete</title>
</head>
<body>
	<h2>Category Delete</h2>
	<?php
		include("confs/config.php");
		$id = $_GET['id'];
		$result = mysqli_query($conn,"DELETE FROM Categories WHERE id=$id");
		header("location: cat-list.php");
	?>
</body>
</html>