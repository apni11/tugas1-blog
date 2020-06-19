<!DOCTYPE html>
<html>

<head>
	<title>uts</title>
	<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">
</head>

<body>
<div>
		<div class="header">
			<img src="layout/assets/images/a.jpg">
		</div>
		<center>
			<div class="menu">
				<a href="indexx.php">Home</a>
				<a href="indexx.php?page=category_tampil">Category</a>
				<a href="indexx.php?page=post_tampil">Post</a>
				<a href="indexx.php?page=photos_tampil">Photos</a>
				<a href="indexx.php?page=album_tampil">Album</a>
				<a href="logout.php" class="logout">Logout</a>
		</center>

		<div class="main">

			<?php

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "main.php";
			}
			?>
		</div>

		<br>
		<br>
	

		<div class="footer">
			<center>Copyright &copy; Programmed by Apni Rahmadani Tanjung</center>
		</div>

		
	</div>
</body>

