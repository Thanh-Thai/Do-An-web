<?php
session_start();

if(!isset($_SESSION["hoten"]))
{
	header("location:login.php");
	die();
}
elseif($_SESSION['role']!=1)
{
    header("location:index.php");
    exit();
}
include "../dbcon.php";

$thongbao=null;

?>
<?php include("header.php"); ?>
			<li class="active"><a href="quantri_loai.php">Quản Trị Loại Xe</a></li>
			<button type="button" class="btn btn-md btn-default" style="float: right; padding: 0px"><a href="add_loai.php">Thêm</a></button>
		</ol>
	</div><!--/.row-->
	<div class="row">
		<table cellpadding="20" style="width: 99%;margin: auto;margin-left: 10px" border="0">
			<tbody style="margin-bottom: 100px;">
			<tr>
				<th>User Name</th>
				<th>Password</th>
				<th>Tên</th>
				<th>Ngày Sinh</th>
				<th>Email</th>
				<th>Số Điện Thoại</th>
				<th>Giới Tính</th>
				<th>Quyền</th>
				<th>Công cụ</th>
			</tr>
			<?php 
			$sql = "SELECT * FROM tblusers";
			$kq = mysqli_query($conn,$sql);

			while($row = mysqli_fetch_assoc($kq))
			{
				?>
				<tr>
					<td><?php echo  $row["userName"]; ?></td>
					<td><?php echo  $row["password"] ?></td>
					<td><?php echo  $row["uName"] ?></td>
					<td><?php echo  $row["uBd"] ?></td>
					<td><?php echo  $row["uMail"] ?></td>
					<td><?php echo  $row["uPhone"] ?></td>
					<td><?php echo  $row["uGen"] ?></td>
					<td><?php echo  $row["Role"] ?></td>
					<td> 
						<a href="edit_loai.php?suaid=<?php echo $row["userName"]; ?>">
							<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa 
						</a> | 
						<a onclick="return confirm('Bạn có chắc chắn không?')" href="delete_loai.php?id=<?php echo  $row["userName"]; ?>">								
							<i class="fa fa-trash" aria-hidden="true"></i> Xóa
						</a>
					</td>
				</tr>
				<?php
			}
			?>

</tbody>
		</table>
	</div>
</div>
<?php include("footer.php") ?>