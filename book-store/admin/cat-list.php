<?php
	include("confs/auth.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Category List</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<ul class="menu">
		<li><a href="book-list.php">Manage Books</a></li>
		<li><a href="cat-list.php">Manage Categories</a></li>
		<li><a href="orders.php">Manage Order</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	<h2>Category List</h2>
	<?php
		include("confs/config.php");
		$result = mysqli_query($conn,"SELECT * FROM Categories");
	?>
	<ul>
		<?php while ($row = mysqli_fetch_assoc($result)): ?>
			<li title="<?php echo $row['remark'];?>">
				[<a href="cat-del.php?id=<?php echo $row['id'] ?>" class="del">del</a>]
				[<a href="cat-edit.php?id=<?php echo $row['id'] ?>" class="edit">edit</a>]
				<?php echo $row['name']; ?>
			</li>
		<?php endwhile; ?>
	</ul>
	<a href="cat-new.php">Category New </a>
</body>
</html>