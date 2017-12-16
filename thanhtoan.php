<?php

include "dbcon.php";

//if (isset( $_POST["proID"] ) ) { } 
?>

<?php include("header_main.php") ?>
            <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-left-align" id="myBtn">Sản Phẩm
            <i class="fa fa-caret-down"></i>
            </a>
            <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium w3-animate-right">
                <a href="product_cars.php" class="w3-bar-item w3-button">Xe Hơi</a>
                <a href="product_SUV.php" class="w3-bar-item w3-button">Xe SUV</a>
                <a href="product_sport.php" class="w3-bar-item w3-button">Xe Thể Thao</a>
            </div>
<?php include("sub_nav.php") ?>

    <!-- Top menu on small screens -->
 <?php include("header_1.php") ?>
            <a href="#">
                <p class="w3-left">Chi Tiết Đơn Hàng</p>
            </a>
 <?php include("header_sc.php") ?>
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
                        <td><input class="w3-input" type="email" name="email" placeholder="Example@gmail.com"/></td>
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
           </div>   
<script src="js/gettext.js"></script>
<?php include("footer.php"); ?>

