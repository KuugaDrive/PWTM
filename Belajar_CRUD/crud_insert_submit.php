<?php 
include_once("db_connect.php");

$Judul = $_POST["Judul"];

$Genre = $_POST["Genre"];

$Rate = $_POST["Rate"];

$sql = "INSERT INTO anime(Judul, Genre, Rate) VALUES ('".$Judul."', '".$Genre."', '".$Rate."')";
$result = mysqli_query($conn, $sql);

header("location: crud_select.php")
?>