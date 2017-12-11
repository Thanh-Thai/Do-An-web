<?php
	session_start();

	if(!isset($_SESSION["hoten"]))
	{
		header("location:login.php");
		die();
	}
		include "../dbcon.php";

$thongbao=null;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>

<div class="container">
	<div class="header">
	<p>TRANG ADMIN</p>
	<br>
    </div>
	<div class="menu">
	<a href ="index.php" >Trang chủ</a> | <a href="quantri_loai.php">Quản trị loại xe</a> | <a href="quantri_xe.php">Quản trị xe</a>
	</div>
	<div class="content">
	<a href="add_loai.php"><i class="fa fa-plus" aria-hidden="true"></i>Thêm Loại</a>
	<p style="color: white;background-color: green;font-weight: bold"><?php echo $thongbao;?></p>
	<table cellpadding="20" style="width: 100%;margin: auto" border="1">
		<tr>
			<td>ID Loại</td>
			<td>Tên Loại</td>
			<td>Công cụ</td>
		</tr>
		
		<?php 
			$sql = "SELECT * FROM tblcategories";
			$kq = mysqli_query($conn,$sql);
		
			while($row = mysqli_fetch_assoc($kq))
			{
				?>
				<tr>
					<td><?php echo  $row["cID"]; ?></td>
					<td><?php echo  $row["cName"] ?></td>
					<td> 
						<a href="edit_loai.php?suaid=<?php echo $row["cID"]; ?>">
								<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa 
								</a> | 
								<a onclick="return confirm('Bạn có chắc chắn không?')" href="delete_loai.php?id=<?php echo  $row["cID"]; ?>">								
									<i class="fa fa-trash" aria-hidden="true"></i> Xóa
								</a>
						</td>
				</tr>
				<?php
			}
		 ?>
		
		
	</table>

	</div>
</div>



</body>
</html>