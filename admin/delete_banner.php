<?php
	session_start();

	if(!isset($_SESSION["hoten"]))
	{
		header("location:login.php");
		die();
	}
		include "../dbcon.php";

$idB = $_GET["idB"];

$sql="DELETE FROM banner WHERE idbn=$idB";
mysql_query($sql);
header("location:quantri_banner.php");

?>