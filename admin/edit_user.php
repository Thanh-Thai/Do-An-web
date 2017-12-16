<?php
include("checklogin.php");

$ID= $_GET['suaid'];

if(isset($_POST["btn_Sua"]))
{

	$sql = "UPDATE tblusers set password ='$_POST[password]',uName='$_POST[name]',uBd='$_POST[dob]', uMail='$_POST[mail]',uPhone='$_POST[phone]', uGen='$_POST[sex]', Role='$_POST[role]' where userName='$ID'";
	//Thuc thi va thong bao
	if(mysqli_query($conn,$sql))
	{
		header("location:quantri_user.php");
	}
	else
	{
		echo "Thất bại";
	}
}

$sql = "select * from tblusers where userName = '$ID'";
$kq = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($kq);
?>
<?php include("header.php") ?>

			 <li class="active"><a href="quantri_loai.php">Quản Trị Loại Xe</a></li>
            <li class="active"><a href="edit_loai.php">Sửa loại xe</a></li>
		</ol>
	</div><!--/.row-->
	<div class="row" style="margin-left: 10px">
		<form action="" method="post">
<!--            <div><?php print_r($kq) ?></div>-->
			<table>
				<tr>
					<td>
						UserName
					</td>
					<td>
						<input type="text" class="form-control" name="username" value="<?php echo $row["userName"] ?>" readonly/>
					</td>
				</tr>
				<tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="text" class="form-control" name="password" value="<?php echo $row["password"] ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Tên người dùng:
                    </td>
                    <td>
                        <input type="text" class="form-control" name="name" value="<?php echo $row["uName"] ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                       Năm Sinh:
                    </td>
                    <td>
                        <input type="text" class="form-control" name="dob" value="<?php echo $row["uBd"] ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                       Email:
                    </td>
                    <td>
                        <input type="email" class="form-control" name="mail" value="<?php echo $row["uMail"] ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                       Số điện thoại:
                    </td>
                    <td>
                        <input type="text" class="form-control" name="phone" value="<?php echo $row["uPhone"] ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Giới tính:
                    </td>
                    <td>
                        <input type="text" class="form-control" name="sex" value="<?php echo $row["uGen"] ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                       Quyền:
                    </td>
                    <td>
                        <input type="text" class="form-control" name="role" value="<?php echo $row["Role"] ?>"/>
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