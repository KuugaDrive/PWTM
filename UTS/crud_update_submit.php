<?php
// calling db connection file
include_once("db_connect.php");

// data from url
$id = $_GET["id"];

// data from crud_insert form
$nim = $_POST["nim"];

$nama = $_POST["nama"];

$fakultas = $_POST["fakultas"];

// update data
$sql = "UPDATE mahasiswa SET nim = '".$nim."', nama = '".$nama."', fakultas = '".$fakultas."'  WHERE id = ".$id;
$result = mysqli_query($conn, $sql);

// redirect to table page
header("location: crud_select.php");
?>