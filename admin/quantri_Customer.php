<?php
include("checklogin.php");

$thongbao=null;

?>
<?php include("header.php"); ?>
			<li class="active"><a href="quantri_Customer.php">Quản Trị Khách hàng</a></li>
		</ol>
	</div><!--/.row-->
	<div class="row">
		<table cellpadding="20" style="width: 99%;margin: auto;margin-left: 10px" border="0">
			<tbody style="margin-bottom: 100px;">
			<tr>
				<th>ID Khách Hàng</th>
				<th>Tên khách hàng</th>
				<th>Email</th>	
                <th>Số Điện thoại</th>
				<th>Công cụ</th>
			</tr>
			<?php 
			$sql = "SELECT * FROM tblcustomer";
			$kq = mysqli_query($conn,$sql);

			while($row = mysqli_fetch_assoc($kq))
			{
				?>
				<tr>
					<td><?php echo  $row["CusID"]; ?></td>
					<td><?php echo  $row["CusName"] ?></td>
					<td><?php echo  $row["CusEmail"] ?></td>
					<td><?php echo  $row["CusPhone"] ?></td>
					<td> 
						<a href="edit_cst.php?suaid=<?php echo $row["CusID"]; ?>">
							<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa 
						</a> | 
						<a onclick="return confirm('Bạn có chắc chắn không?')" href="delete_cst.php?id=<?php echo  $row["CusID"]; ?>">								
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