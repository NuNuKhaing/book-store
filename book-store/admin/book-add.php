<?php
	include("confs/config.php");
	$title = $_POST['title'];
	$author = $_POST['author'];
	$summary = $_POST['summary'];
	$price = $_POST['price'];
	$category = $_POST['category_id'];
	$cover = $_FILES['cover']['name'];
	$tmp = $_FILES['cover']['tmp_name'];
	$type = $_FILES['cover']['type'];

	if ($cover) {
		move_uploaded_file($tmp, "covers/$cover");
		echo "cover is insert in folder.";
	}
	$sql = "INSERT INTO books(title, author, summary, price, category_id, cover, created_date, modified_date) VALUES('$title', '$author', '$summary', '$price', '$category', '$cover', now(),now())";
	mysqli_query($conn,$sql);
	header("location: book-list.php");
?>