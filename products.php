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
        <div id="rightp">
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
        <div class="headingbg2"></div>

        <div class="title" width="10px">Sản Phẩm</div>

        <div id="pmenu">
            <div class="menu_item"><a href="#spcars">Xe Thể Thao</a>
            </div>
            <div class="menu_item"><a href="#suv">Xe SUV</a>
            </div>
            <div class="menu_item"><a href="#Comcars">Xe Hơi</a>
            </div>
            <div class="menu_item"><a href="#pkcar">Xe Bán Tải</a>
            </div>
            <div class="menu_item"><a href="#mpvcar">Xe Đa Dụng</a>
            </div>
        </div>
        <div class="headingbg2"></div>

        <div id="main">
            <div id="Content_Con">
                <div class="P_Con_sec">            
                    <div class="ptitle" id="Comcars">
                        <span>Xe Hơi</span>
                    </div>
                    <?php
                    $sql = "SELECT
                    tblproducts.pID,
                    tblproducts.pName,
                    tblproducts.mafacID,
                    tblproducts.pImg,
                    tblmf.mfName
                    FROM
                    tblproducts
                    INNER JOIN tblmf ON tblproducts.mafacID = tblmf.mfID
                    WHERE
                    tblproducts.cateID = 3 AND
                    tblmf.mfID = tblproducts.mafacID";
                    $kq = mysqli_query( $conn, $sql );
                    while ( $row = mysqli_fetch_assoc( $kq ) ) {
                        ?>
                        <div class="PContainer">
                            <img class="roundcornerimg1" src="<?php echo $row["pImg"]?>"/>
                            <div class="pinfo">
                                <div>Tên: <?php echo $row["mfName"];?> <?php echo $row["pName"];?></div>
                                <div>Hãng sản xuất: <?php echo $row["mfName"];?></div>
                            </div>
                        </div>
                        <?php 
                    }
                    ?>

                </div>
                <div class="P_Con_sec">
                    <div class="ptitle" id="pkcar">
                        <span>Xe Bán Tải</span>
                    </div>
                </div>
                <div class="P_Con_sec">
                    <div class="ptitle" id="spcars">
                        <span>Xe Thể Thao</span>
                    </div>
                    <?php
                    $sql = "SELECT
                    tblproducts.pID,
                    tblproducts.pName,
                    tblproducts.mafacID,
                    tblproducts.pImg,
                    tblmf.mfName
                    FROM
                    tblproducts
                    INNER JOIN tblmf ON tblproducts.mafacID = tblmf.mfID
                    WHERE
                    tblproducts.cateID = 2 AND
                    tblmf.mfID = tblproducts.mafacID";
                    $kq = mysqli_query( $conn, $sql );
                    while ( $row = mysqli_fetch_assoc( $kq ) ) 
                    {
                        ?>
                        <div class="PContainer">
                            <img class="roundcornerimg1" src="<?php echo $row["pImg"]?>"/>
                            <div class="pinfo">
                                <div>Tên: <?php echo $row["mfName"];?> <?php echo $row["pName"];?></div>
                                <div>Hãng sản xuất: <?php echo $row["mfName"];?></div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    
                </div>
                <div class="P_Con_sec">
                    <div class="ptitle" id="suv">
                        <span>Xe SUV</span>
                    </div>
                        <?php
                    $sql = "SELECT
                    tblproducts.pID,
                    tblproducts.pName,
                    tblproducts.mafacID,
                    tblproducts.pImg,
                    tblmf.mfName
                    FROM
                    tblproducts
                    INNER JOIN tblmf ON tblproducts.mafacID = tblmf.mfID
                    WHERE
                    tblproducts.cateID = 1 AND
                    tblmf.mfID = tblproducts.mafacID";
                    $kq = mysqli_query( $conn, $sql );
                    while ( $row = mysqli_fetch_assoc( $kq ) ) 
                    {
                        ?>
                        <div class="PContainer">
                            <img class="roundcornerimg1" src="<?php echo $row["pImg"]?>"/>
                            <div class="pinfo">
                                <div>Tên: <?php echo $row["mfName"];?> <?php echo $row["pName"];?></div>
                                <div>Hãng sản xuất: <?php echo $row["mfName"];?></div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    
                </div>
                <div class="P_Con_sec">
                    <div class="ptitle" id="mpvcar">
                        <span>Xe Đa Dụng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="headingbg3"></div>
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

</html>