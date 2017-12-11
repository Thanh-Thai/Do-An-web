<?php
	session_start();

	if(!isset($_SESSION["hoten"]))
	{
		header("location:login.php");
		die();
	}
		include "../dbcon.php";

$id = $_GET["id"];	
$thongbao=null;
$sql="SELECT * FROM tblproducts WHERE pID=$id";
$kq_edit = mysqli_query($conn,$sql);
$row_edit=mysqli_fetch_assoc($kq_edit);

if(isset($_POST["btn_Sua"]))
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

	$temp1 = $_FILES["spec_img"]["tmp_name"];
	$spec_imgname = $_FILES["spec_img"]["name"];
	$handle_specs = fopen($_FILES["spec_img"]["tmp_name"], 'r');
	move_uploaded_file($temp1, "../Media/images/".$spec_imgname);


	$loai_id=$_POST["theloai_id"];

	$status=$_POST["status"];

	$nsx_id=$_POST["nsx_id"];

	$sql="
	UPDATE `tblproducts` 
	SET `pName`='$name',
	`pDescript`='$noidung',
	`pYear`='$year',
	`pColor`='$color',
	`pPrice`='$price',
	`pImg`='Media/images/$hinhname',
	`cateID`='$loai_id',
	`pStatus`='$status',
	`mafacID`='$nsx_id',
	`pSpecs`='Media/images/spec_$spec_imgname'

	WHERE `tblproducts`.`pID`=$id";
	if(mysqli_query($conn,$sql))
	{
		$thongbao= "Sửa thành công";
		header('location:quantri_xe.php');
	}
	else
	{
		$thongbao= "Sửa thất bại";
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
		</div>
		<div class="menu">
			<a href ="index.php" >Trang chủ</a> | <a href="quantri_loai.php">Quản trị loại xe</a> | <a href="quantri_xe.php">Quản trị xe</a>
		</div>
		<div class="content">
			<p style="background-color: green;color:white"><?php echo $thongbao ?></p>
			<form action="" method="post" enctype="multipart/form-data">

				<table>

					<tr>
						<td>
							ID Loại của xe <?php echo $id ?> là :<?php echo $row_edit["cateID"] ?>

						</td>
						<td>
							<select name="theloai_id">
								<?php 
								$sql1="SELECT * FROM tblcategories";
								$kq=mysqli_query($conn,$sql1);
								while($row=mysqli_fetch_assoc($kq)){
									?>
									<option 
									<?php
									if($row_edit["cateID"]==$row["cID"]) 
										echo "selected";
									?>
									value="<?php echo $row["cID"];?>"><?php echo $row["cName"];?>
								</option>
								<?php } ?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Tên Xe:</td>
						<td><input type="text" value="<?php echo $row_edit["pName"];?>" name="name"/></td>
					</tr>
					<tr>
						<td>Nội dung</td>
						<td><textarea  name="noidung" style="width: 500px;height: 400px"><?php echo $row_edit["pDescript"];?></textarea></td>
					</tr>	

					<tr>
						<td>Năm Sản Xuất:</td>
						<td><input type="text" name="year" value="<?php echo $row_edit["pYear"];?>" /></td>
					</tr>
					<tr>
						<td>Màu:</td>
						<td><input type="text" name="color" value="<?php echo $row_edit["pColor"];?>" /></td>
					</tr>	
					<tr>
						<td>Giá:</td>
						<td><input type="text" name="price" value="<?php echo $row_edit["pPrice"];?>" /></td>
					</tr>	
					<tr>
						<td>Hình</td>
						<td><img width="300px" height="200px" src="../<?php echo $row_edit["pImg"];?>"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="file" name="hinh" value="<?php echo $row_edit["pImg"];?>"></td>
					</tr>
					<tr>
						<td>Tình trạng:</td>
						<td>
							<select name="status">
								<?php 
								$sql2="SELECT * FROM tblstatus";
								$kq=mysqli_query($conn,$sql2);
								while($row=mysqli_fetch_assoc($kq)){ ?>
								<option
								<?php

									if($row_edit["pStatus"]==$row["sID"]) 
										echo "selected";
									?>
									value="<?php echo $row["sID"];?>"><?php echo $row["sName"];?>
						
								</option>
								<?php

								 } 
								 ?>
							</select>
						</td>
					</tr>		
					<tr>
						<td>
							Nhà Sản Xuất:
						</td>
						<td>
							<select name="nsx_id">
								<?php 
								$sql3="SELECT * FROM tblmf";
								$kq=mysqli_query($conn,$sql3);
								while($row=mysqli_fetch_assoc($kq)){ ?>
								<option 
								<?php
									if($row_edit["mafacID"]==$row["mfID"]) 
										echo "selected";
									?>
									value="<?php echo $row["mfID"];?>"><?php echo $row["mfName"];?>
										
									</option>
								<?php } ?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Thông số (Img):</td>
						<td><img width="300px" height="200px" src="../<?php echo $row_edit["pSpecs"];?>"></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="file" name="spec_img" value="<?php echo $row_edit["pSpecs"];?>"></td>
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