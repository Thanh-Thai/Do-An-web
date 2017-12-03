<?php
include "../dbcon.php";
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
	TRANG ADMIN
	</div>
	<div class="menu">
	<a href ="index.php" >Trang chủ</a> | <a href="quantri_loai.php">Quản trị loại xe</a> | <a href="quantri_xe.php">Quản trị xe</a>
	</div>
	<div class="content">
	<a href="add_tin.php"><i class="fa fa-plus" aria-hidden="true"></i>Thêm Tin</a>
	<table cellpadding="20" style="width: 100%;margin: auto" border="1">
		<tr>
			<td>ID Loại</td>
			<td>Tên Loại Xe</td>
			<td>Mô tả</td>
			<td>Hình Ảnh</td>
			<td>Lượt Xem</td>
			<td>Công Cụ</td>
		</tr>
		
		<?php 
			$sql = "SELECT	pID, pName, pDescript, pImg, cID, pView	FROM tblproducts"	;
			$kq = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($kq))
			{
				?>
				<tr>
					<td><?php echo  $row["pID"]; ?></td>
					<td><?php echo  $row["pName"] ?></td>
					<td><?php echo  $row["pDescript"] ?></td>
					<td><img width="100" height="80" src="<?php echo  "..\\" .$row["pImg"] ?>"/></td>
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