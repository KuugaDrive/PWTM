<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
</head>
<body>

<?php
include_once("db_connect.php");

$result = mysqli_query($conn, "SELECT id, lagu, album, artist FROM song");
?>
    <a href="crud_insert.php">Insert!</a>
    <table border="1">
        <thead>
            <th>Judul</th>
            <th>Album</th>
            <th>Artist</th>
            <th>Update</th>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row["lagu"]; ?></td>
                <td><?php echo $row["album"]; ?></td>
                <td><?php echo $row["artist"]; ?></td>
                <td><a href="crud_update.php?id=<?php echo $row["id"];?>">Update</a></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>