<?php

include "dbcon.php";

?>
<?php include("header_main.php") ?>
<a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-left-align" id="myBtn">Sản Phẩm
   <i class="fa fa-caret-down"></i></a>
            <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium w3-animate-right">
                <a href="product_cars.php" class="w3-bar-item w3-button">Xe Hơi</a>
                <a href="product_SUV.php" class="w3-bar-item w3-button">Xe SUV</a>
                <a href="product_sport.php" class="w3-bar-item w3-button">Xe Thể Thao</a>
            </div>
<?php include("sub_nav.php") ?>
    <!-- Top menu on small screens -->
   <?php include("header_1.php") ?>
            <a href="#">
                <p class="w3-left">About Us</p>
            </a>
      <?php include("header_sc.php") ?>
        <!-- Image header -->
       <div class="w3-content w3-display-container">
            
        </div>

    <div class="w3-container w3-text-grey w3-xlarge"> <p> Về Chúng Tôi </p> </div>
        <!-- Product grid -->
        <div class="w3-row w3-grayscale">
        
        </div>
         <div class="w3-row w3-grayscale">
            
        </div>
        <!-- Subscribe section -->
   <?php include("footer.php"); ?>