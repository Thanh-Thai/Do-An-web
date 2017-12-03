<?php
include "../dbcon.php";
$idTin = $_GET["idTin"];

$sql = "DELETE FROM news WHERE id =$idTin  ";
mysql_query($sql);
header("location:quantri_tin.php");


 ?>