<?php
include("checklogin.php");

header("location:quantri_tin.php");
$id = $_GET[id];
$num=0;
$thongbao=null;
$sql1= "DELETE FROM tblnews WHERE nID =$id";
if(!mysqli_query($conn,$sql1))
{
    return $thongbao=mysqli_errno($conn);
}
else 
{
$sql2="UPDATE tblnews SET nID = $num := ($num+1)";
mysqli_query($conn,$sql2);
$sql3="ALTER TABLE tblnews AUTO_INCREMENT = 1";
mysqli_query($conn,$sql3);
}
 ?>
