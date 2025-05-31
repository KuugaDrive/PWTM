<?php 
include_once("db_connect.php");

$id = $_GET["id"];

$lagu = $_POST["lagu"];

$album = $_POST["album"];

$artist = $_POST["artist"];

$sql = "UPDATE song SET lagu = '".$lagu."', album = '".$album."', artist = '".$artist."' WHERE id = ".$id;
$result = mysqli_query($conn, $sql);

header("location: index.php");

?>