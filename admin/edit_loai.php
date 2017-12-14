<?php
session_start();

if(!isset($_SESSION["hoten"]))
{
	header("location:login.php");
	die();
}
include "../dbcon.php";

$ID= $_GET['suaid'];

if(isset($_POST["btn_Sua"]))
{

	$sql = "UPDATE tblcategories set cName = '$_POST[name]', cDescript ='$_POST[mota]'  where cID=$ID";
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
<?php include("header.php") ?>

			 <li class="active"><a href="quantri_loai.php">Quản Trị Loại Xe</a></li>
            <li class="active"><a href="edit_loai.php">Sửa loại xe</a></li>
		</ol>
	</div><!--/.row-->
	<div class="row">
		<form action="" method="post">
<!--            <div><?php print_r($kq) ?></div>-->
			<table>

				<tr>
					<td>
						Tên Loại
					</td>
					<td>
						<input type="text" class="form-control" name="name" value="<?php echo $row["cName"] ?>" />
					</td>
				</tr>
				<tr>
                    <td>
                        Nhập Mô tả:
                    </td>
                    <td>
                        <textarea name="mota" class="form-control" rows="4"></textarea>
                    </td>
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