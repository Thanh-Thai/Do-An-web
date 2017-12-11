<?php 
	session_start();
	include "../dbcon.php";

	if(!isset($_SESSION["hoten"]))
	{
		header("location:login.php");
		die();
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
	<div class="header">
	<p>TRANG ADMIN</p>
	<br>
	<p>Chào Anh <?php echo $_SESSION["hoten"] ?></p>
    </div>
	<div class="menu">
	<a href ="index.php" >Trang chủ</a> | <a href="quantri_loai.php">Quản trị loại xe</a> | <a href="quantri_xe.php">Quản trị xe</a> | <a href="logout.php">Logout</a>
	</div>
	<div class="content">
	Hiện có : 
	<br> - <?php $sql = "SELECT COUNT(cID) FROM tblcategories";
		$kq = mysqli_query($conn,$sql); 
		$row = mysqli_fetch_array($kq) ;
		echo $row[0];
		?> Loại xe
	<br> - <?php $sql = "SELECT COUNT(pID) FROM tblproducts";
		$kq = mysqli_query($conn,$sql); 
		$row = mysqli_fetch_array($kq) ;
		echo $row[0];
		?>  Sản phẩm

	<table cellpadding="20" style="width: 100%;margin: auto" border="1">
		<tr>
			<td>Tiêu đề</td>
			<td>Tiêu đề</td>
			<td>Tiêu đề</td>
			<td>Tiêu đề</td>
		</tr>
		<tr>
			<td>Tiêu đề</td>
			<td>Tiêu đề</td>
			<td>Tiêu đề</td>
			<td>Tiêu đề</td>
		</tr>
		<tr>
			<td>Tiêu đề</td>
			<td>Tiêu đề</td>
			<td>Tiêu đề</td>
			<td>Tiêu đề</td>
		</tr>
		<tr>
			<td>Tiêu đề</td>
			<td>Tiêu đề</td>
			<td>Tiêu đề</td>
			<td>Tiêu đề</td>
		</tr>
		<tr>
			<td>Tiêu đề</td>
			<td>Tiêu đề</td>
			<td>Tiêu đề</td>
			<td>Tiêu đề</td>
		</tr>
	</table>

	</div>
</div>



</body>
</html>