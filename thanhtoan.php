<?php

include "dbcon.php";
if (isset( $_POST["proID"] ) ) {
//    header( "Location: index.php" ); /* Redirect browser */
//    exit();
//} else
    
}
?>
<!DOCTYPE html>
<html>
<title>WAYMO AUTO</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<style>
    .w3-sidebar a {
        font-family: "Roboto", sans-serif
    }
    
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .w3-wide {
        font-family: "Montserrat", sans-serif;
    }
    
    ::-webkit-scrollbar {
        width: 0px;
        /* remove scrollbar space */
        background: transparent;
        /* optional: just make scrollbar invisible */
    }

.mySlides1 {display:none}
.demo {cursor:pointer}
</style>

<body class="w3-content" style="max-width:1200px" >



    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
         <div class="w3-container w3-display-container w3-padding-16">
            <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
            <h3 class="w3-wide" style="letter-spacing: 1px "><b>WAYMO AUTO</b>
                   <div class="w3-round" style="margin-left: -15px"><img src="Media/img/Logo.png" width="100%" /></div>
               </h3>
        </div>
        <div class="w3-large w3-text-grey" style="font-weight:bold">
            <a href="index.php" class="w3-bar-item w3-button">Trang Chủ</a>
            <a href="about.php" class="w3-bar-item w3-button">Giới Thiệu</a>
            <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-left-align" id="myBtn">Sản Phẩm
            <i class="fa fa-caret-down"></i>
            </a>
            <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium w3-animate-right">
                <a href="product_cars.php" class="w3-bar-item w3-button">Xe Hơi</a>
                <a href="product_SUV.php" class="w3-bar-item w3-button">Xe SUV</a>
                <a href="product_sport.php" class="w3-bar-item w3-button">Xe Thể Thao</a>
            </div>
            <a href="#" class="w3-bar-item w3-button">Tin Tức</a>
            <a href="#" class="w3-bar-item w3-button">Dịch Vụ</a>

        </div>
        <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a>
        <a href="#footer" class="w3-bar-item w3-button w3-padding">Subscribe</a>
    </nav>

    <!-- Top menu on small screens -->
    <header class="w3-bar w3-hide-large w3-black w3-large">
        <div class="w3-bar-item w3-padding-24 w3-wide">WAYMO AUTO</div>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    </header>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:250px">

        <!-- Push down content on small screens -->
        <div class="w3-hide-large" style="margin-top:83px"></div>

        <!-- Top header -->
        <header class="w3-container w3-xlarge">
            <a href="#">
                <p class="w3-left">Chi Tiết Sản Phẩm</p>
            </a>
           <p class="w3-right w3-light-grey">
             <div class="w3-container w3-right w3-right">
			<a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding w3-left link-thanhtoan" onclick="document.getElementById('shopcart').style.display='block'">
                <i class="fa fa-shopping-cart w3-margin-right w3-left">
                </i>
               
                <span class="giohang_count w3-medium w3-left w3-margin-right"> 0 </span><b class="w3-small w3-left"> Sản phẩm.</b> <br />
               
                <b class="w3-medium">Tổng số tiền : </b><span class="giohang_money">0</span> VNĐ
            </a>
             </div>

        </p>
        </header>
        <div class="w3-container w3-white w3-bar w3-black w3-margin-bottom" style="height: 2px"></div>
        <!-- Image header -->

    <div class="w3-container w3-text-grey" > <p> Mục Thanh Toán</p> 
    </div>
    
        <!-- Product grid -->
        <div class="w3-row w3-margin-bottom">
             <form id="customform" class="w3-margin-bottom w3-grayscale-min" method="post" action="todb.php">
            <div class="w3-margin-bottom ds_hd_it">
               
              <script type="text/javascript" src="js/jquery.min.js"></script>
              <script type="text/javascript" src="js/function.js"></script>
                      <script>HienThiDanhSach_HD()</script>
              </div>
             <div class="w3-container w3-text-grey"> <p> Mục Thông tin khác hàng</p> 
            </div>
             <div class="w3-container w3-white w3-bar w3-black w3-margin-bottom" style="height: 2px"></div>
                <table class="w3-table w3-striped">
                  <tr><td class="w3-centered w3-large">Tên Khách Hàng</td>
                        <td><input class="w3-input" type="text" name="name"/></td>
                  </tr>
                    <tr>
                        <td class="w3-centered w3-large">Email</td>
                        <td><input class="w3-input" type="text" name="email" placeholder="Example@gmail.com"/></td>
                  </tr>
                    <tr>
                        <td class="w3-centered w3-large">Số Điện Thoại</td>
                        <td><input class="w3-input" type="text" name="sdt"/></td>
                  </tr>
                    <tr>

                        <td class="w3-centered w3-large ">Tổng số tiền: </td>
                        <div id="total"class="giohang_money" hidden="true"></div>
                        <td ><input id="totalip" class="w3-input giohang_money" type="text" name="totalprice" value=""/></td>
                    </tr>
                </table>
                   	<input type="submit" class="w3-button w3-round-medium w3-bar w3-green btntt btn-thanhtoan" name="btntt" value="Xác nhận thanh toán" />
            </form>
      
