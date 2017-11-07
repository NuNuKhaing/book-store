<?php
	include("confs/config.php");
	$id = $_POST['id'];
	$name = $_POST['name'];
	$remark = $_POST['remark'];

	$result = "UPDATE Categories SET name = '$name', remark = '$remark' WHERE id = $id";
	$sql = mysqli_query($conn,$result);
	
	header("location: cat-list.php");
?>