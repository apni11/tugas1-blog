<?php


include_once "app/post.php";

$post = new post();

$rowpost = $post->tampil();
?>
<center>
<form method="POST" action="proses_photos.php">
	<h2>MASUKKAN DATA PHOTOS</h2>


	
	<table>
		
		<tr>
			<td>Date</td>
			<td><input type="date" name="date_photos"></td>
		</tr>
		<tr>
			<td>Title</td>
			<td><input type="text" name="title"></td>
		</tr>
		<tr>
			<td>Text</td>
			<td><input type="text" name="text_photos"></td>
		</tr>
		<tr>
			<select name="id">
				<?php foreach($rowpost as $row) { ?>
					<option value="<?php echo $row['id'] ?>"><?php echo $row['id'] ?></option>
				<?php } ?>
			</select>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="tsimpan" value="Simpan"></td>
		</tr>
	</table>

</form>

<a href="indexx.php?name=<?php echo $_GET['name'];?>&halaman=photos.php"><button>KEMBALI</button></a>
</center>