<?php
// calling db connection file
include_once("../db_connect.php");

// data from crud_insert form
$nama = $_POST["nama"];
$ibu_id = $_POST["ibu_id"];

// insert data
$sql = "INSERT INTO anak (ibu_id, nama) VALUES ('".$ibu_id."', '".$nama."')";
$result = mysqli_query($conn, $sql);

// redirect to table page
header("location: crud_select.php");
?>