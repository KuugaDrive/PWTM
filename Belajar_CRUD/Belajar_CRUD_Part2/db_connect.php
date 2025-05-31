<?php

use Dom\Mysql;

$username = "root";
$password = "";
$servername = "localhost";
$dbname = "belajar_crud";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(mysqli_connect_errno()){
    die("Koneksi Gagal!");
}else{
    echo "";
}

?>