<?php


include_once "app/category.php";

$category = new category();

$rowcategory = $category->tampil();
?>

<form method="POST" action="proses_post.php">
<center>
	<h2>MASUKKAN DATA POST</h2>
	
	<table>
		<tr>
			<td>Date</td>
			<td><input type="date" name="date_post"></td>
		</tr>
		<tr>
			<td>Slug</td>
			<td><input type="text" name="slug"></td>
		</tr>
		<tr>
			<td>Title</td>
			<td><input type="text" name="title"></td>
		</tr>
		<tr>
			<td>Text</td>
			<td><input type="text" name="text_post"></td>
		</tr>
		<tr>
			<select name="id">
				<?php foreach($rowcategory as $row) { ?>
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

<a href="indexx.php?name=<?php echo $_GET['name'];?>&halaman=post.php"><button>KEMBALI</button></a>
</center>