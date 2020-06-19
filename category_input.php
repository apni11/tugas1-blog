
<form method="POST" action="proses_category.php">
<center>
	<h2>MASUKKAN DATA CATEGORY</h2>
	<table>
		
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Text</td>
			<td><input type="text" name="text_category"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="tsimpan" value="Simpan"></td>
		</tr>
	</table>

</form>

<a href="index.php?name=<?php echo $_GET['name'];?>&halaman=category.php"><button>KEMBALI</button></a>
</center>	


	