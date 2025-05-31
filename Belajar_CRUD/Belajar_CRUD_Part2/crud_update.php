<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<?php 
include_once("db_connect.php");

$id = $_GET["id"];

$result = mysqli_query($conn, "SELECT lagu, album, artist FROM song WHERE id = ".$id);
$row = $result->fetch_assoc();
?>

    <form action="crud_update_submit.php?id=<?php echo $id ?>" method="POST">
    <table>
        <tr>
            <td>Lagu:</td>
            <td><input type="text" name="lagu" value="<?php echo $row["lagu"]; ?>" required></td>
        </tr>
        <tr>
            <td>Album:</td>
            <td><input type="text" name="album" value="<?php echo $row["album"];?>" required></td>
        </tr>
        <tr>
            <td>Artist</td>
            <td><input type="text" name="artist" value="<?php echo $row["artist"]; ?>" required></td>
        </tr>
        <tr>
            <td>
                <button type="submit">Save</button>
            </td>
            <td>
                <button><a href="crud_delete.php?id=<?php echo $id ?>">Delete</a></button>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>