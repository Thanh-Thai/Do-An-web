<?php

include "dbcon.php";

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
                <p class="w3-left">About Us</p>
            </a>
      <?php include("header_sc.php") ?>
        <!-- Image header -->
       <div class="w3-content w3-display-container">
            
        </div>

    <div class="w3-container w3-text-grey w3-xlarge"> <p> Về Chúng Tôi </p> </div>
        <!-- Product grid -->
        <div class="w3-row w3-grayscale">
        <p>Chính thức đi vào hoạt động vào ngày 20/11/2017 với vai trò là nhà phân phối chính thức của các thương hiệu ô tô lừng danh thế giới.</p> 
        <div class="w3-image w3-content"><img src="Media/images/showroom-oto.jpg" style="width: 100%" /></div>
        <p><b>Công ty Oto Waymo</b> Cũng giống như các nhà phân phối ô tô khác trên thế giới, chúng tôi đã xây dựng và trang bị đầy đủ các trang thiết bị tiên tiên, hiện đại phù hợp với những yêu cầu và tiêu chuẩn của toàn cầu. Khi đến với chúng tôi, Quý khách hàng sẽ cảm nhận được sự khác biệt rõ ràng so với các thương hiệu ô tô khác và hoàn toàn hài lòng với các dịch vụ đạt tiêu chuẩn. Đặc biệt chúng tôi có dịch vụ hỗ trợ tài chính thông qua hệ thống ngân hàng và công ty cho thuê tài chính. </p>
            <p>Với những chiến lược đầu tư và kinh doanh đúng đắn, chúng tôi tự hào được đánh giá là một trong các nhà phân phối uy tín với đội ngũ nhân viên, kỹ thuât viên tận tâm giàu nhiệt huyết đã được huấn luyện bởi các chuyên gia hàng đầu của HVN. chúng tôi cam kết phục vụ theo phong cách chuyên nghiệp nhằm mang đến cho quý khách hàng các dịch vụ tốt nhất trên cả sự mong đợi.</p>
        <p>Hân hạnh được đón tiếp quý khách hàng.</p>
        </div>
         <div class="w3-row w3-grayscale">
            
        </div>
        <!-- Subscribe section -->
   <?php include("footer.php"); ?>