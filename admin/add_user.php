<?php
include("checklogin.php");

$thongbao=null;
//Kiểm tra có nhấn nút hay không
if (isset($_POST["btn_them"])) {
    if ($_POST["username"]=="") {
       ?><script> window.alert("Không được User Name rỗng")</script>
    <?php
    } else {
        $sql="INSERT INTO tblusers(userName,password,uName,uBd,uMail,uPhone,uGen,Role) VALUES('$_POST[username]','$_POST[password]','$_POST[name]','$_POST[dob]','$_POST[email]','$_POST[phone]','$_POST[sex]','$_POST[role]')";
        if (mysqli_query($conn,$sql)) {
              $thongbao="Thêm thành công";
             header("location:quantri_user.php");
        } else {
            $thongbao= "Thêm thất bại";
            return $thongbao=mysqli_errno($conn);
        }
    }
}

?>

<?php include("header.php"); ?>
            <li class="active"><a href="quantri_user.php">Quản Trị User</a></li>
            <li class="active"><a href="add_user.php">Thêm User</a></li>
            <button type="button" class="btn btn-md btn-default" style="float: right; padding: 0px"><a href="add_user.php">Thêm</a></button>
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
						<input type="text" class="form-control" name="username" value=""/>
					</td>
				</tr>
				<tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="text" class="form-control" name="password" value=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Tên người dùng:
                    </td>
                    <td>
                        <input type="text" class="form-control" name="name" value=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                       Năm Sinh:
                    </td>
                    <td>
                        <input type="text" class="form-control" name="dob" value=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                       Email:
                    </td>
                    <td>
                        <input type="email" class="form-control" name="email" value=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                       Số điện thoại:
                    </td>
                    <td>
                        <input type="text" class="form-control" name="phone" value=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Giới tính:
                    </td>
                    <td>
                        <input type="text" class="form-control" name="sex" value=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                       Quyền:
                    </td>
                    <td>
                        <input type="text" class="form-control" name="role" value=""/>
                    </td>
                </tr>
				<tr>
					<td colspan="2">
						<input type="submit" class="btn btn-primary" name="btn_them" value="Thêm">
					</td>			
				</tr>
			</table>

		</form>
    </div>
</div>
<?php include("footer.php") ?>
