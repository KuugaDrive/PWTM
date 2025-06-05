<!DOCTYPE html>
<html>
<head>
	<title>Update UTS</title>
</head>
<body>
	<?php
	// calling db connection file
	include_once("db_connect.php");

	// data from url
	$id = $_GET["id"];

	// query data
	$result = mysqli_query($conn, "SELECT id, nim, nama, fakultas FROM mahasiswa WHERE id = ".$id);

	// return data
	$row = $result->fetch_assoc();
	?>
	
	<form action="crud_update_submit.php?id=<?php echo $id ?>" method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim" value="<?php echo $row["nim"]?>"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="<?php echo $row["nama"];?>"></td>
		</tr>
        <tr>
            <input type="radio" id="fti" name="fakultas" value="<?php echo $row["fakultas"];  ?>" >
            <label for="FTI">FTI</label><br>
            <input type="radio" id="feb" name="fakultas" value="<?php echo $row["fakultas"]; ?>">
            <label for="FEB">FEB</label><br>
            <input type="radio" id="fkdk" name="fakultas" value="<?php echo $row["fakultas"]; ?>">
            <label for="FKDK">FKDK</label>
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