<?php 

include "app/category.php";

$category = new Category();
$rows = $category->tampil();

?>
<center>
	<h2>DATA CATEGORY</h2>
<a href="indexx.php?page=category_input">Tambah Data</a>
<table>
		<br>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Text</th>
			<th>Edit</th>
			<th>Delete</th>
			
		</tr>

		<?php foreach ($rows as $row) {?>

			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['text_category']; ?></td>
				<td >
					<a href="indexx.php?page=category_edit&id=<?php echo $row['id']; ?>">Edit</a>
					</td>
					<td>	
					<a href="indexx.php?page=proses_category&delete-id=<?php echo $row['id']; ?>">Delete</a>
				</td>
				
			</tr>
		<?php } ?>
	</table>
		</center>
