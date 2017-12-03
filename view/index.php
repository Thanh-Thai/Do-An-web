<?php
include "dbcon.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Cars Website</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link href="cars-website-template.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div id="border">
        <div id="left10">
            <div class="name">Auto Thanh Thai</div>
            <div class="tag">For A Road Ahead</div>
        </div>
        <div id="car"></div>
        <div id="links-bg">
            <div class="toplinks"><a href="https://www.thanhsps.gq/DoAn/index.php">Trang Chủ</a>
            </div>
            <div class="toplinks"><a href="#">Sản Phẩm</a>
            </div>
            <div class="toplinks"><a href="#">Tin Tức</a>
            </div>
            <div class="toplinks"><a href="#">Dịch Vụ</a>
            </div>
            <div class="toplinks"><a href="#">Liên Hệ</a>
            </div>
        </div>
        <div id="mainarea">
            <div id="headingbg">All cars Around the world
                
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="headingbg2"></div>
    <div id="main">
        
            <div class="title" width="10px">Top Cars</div>
            <?php 
			$sql = "SELECT	tblproducts.pID,	tblproducts.pName, tblproducts.pDescript,	tblproducts.pImg, cID, pView	FROM tblproducts"	;
			$kq = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($kq))
			{
				?>
            <div class="PCon">
                <div class="PImg">
                    <img class='roundcornerimg' width="220px" height="130px" src="<?php echo  $row["pImg"]?>"/>
                </div>
                <div class="desc-Con">
                    <div class="PName">
                    <?php echo  "Name: ".$row["pName"]; ?>
                    </div>
                    <div class="PDesc">
                    <?php echo  "Descript: ".$row["pDescript"] ?>
                     </div> 
                    <div class="PView">
                    <?php echo  "View: ".$row["pView"] ?>
                     </div>
                 </div>
            </div>
        
                <?php
                }
                ?>
        </div>
      <div id="right">
                <div id="quick_heading">Quick Links</div>
                <div class="quicklinks"><a href="#">Xe nổi bật</a>
                </div>
                <div class="quicklinks"><a href="#">Xe bán chạy</a>
                </div>
                <div class="quicklinks"><a href="#">Chính sách bảo hành</a>
                </div>
                <div class="quicklinks"><a href="#">Tin tức mới</a>
                </div>
            </div>
        <footer>
            <div id="bottom">
                <div class="bottomlink"><a href="https://www.thanhsps.gq/DoAn/index.php">Trang Chủ</a>
                </div>
                <div class="sap">|</div>
                <div class="bottomlink"><a href="#">Sản Phẩm </a>
                </div>
                <div class="sap">|</div>
                <div class="bottomlink"><a href="#">Dịch Vụ</a>
                </div>
                <div class="sap">|</div>
                <div class="bottomlink"><a href="#">About Us</a>
                </div>
                <div class="sap">|</div>
                <div class="bottomlink"><a href="#">Liên Hệ</a>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>