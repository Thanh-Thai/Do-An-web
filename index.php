<?php

include "dbcon.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>AUTOMOBILE</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link href="cars-website-template.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" href="Media/images/wwwicon.jpg">
</head>

<body>
    <div id="border">
        <div id="left10">
            <img class="Logoimg" src="Media/img/Logo.png"/>
            <div class="name">Auto waymo</div>
        </div>
        <div id="car"></div>
        <div id="links-bg">
            <div class="toplinks"><a href="index.php">Trang Chủ</a>
            </div>
            <div class="toplinks"><a href="products.php">Sản Phẩm</a>
            </div>
            <div class="toplinks"><a href="#">Tin Tức</a>
            </div>
            <div class="toplinks"><a href="#">Dịch Vụ</a>
            </div>
            <div class="toplinks"><a href="#">Liên Hệ</a>
            </div>
        </div>
    </div>

    <div id="mainarea">
        <div id="headingbg">TẤT CẢ VÌ SỰ HÀI LÒNG CỦA BẠN
            <div class="form_submit search_box fr">
                <div class="input_bar">
                    <input name="txtsearch" id="txtsearch" alt="Search" class="inputSearch" value="Tìm kiếm" onblur="if(this.value=='') this.value='Tìm kiếm';" onfocus="if(this.value=='Tìm kiếm') this.value='';" type="text">
                </div>
                <div class="search_icon_wrapper">
                    <input name="btnSearch" value="" id="btnSearch" class="submitSearch" type="submit">
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>

    </div>
    <div id="container">
        <div class="headingbg2"></div>
        <div class="title" width="10px">Sản Phẩm Nổi Bật</div>

        <div id="main">
            <div id="Content_Con">
                <?php 
			$sql = "SELECT	tblproducts.pID,	tblproducts.pName, tblproducts.pDescript,	tblproducts.pImg, cateID, pView	FROM tblproducts WHERE pView>10"	;
			$kq = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($kq))
			{
				?>
                <div class="Pro_Con">
                    <div class="PImg">
                        <img class='roundcornerimg' src="<?php echo  $row["pImg"]?>"/>
                    </div>
                    <div class="desc-Con">
                        <div class="PName">
                            <?php echo $row["pName"]; ?>
                        </div>

                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
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
    <div class="headingbg3"></div>
    <div class="last">
        <div class="box container_sec">
            <ul>
                <li class="one-third column">
                    <div class="cate_li box_content">
                        <h3 class="box_Tab_index">Tin Tức</h3>
                        <ul id="news_index">
                            <?php
                            $sql_news = "SELECT	nID, nTitle, nContent,	nImg, nView	FROM tblnews";
                            $kq_news = mysqli_query( $conn, $sql_news );
                            while ( $row_news = mysqli_fetch_assoc( $kq_news ) ) {
                                ?>
                            <li>
                                <a href="#"> 
                                <img class="img_general" src="<?php echo  $row_news["nImg"]?>" alt="<?php echo  $row_news["nTitle"]?>" width="75" height="50"/>
                            </a>
                            



                                <h2 class="news_Title"> 
                                <a href="/tin-tuc/honda-viet-nam-chinh-thuc-gioi-thieu-odyssey-2017-moi-tron-tien-nghi-xung-dang-cap.aspx"> <?php echo  $row_news["nTitle"]?></a>
                            </h2>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </li>
                <li class="one-third column">
                    <div class="cate_li box_content">
                        <h3 class="box_Tab_index">Dịch vụ</h3>
                        <ul id="services">
                            <li><a href="baoduong.php"><span class="service s01"></span>
            <h4> Bão dưỡng định kỳ</h4>
            </a>
                            </li>
                            <li><a href="baohiem.php"><span class="service s02"></span>
            <h4> Bảo hiểm</h4>
            </a>
                            </li>
                            <li><a href="suachuatq.php"><span class="service s03"></span>
            <h4> Sửa chữa tổng quát</h4>
            </a>
                            </li>
                            <li><a href="baohanh.php"><span class="service s04"></span>
            <h4> Gia hạn bảo hành</h4>
            </a>
                            </li>
                            <li><a href="suachuathan.php"><span class="service s05"></span>
            <h4> Sửa chữa thân vỏ</h4>
            </a>
                            </li>
                            <li><a href="chámocxe.php"><span class="service s06"></span>
            <h4> Chăm sóc xe</h4>
            </a>
                            </li>
                            <li><a href="phutungphukien.php"><span class="service s07"></span>
            <h4> Phụ tùng - Phụ kiện</h4>
            </a>
                            </li>
                            <li><a href="dichvu.php"><span class="service s08"></span>
            <h4> Đặt hẹn dịch vụ</h4>
            </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="one-third column">
                    <div class="cate_li box_content">
                        <h3 class="box_Tab_index">Video</h3>
                        <div class="hot_video">
                            <p>
                                <div class="youtubevideowrap">
                                    <div class="videoWrapper">
                                        <a src="https://www.youtube.com/embed/Yx45AXkSQQg" width="480" height="270"></a>
                                    </div>
                                </div>
                            </p>
                        </div>
                    </div>

                </li>
            </ul>
        </div>
    </div>
    <footer>
        <div class="box">
            <div class="ten columns info_footer">
                <p style="float: left;"><span style="font-family: arial, helvetica, sans-serif; font-size: small;"><strong>&nbsp;</strong></span>
                </p>
                <table style="height: 116px; width: 692px;" border="0">
                    <tbody>
                        <tr>
                            <td>
                                <p><span class="jazin-content" style="font-size: small; font-family: arial, helvetica, sans-serif;"><strong>TH&Ocirc;NG TIN CHỦ SỞ HỮU WEBSITE</strong></span>
                                </p>
                                <p><span class="jazin-content" style="color: #00ff00; font-size: small; font-family: arial, helvetica, sans-serif;"><strong>CÔNG TY CỔ PHẦN Ô TÔ WAYMO</strong></span>
                                </p>
                                <p><span class="jazin-content" style="font-size: small; font-family: arial, helvetica, sans-serif;">Địa chỉ: 180 Cao Lỗ, Phường 4, TP HCM</span>
                                </p>
                                <p><span class="jazin-content" style="font-size: small; font-family: arial, helvetica, sans-serif;">Người đại diện: <span style="color: #00ff00;"><strong>Thái Kim Thanh</strong></span></span>
                                </p>
                                <p><span class="jazin-content" style="font-size: small; font-family: arial, helvetica, sans-serif;">Giấy CNĐKDN: 0304178450&ndash; Ngày cấp 24/09/2017,</span>
                                </p>
                                <p><span class="jazin-content" style="font-size: small; font-family: arial, helvetica, sans-serif;"> thay đổi đăng kí; lần 1 ngày 01/11/2017; Nơi cấp: Tp. Hồ Chí Minh</span>
                                </p>
                                <p><span class="jazin-content" style="font-size: small; font-family: arial, helvetica, sans-serif;">Website:&nbsp;<span style="color: #0000ff;"><a href="http://www.thanhsps.gq"><span style="color: #0000ff;"><strong>www.thanhsps.gq</strong></span>
                                    </a>
                                    </span>
                                    </span>
                                </p>
                                <p><span class="jazin-content" style="font-size: small; font-family: arial, helvetica, sans-serif;"><em>HOTLINE: <span style="color: #ffff00;">(028)</span>.<span style="color: #ffff00;">38.66 22222</span>
                                    </em>
                                    </span>
                                </p>
                                <p><span class="jazin-content" style="font-size: small; font-family: arial, helvetica, sans-serif;"><em> <strong>Dịch vụ</strong>:&nbsp;</em><span style="color: #ffff00;"><strong>0907.815.888</strong>&nbsp;</span><em><strong>Sales</strong>:&nbsp;</em><span style="color: #ffff00;"><strong>0122.26.92.888</strong></span></span>
                                </p>
                                <p><span class="jazin-content" style="font-size: small; font-family: arial, helvetica, sans-serif;">Email: <span style="color: #0000ff;">guugomeo</span><span style="color: #3366ff;"><span style="color: #0000ff;">@gmail.com</span></span>
                                    </span>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div style="float: left; margin-left: 140px;"><address><span style="font-size: small; font-family: arial,helvetica,sans-serif;"><span style="color: #ffff00;"><br /><br /></span></span></address>
                </div>
            </div>
            <div class="six columns footer_r">
                <div class="clearfix"></div>
                <div class="clearfix"></div>
                <div class="clearfix"></div>
                <div class="copyright">Copyright © 2017 by <strong>Honda Ô tô WAYMO</strong>
                    <br/>
                    <br/>
                    <a href="#">
        <img src="Media/img/dathongbao.png" alt="Thông Báo Bộ Công Thương" width="151" height="58" class="auto-style1" /></a>
                    <br/>
                </div>
            </div>
        </div>
    </footer>
</body>
</html
<?php
$page="index";
include "admin/vstcount.php";
?>