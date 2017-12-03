<?php
include "../dbcon.php";
	
	//Kiem tra co nhat nut hay khong
	if(isset($_POST["btn_Them"]))
	{
		$theloai_id = $_POST["theloai_id"];
		$name = $_POST["name"];
		$hinh = $_POST["hinh"];
		$noidung = $_POST["noidung"];
		$sql= "INSERT INTO 
				news
				(id,name,hinh,noidung,theloai_id)
				VALUES
				(NULL,'$name','$hinh','$noidung','$theloai_id')";
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
	Trang chủ | <a href="quantri_loai.php">Quản trị loại tin</a> | <a href="quantri_tin.php">Quản trị tin</a>
	</div>
	<div class="content">
	<p style="background-color:green;color:white"><?php echo $thongbao ?></p>
	<form action="" method="post">
		
		<table>
		
		<tr>
			<td>
				Nhập Tên Loại
			</td>
			<td>
				<select name="theloai_id">
				<?php 
				$sql="SELECT * FROM theloai";
				$kq=mysql_query($sql);
				while($row=mysql_fetch_assoc($kq)){ ?>
					<option value="<?php echo $row[id];?>"><?php echo $row[name];?></option>
				 <?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Tiêu Đề</td>
			<td><input type="text" name="name"/></td>
		</tr>
		<tr>
			<td>Hình</td>
			<td><input type="text" id="hinh" name="hinh"/><input onclick="BrowseServer('hinhanh:/','hinh')"  type="button" name="btnChonFile" id="btnChonFile" value="Chọn File" /></td>
			
		</tr>
		<tr>
			<td>Nội dung</td>
			<td><textarea name="noidung"></textarea></td>
<script type="text/javascript">
var editor = CKEDITOR.replace( 'noidung',{
  filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?Type=Images',
  filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?Type=Flash',
  filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
  filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
	height: '500px',
  toolbar:[
  { name: 'document', items : [ 'Source','-','Templates' ] },
  { name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
  { name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },
  { name: 'forms', items : [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton',
        'HiddenField' ] },
  '/',
  { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
  { name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv',
  '-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
  { name: 'links', items : [ 'Link','Unlink','Anchor' ] },
  { name: 'insert', items : [ 'Image','MediaEmbed','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe' ] },
  '/',
  { name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
  { name: 'colors', items : [ 'TextColor','BGColor' ] },
  { name: 'tools', items : [ 'Maximize', 'ShowBlocks','-','About' ] }
  ]
});
</script>			
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