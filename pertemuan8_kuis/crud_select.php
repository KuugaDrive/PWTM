<!DOCTYPE html>
<html>
	<head>
		<title>Web Programming</title>
	</head>
	<body>
		<?php 
		// calling db connection file
		include_once('../db_connect.php');

		// sql data book join category
		$sql = "SELECT anak.id, anak.ibu_id, anak.nama, ibu.nama AS nama_ibu
				FROM anak 
				JOIN ibu ON anak.ibu_id = ibu.id
				ORDER BY ibu.nama ASC, anak.ibu_id ASC";

		// query data
		$result = mysqli_query($conn, $sql);
		?>

		<a href="crud_insert.php">Insert</a>
		<br />

		<table border="1">
			<thead>
				<tr>
					<th>Nama Ibu</th>
					<th>Nama Anak</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<!-- data output from query -->
			<?php while($row = $result->fetch_assoc()):?>
				<tr>
					<td><?php echo $row["nama_ibu"];?></td>
					<td><?php echo $row["nama"];?></td>
					<td><a href="crud_update.php?id=<?php echo $row["id"];?>">Update</a></td>
				</tr>
        	<?php endwhile;?>
			</tbody>
		  </table>
		  
	</body>
</html>