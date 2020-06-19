<?php


include_once "app/photos.php";

$photos = new photos();

$rowphotos = $photos->tampil();
?>
<center>
<h2>MASUKKAN DATA ALBUM</h2>

<form method="POST" action="proses_album.php">
	
	<table>
		
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Text</td>
			<td><input type="text" name="text_album"></td>
		</tr>
		<tr>
			<select name="id">
				<?php foreach($rowphotos as $row) { ?>
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

<a href="indexx.php?name=<?php echo $_GET['name'];?>&halaman=album.php"><button>KEMBALI</button></a>
</center>