<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <form action="crud_insert_submit.php" method="POST">
        <table>
            <tr>
                <td>Lagu:</td>
                <td><input type="text" name="lagu" value=""></td>
            </tr>
            <tr>
                <td>Album:</td>
                <td><input type="text" name="album" value=""></td>
            </tr>
            <tr>
                <td>Artist:</td>
                <td><input type="text" name="artist" value=""></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">Simpan</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
