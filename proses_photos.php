<?php
include_once "app/controller.php";
include_once "app/photos.php";

$photos = new photos();

if ($_POST['tsimpan']) {
	$photos->input();
	header("location:indexx.php?page=photos_tampil");
}

if ($_POST['tedit']) {
	$photos->update();
	header("location:indexx.php?page=photos_tampil");
}

if ($_GET['delete-id']) {
	$photos->delete($_GET['delete-id']);
	header('location:indexx.php?page=photos_tampil');
}

?>