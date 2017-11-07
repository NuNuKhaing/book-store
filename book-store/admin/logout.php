<?php
	session_start()		;
	unset($_SESSION['auth']);
	header("location: index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Logout</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<ul class="menu">
		<li><a href="book-list.php">Manage Books</a></li>
		<li><a href="cat-list.php">Manage Categories</a></li>
		<li><a href="orders.php">Manage Order</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	
</body>
</html>