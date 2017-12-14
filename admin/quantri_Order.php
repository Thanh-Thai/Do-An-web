<?php
session_start();

if(!isset($_SESSION["hoten"]))
{
	header("location:login.php");
	die();
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
				<th>ID Đơn hàng</th>
				<th>ID khách Hàng</th>
				<th>Ngày lập</th>
				<th>Tổng Tiền</th>
				<th>Công cụ</th>
			</tr>
			<?php 
			$sql = "SELECT * FROM tblorders";
			$kq = mysqli_query($conn,$sql);

			while($row = mysqli_fetch_assoc($kq))
			{
				?>
				<tr>
					<td><?php echo  $row["oID"]; ?></td>
					<td><?php echo  $row["ctID"] ?></td>
					<td><?php echo  $row["datecreate"] ?></td>
					<td><?php echo  $row["Total"] ?></td>
					<td> 
						<a href="edit_loai.php?suaid=<?php echo $row["oID"]; ?>">
							<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa 
						</a> | 
						<a onclick="return confirm('Bạn có chắc chắn không?')" href="delete_loai.php?id=<?php echo  $row["oID"]; ?>">								
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