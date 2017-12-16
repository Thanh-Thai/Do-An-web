<?php
include("checklogin.php");


header("location:quantri_order.php");
$id = $_GET[id];
$num=0;
$thongbao=null;
$sql1= "DELETE FROM tblorders WHERE oID =$id";
if(!mysqli_query($conn,$sql1))
{
    return $thongbao=mysqli_errno($conn);
}
else 
{
$sql2="UPDATE tblorders SET oID = $num := ($num+1)";
mysqli_query($conn,$sql2);
$sql3="ALTER TABLE tblorders AUTO_INCREMENT = 1";
mysqli_query($conn,$sql3);
return $thongbao="Xoá Thành Công";
}
 ?>