<!--
                    <div id="btnfinal" class="w3-button w3-round-medium w3-bar w3-green btntt">Xác nhận thanh toán</button>
         
-->
           </div>   
        <!-- Subscribe section -->
<!--        btn-thanhtoan
        <div class="w3-container w3-black w3-padding-32">
            <h1>Subscribe</h1>
            <p>To get special offers and VIP treatment:</p>
            <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%">
            </p>
            <button type="button" class="w3-button w3-red w3-margin-bottom">Subscribe</button>
        </div>
-->

        <!-- Footer -->
       <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
      <div class="w3-col s4">
         <h4>Contact</h4>
         <p>Questions? Go ahead.</p>
         <form action="/action_page.php" target="_blank">
            <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required>
            </p>
            <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required>
            </p>
            <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required>
            </p>
            <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required>
            </p>
            <button type="submit" class="w3-button w3-block w3-black">Send</button>
        </form>
    </div>

    <div class="w3-col s4">
     <h4>About</h4>
     <p><a href="#">About us</a>
     </p>
     <p><a href="#">We're hiring</a>
     </p>
     <p><a href="#">Support</a>
     </p>
     <p><a href="#">Find store</a>
     </p>
     <p><a href="#">Shipment</a>
     </p>
     <p><a href="#">Payment</a>
     </p>
     <p><a href="#">Gift card</a>
     </p>
     <p><a href="#">Return</a>
     </p>
     <p><a href="#">Help</a>
     </p>
 </div>

 <div class="w3-col s4 w3-justify">
     <h4>Store</h4>
     <p><i class="fa fa-fw fa-map-marker"></i>Auto WAYMO</p>
     <p><i class="fa fa-fw fa-phone"></i> 01679511787</p>
     <p><i class="fa fa-fw fa-envelope"></i> guugomeo@mail.com</p>
     <h4>We accept</h4>
     <p><i class="fa fa-fw fab fa-bitcoin"></i> BitCoin</p>
     <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
     <br>
     <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
     <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
     <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
     <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
     <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
     <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
 </div>
</div>
 <button onclick="topFunction()" id="myBtntop" title="Go to top">Top</button>
<a href="javascript:void(0)" class="link-thanhtoan" onclick="document.getElementById('shopcart').style.display='block'">
    <div id="myBtncart">
        <i class="fa fa-shopping-cart w3-margin-right w3-left"></i>
        <span class="giohang_count w3-left w3-margin-right"> 0 </span>
    </div>
    </a>
</footer>
        <!-- End page content -->
    </div>

    <!-- Newsletter Modal -->
    <div id="newsletter" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
            <div class="w3-container w3-white w3-center">
                <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
                <h2 class="w3-wide">NEWSLETTER</h2>
                <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
                <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail">
                </p>
                <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Subscribe</button>
            </div>
        </div>
    </div>

    <div id="shopcart" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
        <div class="w3-container w3-white w3-center">
            <i onclick="document.getElementById('shopcart').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
            <h2>Your Shopping Cart</h2>
            <div class="w3-container w3-margin-bottom">
                <div class="shopping-cart w3-margin-bottom">
                   <div class="modal-body">
                    <div class="ds_giohang">
                        Không có sản phẩm nào
                    </div>
                </div>
               
            </div>
             <button class="w3-left w3-button w3-round-xlarge w3-green btn-xoadon">Làm Rỗng giỏ hàng</button>
        </div>
    </div>
</div>
</div>
    
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/function.js"></script>
<script src="js/javascript.js"></script>
<script src="js/gettext.js">
</script>
</body>
</html>