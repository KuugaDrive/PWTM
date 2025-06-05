<!DOCTYPE html>
<html>
	<head>
		<title>Select UAS</title>
	</head>
	<body>
		<?php 
		// calling db connection file
		include_once('db_connect.php');

		// query data
		$result = mysqli_query($conn, "SELECT id, nim, nama, fakultas FROM mahasiswa");
		?>
<!-- 
		<a href="crud_insert.php">Insert</a>
		<br /> -->

		<a href="crud_insert.php">Insert</a>

		<table border="1">
			<thead>
				<tr>
					<th>NIM</th>
					<th>Nama</th>
					<th>Fakultas</th>
                    <th>Action</th>
				</tr>
			</thead>
			<tbody>
			<!-- data output from query -->
			<?php while($row = $result->fetch_assoc()):?>
				<tr>
					<td><?php echo $row["nim"];?></td>
					<td><?php echo $row["nama"]; ?></td>
                    <td><?php echo $row["fakultas"]; ?></td>
					<td><a href="crud_update.php?id=<?php echo $row["id"];?>">Update</a></td>
				</tr>
        	<?php endwhile;?>
			</tbody>
		  </table>
		  
	</body>
</html>