<?php
include("checklogin.php");


$idxe = $_GET["idXe"];
$num=0;
$thongbao=null;
$sql1= "DELETE FROM tblproducts WHERE pID =$idxe";
if(!mysqli_query($conn,$sql1))
{
    return $thongbao=mysqli_errno($conn);
};
$sql2="UPDATE tblproducts SET pID = $num := ($num+1)";
mysqli_query($conn,$sql2);
$sql3="ALTER TABLE tblproducts AUTO_INCREMENT = 1";
mysqli_query($conn,$sql3);
header("location:quantri_xe.php");
 ?>