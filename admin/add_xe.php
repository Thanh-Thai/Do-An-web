<?php
	session_start();

	if(!isset($_SESSION["hoten"]))
	{
		header("location:login.php");
		die();
	}
		include "../dbcon.php";

 $thongbao=NULL;
	//Kiem tra co nhat nut hay khong
if(isset($_POST["btn_Them"]))
{

	$name = $_POST["name"];

	$noidung = $_POST["noidung"];

	$year=$_POST["year"];

	$color=$_POST["color"];

	$price=$_POST["price"];


	$temp = $_FILES["hinh"]["tmp_name"];
	$hinhname = $_FILES["hinh"]["name"];
	$handle = fopen($_FILES["hinh"]["tmp_name"], 'r');
	move_uploaded_file($temp, "../Media/images/".$hinhname);

	$status=$_POST["status"];

	$nsx_id=$_POST["nsx_id"];

	$theloai_id = $_POST["theloai_id"];
		
		/*print_r($name);
		?>
			<br/>
		<?php
			print_r($noidung);
			?>
			<br/>
		<?php
				print_r($year);
				?>
			<br/>
		<?php
					print_r($color);
					?>
			<br/>
		<?php
						print_r($price);
						?>
			<br/>
		<?php
							print_r($status);
							?>
			<br/>
		<?php
								print_r($nsx_id);
								?>
			<br/>
		<?php
									print_r($theloai_id);
									?>
			<br/>
		<?php
	
*/
	
	$sql= "INSERT INTO 	tblproducts(pID,pName,pDescript,pYear,pColor,pPrice,pImg,pStatus,mafacID,cateID)
	VALUES (DEFAULT,'$name','$noidung','$year','$color','$price','Media/images/$hinhname','$status','$nsx_id','$theloai_id')";
	if(mysqli_query($conn,$sql))
	{
		$thongbao= "Đã thêm dữ liệu";
	}
	else
	{
		$thongbao= "Thêm thất bại";
		echo mysqli_error($conn);
	}
}
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
			<p>Chào Anh <?php echo $_SESSION["hoten"] ?></p>
		</div>
		<div class="menu">
			<a href ="index.php" >Trang chủ</a> | <a href="quantri_loai.php">Quản trị loại xe</a> | <a href="quantri_xe.php">Quản trị xe</a>
		</div>
		<div class="content">
			<p style="background-color:green;color:white"><?php echo $thongbao ?></p>
			<form action="" method="post" enctype="multipart/form-data">
				<table>
					<tr>
						<td>
							Chọn Loại xe
						</td>
						<td>
							<select name="theloai_id">
								<?php 
								$sql="SELECT * FROM tblcategories";
								$kq=mysqli_query($conn,$sql);
								while($row=mysqli_fetch_assoc($kq)){ ?>
								<option value="<?php echo $row["cID"];?>"><?php echo $row["cName"];?></option>
								<?php } ?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Tên Xe</td>
						<td><input type="text" name="name"/></td>
					</tr>
					<tr>
						<td>Nội dung</td>
						<td><textarea  name="noidung" style="width: 500px;height: 300px"></textarea></td>
					</tr>	
					<tr>
						<td>Năm Sản Xuất:</td>
						<td><input type="text" name="year"/></td>
					</tr>
					<tr>
						<td>Màu:</td>
						<td><input type="text" name="color"/></td>
					</tr>
					<tr>
						<td>Giá:</td>
						<td><input type="text" name="price"/></td>
					</tr>
					<tr>
						<td>Hình: </td>
						<td>
							<input type="file" name="hinh"></td>
						</tr>		
						<tr>
							<td>Tình trạng:</td>
							<td><input type="text" name="status"/></td>
						</tr>
						<tr>
							<td>
								Nhà Sản Xuất:
							</td>
							<td>
								<select name="nsx_id">
									<?php 
									$sql2="SELECT * FROM tblmf";
									$kq=mysqli_query($conn,$sql2);
									while($row=mysqli_fetch_assoc($kq)){ ?>
									<option value="<?php echo $row["mfID"];?>"><?php echo $row["mfName"];?></option>
									<?php } ?>
								</select>
							</td>
						</tr>		
						<tr>
							<td colspan="2">
								<input type="submit" name="btn_Them" value="Thêm">
							</td>			
						</tr>
						
					</table>

				</form>


			</div>
		</div>
	</body>
	</html>