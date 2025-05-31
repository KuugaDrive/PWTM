<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz 4</title>
</head>
<body>

    <form method="POST">
        Masukkan umur anda: <input type="number" name="umur">
        <input type="submit" value="Kirim">
    </form>

    <?php 
    if (isset($_POST['umur'])) {
        $umur = $_POST['umur'];

        if ($umur >0 && $umur <5 ) {
            echo "Toddler"; 
        } elseif ($umur >= 5 && $umur <= 12) {
            echo "Kid";
        } elseif ($umur >= 13 && $umur <= 25) {
            echo "Youth";
        } elseif ($umur > 25) {
            echo "Adult";
        } else {
            echo "Umur tidak valid.";
        }
    }
    ?>

</body>
</html>
