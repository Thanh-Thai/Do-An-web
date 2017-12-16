<?php
include("checklogin.php");


$thongbao=null;

?>
<?php include("header.php") ?>
			<li class="active"><a href="quantri_tin.php">Quản Trị Tin</a></li>
			<button type="button" class="btn btn-md btn-default" style="float: right; padding: 0px"><a href="add_tin.php">Thêm</a></button>
		</ol>
	</div><!--/.row-->
	<div class="row">
		<table cellpadding="10" style="width: 99%;margin: auto;margin-left: 10px" border="0">
			<tbody style="margin-bottom: 100px;">
			<tr>
				<th>ID Tin</th>
				<th>Tiêu Đề</th>
				<th>Công cụ</th>
			</tr>
			<?php 
			$sql = "SELECT * FROM tblnews";
			$kq = mysqli_query($conn,$sql);

			while($row = mysqli_fetch_assoc($kq))
			{
				?>
				<tr>
					<td><?php echo  $row["nID"]; ?></td>
					<td><?php echo  $row["nTitle"] ?></td>
					<td> 
						<a href="edit_tin.php?suaid=<?php echo $row["nID"]; ?>">
							<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa 
						</a> | 
						<a onclick="return confirm('Bạn có chắc chắn không?')" href="delete_tin.php?id=<?php echo  $row["nID"]; ?>">								
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