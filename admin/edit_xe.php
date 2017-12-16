<?php
include("checklogin.php");


$id = $_GET["id"];	
$thongbao=null;
$sql="SELECT * FROM tblimg INNER JOIN tblproducts ON tblimg.iID = tblproducts.pID WHERE pID=$id";
$kq_edit = mysqli_query($conn,$sql);
$row_edit=mysqli_fetch_assoc($kq_edit);

if(isset($_POST["btn_Sua"]))
{
	$name = $_POST["name"];
	$noidung = $_POST["noidung"];

	$year=$_POST["year"];

	$color=$_POST["color"];

	$price=$_POST["price"];

	$temp = $_FILES["hinh_main"]["tmp_name"];
	$hinhname = $_FILES["hinh_main"]["name"];
	$handle = fopen($_FILES["hinh_main"]["tmp_name"], 'r');
	move_uploaded_file($temp, "../Media/images/".$hinhname);

	$temp1 = $_FILES[ "hinh1" ][ "tmp_name" ];
    $hinhname1 = $_FILES[ "hinh1" ][ "name" ];
    $handle = fopen( $_FILES["hinh1"][ "tmp_name" ], 'r' );
    move_uploaded_file( $temp1, "../Media/images/".$hinhname1 );

    $temp2 = $_FILES["hinh2"]["tmp_name"];
    $hinhname2 = $_FILES["hinh2"]["name"];
    $handle = fopen( $_FILES["hinh2"]["tmp_name"], 'r' );
    move_uploaded_file( $temp2, "../Media/images/".$hinhname2 );

    $temp3 = $_FILES[ "hinh3" ]["tmp_name"];
    $hinhname3 = $_FILES[ "hinh3"][ "name"];
    $handle = fopen( $_FILES[ "hinh3" ][ "tmp_name" ], 'r' );
    move_uploaded_file( $temp3, "../Media/images/".$hinhname3 );
    
    $eng = $_POST[ "eng" ];
    $tran = $_POST[ "tran" ];
    $x = $_POST[ "x" ];
    $y = $_POST[ "y" ];
    $z = $_POST[ "z" ];
    $fbr = $_POST[ "fbr" ];
    $rbr = $_POST[ "rbr" ];
    $wei = $_POST[ "wei" ];

	$loai_id=$_POST["theloai_id"];
    $new=$_POST["new"];
    $sale=$_POST["sale"];
	$status=$_POST["status"];

	$nsx_id=$_POST["nsx_id"];

	$sql="
	UPDATE `tblproducts` 
	SET `pName`='$name',
	`pDescript`='$noidung',
	`pYear`='$year',
	`pColor`='$color',
	`pPrice`='$price',
	`cateID`='$loai_id',
	`pStatus`='$status',
	`mafacID`='$nsx_id',
    `pNew`='$new',
    `pSale`='$sale',

	WHERE `tblproducts`.`pID`=$id";
    
        mysqli_query($conn,$sql);
    $sql1 = "UPDATE tblimg SET `img_main`='Media/images/$hinhname', `img1`='Media/images/$hinhname1', `img2`='Media/images/$hinhname2', `img3`= 'Media/images/$hinhname3' WHERE `tblimg`.`iID`=$id";
	$kq=mysqli_query($conn,$sql1);	
//    header('location:quantri_xe.php');
	       print_r($kq);
		echo mysqli_error($conn);
}
?>

 <?php include("header.php"); ?>	


			<li class="active">Quản Trị Xe</li>
		</ol>
	</div><!--/.row-->
	<div class="row" style="margin-left: 2px;">
		<form action="" method="post" enctype="multipart/form-data">
			<table style="border-spacing: 5px;">
				<tr>
					<td>ID Loại của xe <?php echo $id ?> là: &nbsp;<?php echo $row_edit["cateID"] ?></td>
					<td style="margin-left: 2px">
						<select  class="form-control" name="theloai_id">
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
					<td><input type="text" class="form-control" value="<?php echo $row_edit["pName"];?>" name="name"/></td>
				</tr>
				<tr>
					<td>Nội dung</td>
					<td><textarea  name="noidung" class="form-control" style="width: 500px;height: 400px"><?php echo $row_edit["pDescript"];?></textarea></td>
				</tr>	

				<tr>
					<td>Năm Sản Xuất:</td>
					<td><input type="text" class="form-control" name="year" value="<?php echo $row_edit["pYear"];?>" /></td>
				</tr>
				<tr>
					<td>Màu:</td>
					<td><input type="text" class="form-control" name="color" value="<?php echo $row_edit["pColor"];?>" /></td>
				</tr>	
				<tr>
					<td>Giá:</td>
					<td><input type="text" class="form-control" name="price" value="<?php echo $row_edit["pPrice"];?>" /></td>
				</tr>	
				<tr>
					<td>Hình</td>
                </tr>
                    <tr>
                              <td></td>
					<td><img width="400px" height="200px" src="../<?php echo $row_edit["img_main"];?>"></td>
                    <td><img width="400px" height="200px" src="../<?php echo $row_edit["img1"];?>"></td>
                    </tr>
                <tr>
                          <td></td>
                    <td><img width="400px" height="200px" src="../<?php echo $row_edit["img2"];?>"></td>
                    <td><img width="400px" height="200px" src="../<?php echo $row_edit["img3"];?>"></td>
                </tr>
				<tr>
                          <td></td>
					<td><input type="file" class="form-control" name="hinh_main" value="<?php echo $row_edit["img_main"];?>"></td>
				</tr>
                <tr>
                          <td></td>
					<td><input type="file" class="form-control" name="hinh1" value="<?php echo $row_edit["img1"];?>"></td>
				</tr>
                <tr>
                          <td></td>
					<td><input type="file" class="form-control" name="hinh2" value="<?php echo $row_edit["img2"];?>"></td>
				</tr>
                <tr>
                    <td></td>
					<td><input type="file" class="form-control" name="hinh3" value="<?php echo $row_edit["img3"];?>"></td>
				</tr>
				<tr>
					<td>Tình trạng:</td>
					<td>
                        <select  class="form-control" name="status">
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
                    <td>Sản phẩm mới:</td>
						<td>
							<select name="new">
								<?php 
								$sql2="SELECT * FROM tblnew";
								$kq=mysqli_query($conn,$sql2);
								while($row=mysqli_fetch_assoc($kq)){ ?>
								<option
                                        <?php

								if($row_edit["pNew"]==$row["ID"]) 
									echo "selected";
								?>
									value="<?php echo $row["ID"];?>"><?php echo $row["isNew"];?>
								</option>
								<?php
								 } 
								 ?>
							</select>
						</td>
					</tr>	
                    <tr>
						<td>Giảm giá:</td>
						<td>
							<select name="sale">
								<?php 
								$sql2="SELECT * FROM tblsale";
								$kq=mysqli_query($conn,$sql2);
								while($row=mysqli_fetch_assoc($kq)){ ?>
								<option
                                         <?php

								if($row_edit["pSale"]==$row["ID"]) 
									echo "selected";
								?>
									value="<?php echo $row["ID"];?>"><?php echo $row["isSale"];?>
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
						<select class="form-control" name="nsx_id">
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
            </table>
            <table style="border-spacing: 5px;">
				<td >Loại Động Cơ</td>
                            <td ><input class="form-control inputfield" type="text" name="eng"  value="<?php echo $row_edit["pEngine"]; ?>"/></td>
                        </tr>
                    <tr>
                     <td>Hộp Số</td>
                            <td ><input class="form-control inputfield" type="text" name="tran" value="<?php echo $row_edit["pTranmiss"]; ?>"/></td>
                         <td    style="padding-left: 40px">Chiều Dài(mm)</td>
                            <td ><input class="form-control" type="text" name="x" value="<?php echo $row_edit["pX"]; ?>"/></td>
                    </tr>
                    <tr>
                     <td>Thắng Trước</td>
                            <td ><input class="form-control inputfield" type="text" name="fbr" value="<?php echo $row_edit["pFbrakes"]; ?>"/></td>
                         <td    style="padding-left: 40px">Chiều Rộng(mm)</td>
                            <td><input class="form-control" type="text" name="y" value="<?php echo $row_edit["pY"]; ?>"/></td>
                    </tr>
                    <tr>
                     <td>Thắng Sau</td>
                            <td ><input class="form-control inputfield" type="text" name="rbr" value="<?php echo $row_edit["pRbrakes"]; ?>"/></td>
                         <td    style="padding-left: 40px">Chiều Cao(mm)</td>
                            <td ><input class="form-control " type="text" name="z" value="<?php echo $row_edit["pZ"]; ?>"/></td>
                    </tr>	
            <tr>
             <td>Trọng Lượng</td>
                            <td><input class="form-control" type="text" name="z" value="<?php echo $row_edit["pWeight"]; ?>"/></td>
                 <td  style="padding-left: 40px">KG</td>
                </tr>
					<tr>
						<td colspan="2">
							<input type="submit" class="btn btn-primary" name="btn_Sua" value="Sửa">
						</td>			
					</tr>

				</table>

				</form>
	</div>
</div>
<?php include("footer.php") ?>	