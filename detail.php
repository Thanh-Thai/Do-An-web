<?php
session_start();
include "dbcon.php";

$id = $_GET[ 'id' ];
$sql = "SELECT
*
FROM
tblproducts
INNER JOIN tblmf ON tblproducts.mafacID = tblmf.mfID
INNER JOIN tblimg ON tblproducts.pID = tblimg.iID
WHERE
tblproducts.pID =$id";
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
                <p class="w3-left">Chi Tiết Sản Phẩm</p>
            </a>
<?php include("header_sc.php") ?>
        <!-- Image header -->
        <div class="w3-content w3-display-container w3-mobile">
            <img class="w3-round w3-image w3-grayscale-min" src="<?php echo $row["img_main"] ?>" alt="Xe" style="width:100%; height: 70%">
            <div class="w3-display-topleft w3-text-dark-gray" style="padding:24px 48px">
                <h1 class="w3-jumbo w3-hide-small ">
                    <?php echo $row["mfName"] ?>
                    <?php echo $row["pName"] ?>
                </h1>
                <h1 class="w3-hide-large w3-hide-medium">
                    <?php echo $row["mfName"] ?>
                    <?php echo $row["pName"] ?>
                </h1>
                <h1 class="w3-hide-small">
                    <?php echo $row["pYear"] ?>
                </h1>
                </p>
            </div>
        </div>

        <div class="w3-container w3-text-grey">
            <p>Giới thiệu</p>
                <b class="pro_id" hidden="true"><?php echo $row["pID"] ?></b>
            <b class="pro_title" hidden="true"><?php echo $row["pName"] ?></b>
            <b class="pro_money" hidden="true"> <?php echo $row["pPrice"] ?></b>
            <div class="w3-container"><?php echo $row["pDescript"]?></div>
            <button class="w3-button w3-round w3-teal w3 pro_cart w3-block w3-center">
            <a style="text-decoration: none; text-align: center" href="#">Đặt Mua Ngay!</a>
        </button>
        </div>
         
        <!-- Product grid -->
        <div class="w3-row w3-margin-bottom">
            <div class="w3-container w3-text-dark-grey">
                    <h2>Thông Số Cơ Bản</h2>
                </div>
        
            <div class="w3-container w3-margin-bottom">
                <div class="w3-bar w3-gray">
                    <button class="w3-bar-item w3-button tablink w3-black" onclick="openCity(event,'main')">Thông Số Chính</button>
                    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'engine')">Thông Số Phụ</button>
                    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'diss')">Quy Cách</button>
                </div>

                <div id="main" class="w3-container w3-border product">
                    <div class="w3-row">
                        <table class="w3-table w3-striped w3-responsive ">
                            <tr>
                                <td style="padding-right: 310px">Động cơ: </td>
                                <td class="w3-right-align">
                                    <?php echo $row["pEngine"]?>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-right: 310px">Hộp số: </td>
                                <td class="w3-right-align">
                                    <?php echo $row["pTranmiss"]?>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-right: 310px">Thắng Trước: </td>
                                <td class="w3-right-align">
                                    <?php echo $row["pFbrakes"]?>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-right: 310px">Thắng Sau: </td>
                                <td class="w3-right-align">
                                    <?php echo $row["pRbrakes"]?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div id="engine" class="w3-container w3-border product" style="display:none">
                    <div class="w3-row">
                        <table class="w3-table w3-striped w3-responsive ">
                            <tr>
                                <td style="padding-right: 310px">Động cơ: </td>
                                <td class="w3-right-align">
                                    <?php echo $row["pEngine"]?>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-right: 310px">Trọng Lượng: </td>
                                <td class="w3-right-align">
                                    <?php echo number_format($row["pWeight"]) ?> Kg</td>
                            </tr>
                        </table>
                    </div>

                </div>

                <div id="diss" class="w3-container w3-border product" style="display:none">
                    <div class="w3-row">
                        <table class="w3-table w3-striped w3-responsive ">
                            <tr>
                                <td style="padding-right: 310px">Chiều Dài: </td>
                                <td class="w3-right-align">
                                    <?php echo number_format($row["pX"])?> mm</td>
                            </tr>
                            <tr>
                                <td style="padding-right: 310px">Chiều Rộng: </td>
                                <td class="w3-right-align">
                                    <?php echo number_format($row["pY"])?> mm</td>
                            </tr>
                            <tr>
                                <td style="padding-right: 310px">Chiều Cao: </td>
                                <td class="w3-right-align">
                                    <?php echo number_format($row["pZ"])?> mm</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="w3-container">
                    <h2>Hình Ảnh</h2>
                 <div class="w3-content w3-display-container" style=" max-width:900px">
                              <img class="mySlides1 w3-image w3-round w3-animate-opacity" src="<?php echo $row["img_main"] ?>" style="width:100%; height: 500px; display: block">
                              <img class="mySlides1 w3-image w3-round w3-animate-opacity" src="<?php echo $row["img1"]?>" style="width:100%; height: 500px; display: none">
                              <img class="mySlides1 w3-image w3-round w3-animate-opacity" src="<?php echo $row["img1"]?>" style="width:100%; height: 500px; display: none">
                          
                     <div class="w3-row-padding w3-section">
                    <div class="w3-col s4">
                      <img class="demo w3-opacity" src="<?php echo $row["img_main"]?>" style="width:100%; height:160px" onclick="currentDiv(1)">
                    </div>
                    <div class="w3-col s4">
                      <img class="demo w3-opacity" src="<?php echo $row["img1"]?>" style="width:100%; height:160px" onclick="currentDiv(2)">
                    </div>
                    <div class="w3-col s4">
                      <img class="demo w3-opacity" src="<?php echo $row["img2"]?>" style="width:100%; height:160px" onclick="currentDiv(3)">
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <!-- Subscribe section -->
   <?php include("footer.php"); ?>