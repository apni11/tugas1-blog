<?php
include_once "app/controller.php";
include_once "app/post.php";

$post = new post();

if ($_POST['tsimpan']) {
	$post->input();
	header("location:indexx.php?page=post_tampil");
}

if ($_POST['tedit']) {
	$post->update();
	header("location:indexx.php?page=post_tampil");
}

if ($_GET['delete-id']) {
	$post->delete($_GET['delete-id']);
	header('location:indexx.php?page=post_tampil');
}

?>