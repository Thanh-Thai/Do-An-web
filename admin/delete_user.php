<?php
	session_start();

	if(!isset($_SESSION["hoten"]))
	{
		header("location:login.php");
		die();
	}
		include "../dbcon.php";

header("location:quantri_user.php");
$id = $_GET['id'];
$num=0;
$thongbao=null;
$sql1= "DELETE FROM tblusers WHERE userName ='$id'";
 ?>
