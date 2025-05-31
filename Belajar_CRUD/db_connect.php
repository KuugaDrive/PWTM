<?php 

$servername = "localhost";
$usrname = "root";
$password = "";
$dbname = "belajar_crud";

$conn = mysqli_connect($servername, $usrname, $password, $dbname);

if(mysqli_connect_errno()){
    die("Koneksi Gagal");
}else{
    echo "";
}

?>