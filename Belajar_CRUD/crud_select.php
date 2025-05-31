<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Select</title>

    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../../img/728014.jpg">

    <style>
        body {
    color: rgb(255, 255, 255);
    font-weight: bold;
    display: flex;
    margin: 0;
    justify-content: center;
    align-items: center;
    height: 100vh;
    font-size: 20px;
    background-image: url('../../img/illustration-anime-city.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}

table {
    border-spacing: 0;
    border: 3px solid #fff;
    border-radius: 10px;
    overflow: hidden;
    text-align: center;
    background-color: rgba(0, 0, 0, 0.7);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
    width: 80%;  /* Adjust the table's width as needed */
}

td, th {
    border: 1px solid #ddd;
    padding: 12px 20px;
    text-align: center;
    font-size: 18px;
    transition: background-color 0.3s ease-in-out, transform 0.2s ease;
}

th {
    background-color: rgba(255, 255, 255, 0.2);
    color: #fff;
    font-size: 22px;
    font-weight: bold;
}

td {
    background-color: rgba(255, 255, 255, 0.1);
}

td:hover {
    background-color: rgba(255, 255, 255, 0.3);
    transform: scale(1.05);
}

tr:nth-child(even) td {
    background-color: rgba(255, 255, 255, 0.05);
}

tr:nth-child(odd) td {
    background-color: rgba(0, 0, 0, 0.3);
}

tr:hover td {
    background-color: rgba(255, 255, 255, 0.2);
}
    </style>
</head>
<body>
    <?php 
    include('db_connect.php');

    $result = mysqli_query($conn, "SELECT id, Judul, Genre, Rate FROM anime");
    ?>

    <table border="1">
        <thead>
            <tr>
                <th style="color: red">Judul</th>
                <th style="color: red;">Genre</th>
                <th style="color: red;">Rate</th>
                <th style="color: red;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>

            <tr>
                <td><?php echo $row["Judul"];?></td>
                <td><?php echo $row["Genre"];?></td>
                <td><?php echo $row["Rate"];?></td>
                <td><a style="color: greenyellow;" href="crud_update.php?id=<?php echo $row["id"];?>">Update</a></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <button><a style="color: black; background-color: white;" href="crud_insert.php">Insert!</a></button>
</body>
</html>