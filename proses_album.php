<?php
include_once "app/controller.php";
include_once "app/album.php";

$album = new album();

if ($_POST['tsimpan']) {
	$album->input();
	header("location:indexx.php?page=album_tampil");
}

if ($_POST['tedit']) {
	$album->update();
	header("location:indexx.php?page=album_tampil");
}

if ($_GET['delete-id']) {
	$album->delete($_GET['delete-id']);
	header('location:indexx.php?page=album_tampil');
}

?>