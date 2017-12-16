<?php
include("checklogin.php");


$ID= $_GET['suaid'];

if(isset($_POST["btn_Sua"]))
{

	$sql = "UPDATE tblmf set mfName = '$_POST[name]' where mfID=$ID";
	//Thuc thi va thong bao
	if(mysqli_query($conn,$sql))
	{
		header("location:quantri_hang.php");
	}
	else
	{
		echo "Thất bại";
	}
}

$sql = "select * from tblmf where mfID = $ID";
$kq = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($kq);
?>
<!DOCTYPE html>
<?php include("header.php") ?>

			 <li class="active"><a href="quantri_loai.php">Quản Trị Loại Xe</a></li>
            <li class="active"><a href="edit_loai.php">Sửa loại xe</a></li>
		</ol>
	</div><!--/.row-->
	<div class="row">
		<form action="" method="post">

			<table>

				<tr>
					<td>
						Mã Hãng: 
					</td>
					<td>
						<input type="text" disabled="true" class="form-control" name="id" value="<?php echo $row["mfID"]?>" />
					</td>
				</tr>
				<tr>
                    <td>
                        Nhập Tên Hãng:
                    </td>
                    <td>
                        <input type="text" name="name" value="<?php echo $row["mfName"]?>" /></td>
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