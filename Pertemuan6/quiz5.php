<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz 5</title>
</head>
<body>


    <form method="POST">
        Masukkan sisi 1: <input type="number" name="side1"><br><br>
        Masukkan sisi 2: <input type="number" name="side2"><br><br>
        Masukkan sisi 3: <input type="number" name="side3"><br><br>
        <input type="submit" value="Cek">
    </form>

    <?php 
    
    if(isset($_POST['side1']) && isset($_POST['side2']) && isset($_POST['side3'])){
        $side1 = $_POST['side1'];
        $side2 = $_POST['side2'];
        $side3 = $_POST['side3'];

    if($side1 == $side2 && $side2 == $side3 && $side3 == $side1){
        echo "Segitiga Sama Sisi";
    }
    elseif($side1 == $side2 || $side2 == $side3 || $side3 == $side1){
        echo "Segitiga Sama Kaki";
    }else{
        echo "Segitiga Sembarang";
    }
}
    ?>
</body>
</html>