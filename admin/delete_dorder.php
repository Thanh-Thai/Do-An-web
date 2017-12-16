<?php
include("checklogin.php");


header("location:quantri_dorder.php");
$id = $_GET[id];
$num=0;
$thongbao=null;
$sql1= "DELETE FROM tblorddetails WHERE oID =$id";
if(!mysqli_query($conn,$sql1))
{
    return $thongbao=mysqli_errno($conn);
}

