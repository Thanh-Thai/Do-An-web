<?php
include("checklogin.php");

header("location:quantri_Customer.php");
$id = $_GET[id];
$num=0;
$thongbao=null;
$sql1= "DELETE FROM tblcustomer WHERE CusID =$id";
if(!mysqli_query($conn,$sql1))
{
    return $thongbao=mysqli_errno($conn);
}
else 
{
$sql2="UPDATE tblcustomer SET CusID = $num := ($num+1)";
mysqli_query($conn,$sql2);
$sql3="ALTER TABLE tblcustomer AUTO_INCREMENT = 1";
mysqli_query($conn,$sql3);
}
 ?>
