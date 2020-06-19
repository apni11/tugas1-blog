
<?php 

include "app/photos.php";

$photos = new photos();
$rows = $photos->tampil();

?>
<center>
	<h2>DATA PHOTOS</h2>
<a href="indexx.php?page=photos_input">Tambah Data</a>
<table>
		<br>
		<tr>
			<th>ID</th>
			<th>DATE</th>
			<th>TITLE</th>
			<th>TEXT</th>
			<th>ID POST</th>
			<th>EDIT</th>
			<th>HAPUS</th>
		</tr>

		<?php foreach ($rows as $row) {?>

			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['date_photos']; ?></td>
				<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['text_photos']; ?></td>
				<td><?php echo $row['post_id']; ?></td>
				<td >
					<a href="indexx.php?page=photos_edit&id=<?php echo $row['id']; ?>">Edit</a>
					</td>
					<td>	
					<a href="indexx.php?page=proses_photos&delete-id=<?php echo $row['id']; ?>">Delete</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</center>
