<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz 3</title>
</head>
<body>
<?php $Mobil=["Audi", "BMW", "Mercedes", "Porsche", "VW"] ?>

<?php foreach($Mobil as $i){
    if($i == "Audi" || $i == "Mercedes" || $i == "VW"){
        echo $i." ";
    }
} ?>
    
</body>
</html>