<?php

use FontLib\Table\Type\head;

include_once("db_connect.php");

$id = $_GET["id"];

$sql = "DELETE FROM anime WHERE id = ".$id;
$result = mysqli_query($conn, $sql);

header("location: crud_select.php");
?>