<?php

include_once("db_connect.php");

$lagu =$_POST["lagu"];

$album = $_POST["album"];

$artist = $_POST['artist'];

$sql = "INSERT INTO song(lagu, album, artist) VALUES ('".$lagu."', '".$album."', '".$artist."')";
$result = mysqli_query($conn, $sql);

header("location: index.php");
?>