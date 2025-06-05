<?php 
$servername = "localhost";

$username = "root";

$password = "";

$dbanme = "pwtm";

$conn = mysqli_connect($servername, $username, $password, $dbanme);

if(mysqli_connect_errno()){
    die("Koneksi Gagal");
}
?>