<?php
	include("confs/auth.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Book List</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<ul class="menu">
		<li><a href="book-list.php">Manage Books</a></li>
		<li><a href="cat-list.php">Manage Categories</a></li>
		<li><a href="orders.php">Manage Order</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	<h2> Book List</h2>
	<?php
		include("confs/config.php");
		$result = mysqli_query($conn,"SELECT books.*,Categories.name FROM books LEFT JOIN Categories ON books.category_id=categories.id ORDER BY books.category_id DESC");
	?>
	<ul class="books">
		<?php 
		while ($row = mysqli_fetch_assoc($result)):
		?>
		<li>
			<img src="covers/<?php echo $row['cover'] ?>" alt="" align="right" height="140">
			<b><?php echo $row['title'] ?></b>
			<i>By<?php echo $row['author'] ?></i>
			<small><?php echo $row['name'] ?></small>
			<span><?php echo $row['price'] ?></span>
			<div><?php echo $row['summary'] ?></div>


			[<a href="book-del.php?id=<?php echo $row['id'] ?>" class="del">del</a>]
			[<a href="book-edit.php?id=<?php echo $row['id'] ?>" class="del">Edit</a>]
		</li>
	<?php endwhile; ?>
	</ul>
	<a href="book-new.php" class="new">New Book</a>
</body>
</html>