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
	<p>Chào Anh/Chị <?php echo $_SESSION["hoten"] ?></p>
    </div>
	<div class="menu">
	<a href ="index.php" >Trang chủ</a> | <a href="quantri_loai.php">Quản trị loại xe</a> | <a href="quantri_xe.php">Quản trị xe</a>
	</div>
	<div class="content">
		<p style="background-color:green;color:white"><?php echo $thongbao ?></p>
	<a href="add_xe.php"><i class="fa fa-plus" aria-hidden="true"></i>Thêm Xe</a>
	<table cellpadding="15" style="width: 100%;margin: auto" border="1">
		<tr>
			<td>ID Loại</td>
			<td>Tên Loại Xe</td>
			<td width="550px">Mô tả</td>
			<td >Hình Ảnh</td>
			<td>Lượt Xem</td>
			<td>Công Cụ</td>
		</tr>
		
		<?php 
			$sql = "SELECT	pID, pName, pDescript, pImg, cateID, pView	FROM tblproducts"	;
			$kq = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($kq))
			{
				?>
				<tr>
					<td><?php echo  $row["pID"]; ?></td>
					<td><?php echo  $row["pName"] ?></td>
					<td><?php echo  $row["pDescript"] ?></td>
					<td style="text-align: center; width: 200px"><img width="100%" height="100px" src="<?php echo  "..\\" .$row["pImg"] ?>"/></td>
					<td><?php echo  $row["pView"] ?></td>
					<td> 
						<a href="edit_xe.php?id=<?php echo  $row["pID"]; ?>">
								<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa 
								</a> | 
								<a onclick="return confirm('Bạn có chắc chắn không?')" href="delete_xe.php?idXe=<?php echo  $row["pID"]; ?>">								
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