<?php
include "../dbcon.php";
$ID= $_REQUEST[suaid];

if(isset($_POST["btn_Sua"]))
{

	$sql = "UPDATE tblcategories set CName = '$_POST[name]' where cID=$ID";
	//Thuc thi va thong bao
		if(mysqli_query($conn,$sql))
		{
			header("location:quantri_loai.php");
		}
		else
		{
			echo "Thất bại";
		}
}

$sql = "select * from tblcategories where cID = $ID";
$kq = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($kq);
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
	
	<form action="" method="post">
		
		<table>
		
		<tr>
			<td>
				Tên Loại
			</td>
			<td>
				<input type="text" name="name" value="<?php echo $row["cName"] ?>" />
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="btn_Sua" value="Sửa">
			</td>			
		</tr>
	</table>

	</form>


	</div>
</div>



</body>
</html>