<!DOCTYPE html>
<html>
<head>
	<title>Web Programming Update</title>
</head>
<body>
	<?php
	// calling db connection file
	include_once("../db_connect.php");

	// data from url
	$id = $_GET["id"];

	// query data book
	$anakData = mysqli_query($conn, "SELECT id, ibu_id, nama FROM anak WHERE id = ".$id);

	// data book
	$anak = $anakData->fetch_assoc();

	// category data
	$ibuData = mysqli_query($conn, "SELECT id, nama FROM ibu ORDER BY nama");
	?>
	
	<form action="crud_update_submit.php?id=<?php echo $id ?>" method="POST">
	<table>
		<tr>
			<td>Ibu</td>
				<?php while($ibu = $ibuData->fetch_assoc()): ?>
					<input type="radio" name="ibu_id" value="<?php echo $ibu['id']; ?>" 
						<?php if($anak['ibu_id'] == $ibu['id']) echo 'checked'; ?> required>
					<?php echo $ibu['nama']; ?><br>
				<?php endwhile; ?>

			</td>
		</tr>
		<tr>
			<td>Title</td>
			<td><input type="text" name="nama" value="<?php echo $anak["nama"]?>" required></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type="submit">Save</button>
				<a href="crud_delete.php?id=<?php echo $id?>" onclick="return confirm('Are you sure guys?')" >Delete</a>
			</td>
		</tr>
	</table>
	</form>
</body>
</html>