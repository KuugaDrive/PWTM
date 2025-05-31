<?php
include_once("db_connect.php");

$id = $_GET["id"];

$Judul = $_POST["Judul"];

$Genre = $_POST["Genre"];

$Rate = $_POST["Rate"];

$sql = "UPDATE anime SET Judul = '".$Judul."', Genre = '".$Genre."', Rate = '".$Rate."' WHERE id = ".$id;
$result = mysqli_query($conn, $sql);

header("location: crud_select.php")
?>