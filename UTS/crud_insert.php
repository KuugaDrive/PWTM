<!DOCTYPE html>
<html>
<head>
	<title>Insert UTS</title>
</head>
<body>
	<form action="crud_insert_submit.php" method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim" value=""></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value=""></td>
		</tr>
        <tr>
            <input type="radio" id="fti" name="fakultas" value="FTI">
            <label for="FTI">FTI</label><br>
            <input type="radio" id="feb" name="fakultas" value="FEB">
            <label for="FEB">FEB</label><br>
            <input type="radio" id="fkdk" name="fakultas" value="FKDK">
            <label for="FKDK">FKDK</label>
        </tr>
		<tr>
			<td></td>
			<td><button type="submit">Save</button></td>
		</tr>
	</table>
	</form>
</body>
</html>