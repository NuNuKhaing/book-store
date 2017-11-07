<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Book Edit</title>
</head>
<body>
	<?php
		include("confs/config.php");
		$id = $_GET['id'];
		$result = mysqli_query($conn,"SELECT * FROM books WHERE id = $id");	
		$row = mysqli_fetch_assoc($result);
	?>
	<h2>Book Edit</h2>

	<form action="book-add.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $row['id'] ?>">

		<label for="title">Book Title</label>
		<input type="text" name="title" id="title" value="<?php echo $row['title'] ?>">

		<label for="author">Author</label>
		<input type="text" name="author" id="author" value="<?php echo $row['author'] ?>">

		<label for="summary">Summary</label>
		<textarea name="summary" id="summary"><?php echo $row['summary'] ?></textarea>

		<label for="price">Price</label>
		<input type="text" name="price" id="price" value="<?php echo $row['price'] ?>">

		<label for="category">Category</label>
		<select name="category_id" id="categories">
			<option value="0">---Choose---</option>
			<?php
				$sql = mysqli_query($conn,"SELECT id,name FROM Categories");
				while($res = mysqli_fetch_assoc($sql)):
			?>
			<option value="<?php echo $res['id'] ?>" <?php if($res['id'] == $row['category_id']) echo "selected"; ?> >
				<?php echo $res['name'] ?>
			</option>
			<?php endwhile; ?>
		</select>

		<br><br>
		<img src="covers/<?php echo $row['cover'] ?>" alt="" height="150">
		<label for="cover">Cover</label>
		<input type="file" name="cover" id="cover">

		<br><br>
		<input type="submit" value="Update Book">
		<a href="book-list.php">Back</a>
	</form>
</body>
</html>