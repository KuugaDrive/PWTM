<!DOCTYPE html>
<html>
<head>
	<title>Web Programming Insert</title>
</head>
<body>
<?php
include_once('../db_connect.php');
$ibuData = mysqli_query($conn, "SELECT id, nama FROM ibu ORDER BY nama");
?>

<form action="crud_insert_submit.php" method="POST">
<table>
    <tr>
        <td>Ibu</td>
        <td>
			<?php while($ibu = $ibuData->fetch_assoc()):?>
				<input type="radio" name="ibu_id" value="<?php echo $ibu['id']; ?>" required>
				<?php echo $ibu['nama']; ?>
			<?php endwhile; ?>
        </td>
    </tr>
    <tr>
        <td>Nama Anak</td>
        <td><input type="text" name="nama" value="" required></td>
    </tr>
    <tr>
        <td></td>
        <td><button type="submit">Save</button></td>
    </tr>
</table>
</form>

</body>
</html>