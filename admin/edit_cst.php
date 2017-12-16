<?php
include("checklogin.php");

$ID= $_GET['suaid'];

if(isset($_POST["btn_Sua"]))
{

	$sql = "UPDATE tblcustomer set CusName = '$_POST[name]', CusEmail ='$_POST[email]', CusPhone='$_POST[phone]'  where CusID=$ID";
	//Thuc thi va thong bao
	if(mysqli_query($conn,$sql))
	{
		header("location:quantri_Customer.php");
	}
	else
	{
		echo "Thất bại";
	}
}

$sql = "select * from tblcustomer where CusID = $ID";
$kq = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($kq);
?>
<?php include("header.php") ?>

			 <li class="active"><a href="quantri_Customer.php">Quản Trị Khách Hàng</a></li>
            <li class="active"><a href="edit_cst.php">Sửa Khách Hàng</a></li>
		</ol>
	</div><!--/.row-->
	<div class="row" style="margin-left: 5px">
		<form action="" method="post">
<!--            <div><?php print_r($kq) ?></div>-->
			<table>

				<tr>
					<td>
						ID khách hàng
					</td>
					<td>
						<input type="text" class="form-control" name="id" value="<?php echo $row["CusID"] ?>" readonly/>
					</td>
				</tr>
				<tr>
                    <td>
                        Tên khách Hàng:
                    </td>
                    <td>
                        <input type="text" class="form-control" name="name" value="<?php echo $row["CusName"] ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="email" class="form-control" name="email" value="<?php echo $row["CusEmail"] ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                       Số điện thoại:
                    </td>
                    <td>
                        <input type="text" class="form-control" name="name" value="<?php echo $row["CusPhone"] ?>"/>
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