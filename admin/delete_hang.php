<?php
	session_start();

	if(!isset($_SESSION["hoten"]))
	{
		header("location:login.php");
		die();
	}
		include "../dbcon.php";

header("location:quantri_hang.php");
$id = $_GET[id];
$num=0;
$thongbao=null;
$sql1= "DELETE FROM tblmf WHERE mfID =$id";
if(!mysqli_query($conn,$sql1))
{
    return $thongbao=mysqli_errno($conn);
}
else 
{
$sql2="UPDATE tblmf SET mfID = $num := ($num+1)";
mysqli_query($conn,$sql2);
$sql3="ALTER TABLE tblmf AUTO_INCREMENT = 1";
mysqli_query($conn,$sql3);
return $thongbao="Xoá Thành Công";
}
 ?>
