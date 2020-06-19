<?php 

include "app/post.php";

$post = new post();
$rows = $post->tampil();

?>
<center>
	<h2>DATA POST</h2>
<a href="indexx.php?page=post_input">Tambah Data</a>
	<table>
		<br>
		<tr>
			<th>ID</th>
			<th>DATE</th>
			<th>SLUG</th>
			<th>TITLE</th>
			<th>TEXT</th>
			<th>ID CATEGORY</th>
			<th>EDIT</th>
			<th>HAPUS</th>
			
		</tr>

		<?php foreach ($rows as $row) {?>

			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['date_post']; ?></td>
				<td><?php echo $row['slug']; ?></td>
				<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['text_post']; ?></td>
				<td><?php echo $row['cat_id']; ?></td>
				<td width="90px" align="center">
					<a href="indexx.php?page=post_edit&id=<?php echo $row['id']; ?>">Edit</a>
					</td>
					<td>	
					<a href="indexx.php?page=proses_post&delete-id=<?php echo $row['id']; ?>">Delete</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</center>

	