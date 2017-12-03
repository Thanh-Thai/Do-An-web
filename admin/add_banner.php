<?php
include "../dbcon.php";
	
	//Kiem tra co nhat nut hay khong
	if(isset($_POST["btn_Them"]))
	{
		$hinh = $_POST["hinh"];
		$sql= "INSERT INTO banner (idbn,hinh) VALUES (NULL,'$hinh')";
		if(mysql_query($sql))
		{
			$thongbao= "Đã thêm dữ liệu";
		}
		else
		{
			$thongbao= "Thêm thất bại";
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script src="ckeditor/ckeditor.js"></script>
	<script src="ckfinder/ckfinder.js"></script>
<script type="text/javascript">
	function BrowseServer( startupPath, functionData ){
			var finder = new CKFinder();
			finder.basePath = 'ckfinder/'; //Đường path nơi đặt ckfinder
			finder.startupPath = startupPath; //Đường path hiện sẵn cho user chọn file
			finder.selectActionFunction = SetFileField; // hàm sẽ được gọi khi 1 file được chọn
			finder.selectActionData = functionData; //id của text field cần hiện địa chỉ hình
			finder.selectThumbnailActionFunction = ShowThumbnails; //hàm sẽ được gọi khi 1 file thumnail được chọn
			finder.popup(); // Bật cửa sổ CKFinder
		} //BrowseServer	
		function SetFileField( fileUrl, data ){
			document.getElementById( data["selectActionData"] ).value = fileUrl;			
		}
		function ShowThumbnails( fileUrl, data ){
			var sFileName = this.getSelectedFile().name; // this = CKFinderAPI
			document.getElementById( 'thumbnails' ).innerHTML +=
			'<div class="thumb">' +
			'<img src="' + fileUrl + '" />' +
			'<div class="caption">' +
			'<a href="' + data["fileUrl"] + '" target="_blank">' + sFileName + '</a> (' + data["fileSize"] + 'KB)' +
			'</div>' +
			'</div>';
			document.getElementById( 'preview' ).style.display = "";
			return false; // nếu là true thì ckfinder sẽ tự đóng lại khi 1 file thumnail được chọn

		}
</script>

</head>
<body>

<div class="container">
	<div class="header">
	TRANG ADMIN
	</div>
	<div class="menu">
	Trang chủ | <a href="quantri_banner.php">Quản trị banner</a>
	</div>
	<div class="content">
	<p style="background-color:green;color:white"><?php echo $thongbao ?></p>
	<form action="" method="post">
		
		<table>
		<tr>
			<td>Hình</td>
			<td><input type="text" id="hinh" name="hinh"/><input onclick="BrowseServer('hinhanh:/','hinh')"  type="button" name="btnChonFile" id="btnChonFile" value="Chọn File" /></td>
			
		</tr>				
		<tr>
			<td colspan="2">
				<input type="submit" name="btn_Them" value="Thêm">
			</td>			
		</tr>
	</table>

	</form>


	</div>
</div>



</body>
</html>