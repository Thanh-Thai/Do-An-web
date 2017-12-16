<?php
session_start();
include "dbcon.php";

$id = $_GET[ 'id' ];
$sql = "SELECT
*
FROM
tblnews INNER JOIN tblnewsimg ON nID=tblnewsimg.idNimg
WHERE
nID =$id";
$kq = mysqli_query( $conn, $sql );
$row = mysqli_fetch_assoc( $kq );

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
                <p class="w3-left">Tin Tức</p>
            </a>
<?php include("header_sc.php") ?>
        <!-- Image header -->
<div class="w3-container w3-mobile w3-margin-bottom" >
          <div class="w3-container w3-text-grey w3-xxlarge">
            <p><?php echo $row["nTitle"] ?></p>
        </div>
        <div class="w3-container">
        <span><?php echo $row["nDate"] ?></span>
        </div>
        <div class="w3-container w3-text-dark-grey">
                    <h3><?php echo $row["nContent"] ?></h3>
        </div>
        <div class="w3-content w3-display-container w3-mobile">
            <img class="w3-round w3-image w3-grayscale-min" src="<?php echo $row["nImg"] ?>" alt="Xe" style="width:100%; height: 720px">
        </div>
       </div>
         
        <!-- Product grid -->
        <div class="w3-row w3-margin-bottom">
               <span><?php echo $row["nDcontent"] ?></span>

        </div>
        <div class="w3-container w3-margin-bottom">
            <div class="w3-content w3-display-container w3-mobile w3-margin-bottom">
                <img class="w3-round w3-image w3-grayscale-min" src="<?php echo $row["img1"] ?>" alt="Xe" style="width:100%; height: 720px">
            </div>
<!--
            <div class="w3-content w3-display-container w3-mobile">
                <img class="w3-round w3-image w3-grayscale-min" src="<?php echo $row["img2"] ?>" alt="Xe" style="width:100%; height: 720px">
            </div>
-->
        </div>
        <!-- Subscribe section -->
   <?php include("footer.php"); ?>