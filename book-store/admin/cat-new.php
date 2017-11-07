<?php
	include("confs/auth.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>New Category</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<ul class="menu">
		<li><a href="book-list.php">Manage Books</a></li>
		<li><a href="cat-list.php">Manage Categories</a></li>
		<li><a href="orders.php">Manage Order</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	<h1>New Category</h1>
	<form action="cat-add.php" method="post">
		<label for="name">Category Name</label>
		<input type="text" name="name" id="name">

		<label>Remark</label>
		<textarea name="remark" id="remark"></textarea>
		<input type="submit" value="Add Category">
	</form>
</body>
</html>