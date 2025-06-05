<?php
// calling db connection file
include_once("db_connect.php");

// data from crud_insert form
$nim = $_POST["nim"];

$nama = $_POST["nama"];

$fakultas = $_POST["fakultas"];

// insert data
$sql = "INSERT INTO mahasiswa (nim, nama, fakultas) VALUES ('".$nim."', '".$nama."', '".$fakultas."')";
$result = mysqli_query($conn, $sql);

// redirect to table page
header("location: crud_select.php");
?>