<?php 
include "dbcon.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cars Website</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="cars-website-template.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="border">
  <div id="left10">
    <div class="name">Auto Thanh Thai</div>
    <div class="tag">ÂSASASAS</div>
  </div>
  <div id="car"></div>
  <div id="links-bg">
    <div class="toplinks"><a href="#">Trang Chủ</a></div>
    <div class="toplinks"><a href="#">Sản Phẩm</a></div>
    <div class="toplinks"><a href="#">Tin Tức</a></div>
    <div class="toplinks"><a href="#">Dịch Vụ</a></div>
    <div class="toplinks"><a href="#">Liên Hệ</a></div>
  </div>
  <div id="mainarea">
    <div id="headingbg">All cars Around the world
      <div class="logo-search">
        <div class="search">
          <form method="get" action="timkiem.php">
            <input type="text" name="tukhoa" value="Search Here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Here...';}" required="">
            <input type="submit" value="Tìm kiếm" >
          </form>
        </div>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<div class="headingbg2"></div>
<div style="width: 100%">
  <div id="main">
    <table cellpadding="10" style="width: 100%;margin: auto; text-align: center; " border="0">
		<tr>
			<td style="background-color: #1A1D22  ">Tên Xe</td>
			<td style="background-color: #1A1D22 ">Mô tả</td>
			<td style="background-color: #1A1D22 ">Hình Ảnh</td>
			<td style="background-color: #1A1D22 ">Lượt Xem</td
		</tr>
		<?php 
			$sql = "SELECT	tblproducts.pID,	tblproducts.pName, tblproducts.pDescript,	tblproducts.pImg, cID, pView	FROM tblproducts"	;
			$kq = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($kq))
			{
				?>
				<tr>
					<td><?php echo  $row["pName"]; ?></td>
					<td><?php echo  $row["pDescript"] ?></td>

					<td > <img class='roundcornerimg' width="50%" height="50%" src="<?php echo  $row["pImg"] ?>"/></td>
					<td><?php echo  $row["pView"] ?></td>
					
				</tr>
				<?php
			}
		 ?>
		
		
	</table></div>
  <div id="right">
    <div id="quick_heading">Quick Links</div>
    <div class="quicklinks"><a href="#">Xe nổi bật</a></div>
    <div class="quicklinks"><a href="#">Xe bán chạy</a></div>
    <div class="quicklinks"><a href="#">Chính sách bảo hành</a></div>
    <div class="quicklinks"><a href="#">Tin tức mới</a></div>
  </div>
</div>
<footer>
  <div id="bottom">
    <div class="bottomlink"><a href="#">Trang Chủ</a></div>
    <div class="sap">|</div>
    <div class="bottomlink"><a href="#">Sản Phẩm </a></div>
    <div class="sap">|</div>
    <div class="bottomlink"><a href="#">Dịch Vụ</a></div>
    <div class="sap">|</div>
    <div class="bottomlink"><a href="#">About Us</a></div>
    <div class="sap">|</div>
    <div class="bottomlink"><a href="#">Liên Hệ</a></div>
  </div>
</footer>
</div>
</body>
</html>
