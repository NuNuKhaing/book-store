<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Category Edit</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<ul class="menu">
		<li><a href="book-list.php">Manage Books</a></li>
		<li><a href="cat-list.php">Manage Categories</a></li>
		<li><a href="orders.php">Manage Order</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	<h2> Category Edit</h2>
	<?php
		include("confs/config.php");
		$id = $_GET['id'];
		$result = mysqli_query($conn,"SELECT * FROM Categories WHERE id= $id");
		$row = mysqli_fetch_assoc($result);
	?>
	<form action="cat-update.php" method="post">
		<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

		<label for="name">Category Name</label>
		<input type="text" name="name" id="name" value="<?php echo $row['name'] ?>">

		<label>Remark</label>
		<textarea name="remark" id="remark"><?php echo $row['remark'] ?></textarea>
		<br><br>
		<input type="submit" value="Update Category">
	</form>
</body>
</html>