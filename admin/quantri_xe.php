<?php
include("checklogin.php");


$thongbao=null;
?>
<?php include("header.php"); ?>
			<li class="active"><a href="quantri_xe.php">Quản Trị Xe</a></li>
			<button type="button" class="btn btn-md btn-default" style="float: right; padding: 0px"><a href="add_xe.php">Thêm</a></button>
		</ol>
	</div><!--/.row-->
	<div class="row">
	<table id="tbqtxe" cellpadding="15" style="width: 99%;margin: auto; margin-left: 10px" border="0">
		<tr>
			<th>ID Loại</th>
			<th>Tên Loại Xe</th>
			<th width="440px">Mô tả</th>
			<th >Hình Ảnh</th>
			<th>Lượt Xem</th>
			<th>Công Cụ</th>
		</tr>
		
		<?php 
			$sql = "SELECT	pID, pName, pDescript, cateID, tblimg.img_main, pView	FROM
                    tblproducts
                    INNER JOIN tblimg ON tblproducts.pID = tblimg.iID"	;
			$kq = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($kq))
			{
				?>
				<tr>
					<td><?php echo  $row["pID"]; ?></td>
					<td><?php echo  $row["pName"] ?></td>
					<td style="text-align: left;"><?php echo  $row["pDescript"] ?></td>
					<td style="text-align: center; width: 200px"><img width="100%" height="100px" src="<?php echo  "..\\" .$row["img_main"] ?>"/></td>
					<td style="text-align: center;"><?php echo  $row["pView"] ?></td>
					<td> 
						<a href="edit_xe.php?id=<?php echo  $row["pID"]; ?>">
								<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa 
								</a> | 
								<a onclick="return confirm('Bạn có chắc chắn không?')" href="delete_xe.php?idXe=<?php echo  $row["pID"]; ?>">								
									<i class="fa fa-trash" aria-hidden="true"></i> Xóa
								</a>
						</td>
				</tr>
				<?php
			}
		 ?>
		</table>
			</div>
</div>
<?php include("footer.php"); ?>