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
	Trang chủ | <a href="quantri_banner.php">Quản trị banner</a>
	</div>
	<div class="content">
	<a href="add_banner.php"><i class="fa fa-plus" aria-hidden="true"></i>Thêm Banner</a>
	<table cellpadding="20" style="width: 100%;margin: auto" border="1">
		<tr>
			<td>ID Loại</td>
			<td>Hình</td>
		</tr>
		
		<?php 
			$sql = "select * from banner";
			$kq = mysql_query($sql);
			while($row = mysql_fetch_assoc($kq))
			{
				?>
				<tr>
					<td><?php echo  $row[idbn]; ?></td>
					<td><?php echo  $row[hinh] ?></td>
					<td> 
						<a href="edit_banner.php?idbn=<?php echo  $row[idbn]; ?>">
								<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa 
								</a> | 

								<a onclick="return confirm('Bạn có chắc chắn không?')" href="delete_banner.php?idB=<?php echo  $row[idbn]; ?>">								
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