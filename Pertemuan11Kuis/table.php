<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City</title>
</head>

<?php 
include_once('../db_connect.php');

$sql = "SELECT kota.id, kota.city_name, kota.population, country.name AS country_name
        FROM kota
        JOIN country ON kota.negara_id = country.id
        ORDER BY country_name ASC";

$result = mysqli_query($conn, $sql);


?> 
<body>
    <table border="1">
        <thead>
            <th>Nama Negara</th>
            <th>Nama Kota</th>
            <th>Populasi</th>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>

                <tr>
                    <td><?php echo $row['country_name']; ?></td>
                    <td><?php echo $row['city_name']; ?></td>
                    <td><?php echo $row['population']; ?></td>
                </tr>

            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>