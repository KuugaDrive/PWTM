<?php
// calling db connection file
include_once("../db_connect.php");

// data from url
$id = $_GET["id"];

// data from crud_insert form
$nama = $_POST["nama"];
$ibu_id = $_POST["ibu_id"];

// update data
$sql = "UPDATE anak SET nama = '".$nama."', ibu_id = '".$ibu_id."' WHERE id = ".$id;
$result = mysqli_query($conn, $sql);

// redirect to table page
header("location: crud_select.php");
?>