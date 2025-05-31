<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>

    <style>
        body {
            display: flex;
            justify-content: center;
            height: 100vh;
            align-items: center;
        }
        table {
            width: 100%;
            max-width: 500px;
        }
        td {
            padding: 8px;
        }
        input {
            width: 100%;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>

    <?php 
    include_once("db_connect.php");
    
    $id = $_GET["id"];
    
    $result = mysqli_query($conn, "SELECT Judul, Genre, Rate FROM anime WHERE id = ".$id);
    $row = $result->fetch_assoc();
    ?>

    <form action="crud_update_submit.php?id=<?php echo $id ?>" method="POST">
        <table class="table">
            <tr>
                <td>Judul</td>
                <td><input type="text" name="Judul" value="<?php echo $row["Judul"] ?>" required></td>
            </tr>
            <tr>
                <td>Genre</td>
                <td><input type="text" name="Genre" value="<?php echo $row["Genre"] ?>" required></td>
            </tr>
            <tr>
                <td>Rate</td>
                <td><input type="number" name="Rate" value="<?php echo $row["Rate"] ?>" required></td>
            </tr>
            <tr>
                <td colspan="2" class="text-center">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="crud_deleted.php?id=<?php echo $id ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</a>
                </td>
            </tr>
        </table>
    </form>

</body>
</html>
