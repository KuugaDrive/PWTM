<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 400px;
        }
    </style>
</head>
<body>
    <form action="crud_insert_submit.php" method="POST">
    <table>
        <tr>
            <td>Judul</td>
            <td><input type="text" name="Judul" value=""></td>
        </tr>
        <tr>
            <td>Genre</td>
            <td><input type="text" name="Genre" value=""></td>
        </tr>
        <tr>
            <td>Rate</td>
            <td><input type="text" name="Rate" value=""></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" class="btn btn-primary">Save</button></td>
        </tr>
    </table>
    </form>
</body>
</html>