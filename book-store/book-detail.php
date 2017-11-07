<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Book Detail</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h2>Book Detail</h2>
	<?php
		include("admin/confs/config.php");
		$id = $_GET['id'];
		$book = mysqli_query($conn, "SELECT * FROM books WHERE id = $id ");
		$row = mysqli_fetch_assoc($book);
	?>
	<div class="detail">
		<a href="index.php" class="back">&laquo; Go Back </a>
		<img src="admin/covers/<?php echo $row['cover'] ?>">
		<h2><?php echo $row['title'] ?></h2>
		<b>By <?php echo $row['author'] ?></b>
		<i><?php echo $row['price'] ?></i>
		<p><?php echo $row['summary'] ?></p>
		<a href="add-to-cart.php?id=<?php echo $row['id'] ?>" class="add-to-cart">Add to Cart
		</a>
	</div>
</body>
</html>