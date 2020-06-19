<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">
<?php 

include "app/album.php";

$album = new album();
$rows = $album->tampil();

?>
<center>
	<h2>DATA ALBUM</h2>
<a href="indexx.php?page=album_input">Tambah Data</a>
<table>
			<br>
			<tr>
				<th>ID</th>
				<th>NAMA</th>
				<th>TEXT</th>
				<th>ID PHOTO</th>
				<th>EDIT</th>
			<th>HAPUS</th>
			</tr>

			<?php foreach ($rows as $row) {?>

				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['text_album']; ?></td>
					<td><?php echo $row['photo_id']; ?></td>
					<td width="90px" align="center">
					<a href="indexx.php?page=album_edit&id=<?php echo $row['id']; ?>">Edit</a>
					</td>
					<td>	
					<a href="indexx.php?page=proses_album&delete-id=<?php echo $row['id']; ?>">Delete</a>
				</td>
				</tr>
		<?php } ?>
		</table>