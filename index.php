<?php
session_start();
include "dbcon.php";

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


<!-- <script src="js/javascript.js"></script> -->


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
    width: 0px;  /* remove scrollbar space */
    background: transparent;  /* optional: just make scrollbar invisible */
}
</style>

<body class="w3-content" style="max-width:1200px">

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
      <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">Sản Phẩm
         <i class="fa fa-caret-down"></i>
     </a>
     <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium w3-animate-right">
         <a href="product_cars.php" class="w3-bar-item w3-button">Xe Hơi</a>
         <!--<i class="fa fa-caret-right w3-margin-right"></i>-->

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
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
	<div class="w3-bar-item w3-padding-24 w3-wide">WAYMO AUTO</div>
	<div>
	</div>
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
		<a href="index.php"><p class="w3-left">Trang Chủ</p></a>
		<p class="w3-right w3-light-grey">
			<a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding link-thanhtoan" onclick="document.getElementById('shopcart').style.display='block'"><i class="fa fa-shopping-cart w3-margin-right"></i>
                <span class="giohang_count w3-medium"> 0 </span><b class="w3-small"> Sản phẩm.</b> <br />
                <b class="w3-small">Tổng số tiền : </b><span class="giohang_money">0</span> VNĐ
            </a>

        </p>
    </header>
    <div class="w3-container w3-white w3-bar w3-black w3-margin-bottom" style="height: 2px"></div>
    <!-- Image header -->
    <div class="w3-content w3-display-container w3-margin-bottom">
       <?php 
       $sql = "SELECT tblproducts.pID,tblproducts.pImg,tblproducts.pNew,img_main FROM tblproducts INNER JOIN tblmf ON tblproducts.mafacID = tblmf.mfID
       INNER JOIN tblimg ON tblproducts.pImg = tblimg.iID WHERE pNew=1"	;
       $kq = mysqli_query($conn,$sql);
       while($row = mysqli_fetch_assoc($kq))
       {
        ?>
        <img class="mySlides w3-animate-fading w3-round w3-image" src="<?php echo $row["img_main"] ?>" alt="Xe" style="width:100%; height: 430px">
        <?php 
    }
    ?>

<!--        
        <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
    -->
    <div class="w3-display-topleft w3-text-light-gray" style="padding:24px 48px">
    	<h1 class="w3-jumbo w3-hide-small ">Sản Phẩm Mới</h1>
    	<h1 class="w3-hide-large w3-hide-medium">Sản Phẩm Mới</h1>
    	<h1 class="w3-hide-small">2016</h1>
    	<!--                <p><a href="#jeans" class="w3-button w3-black w3-padding-large w3-large">SHOP NOW</p></a>-->
    </div>
</div>

<div class="w3-container w3-white w3-bar w3-black w3-margin-bottom w3-mobile"> <p> Sản Phẩm Nổi Bật </p> </div>
<!-- Product grid -->
<div class="w3-row w3-grayscale w3-margin-bottom">

	<?php 
	$sql = "SELECT
	tblproducts.pID,
	tblproducts.pName,
	tblproducts.pPrice,
	tblproducts.mafacID,
	tblmf.mfName,
	tblproducts.pImg,
	cateID, pView,img_main 
	FROM tblproducts
    INNER JOIN tblmf ON tblproducts.mafacID = tblmf.mfID
    INNER JOIN tblimg ON tblproducts.pImg = tblimg.iID 
    WHERE pView>40
    LIMIT 4"	;
    $kq = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($kq))
    {
      ?>
      <div class="w3-col l3 s6">
       <div class="w3-container">
        <img class="w3-image w3-round-medium" src="<?php echo  $row["img_main"]?>" style="width:100%; height: 140px">
         <b class="pro_id" hidden="true"><?php echo $row["pID"] ?></b>
        <b class="pro_title" hidden="true"><?php echo $row["mfName"];?> <?php echo $row["pName"]; ?></b>
        <b class="pro_money" hidden="true"> <?php echo $row["pPrice"] ?></b>
        <p class="w3-center" style="width: 105%"><?php echo $row["mfName"];?> <?php echo $row["pName"]; ?><br><b><?php echo number_format($row["pPrice"]);$row["pPrice"]; ?>  VNĐ</b>
        </p>
        <button class="w3-button w3-round w3-black w3-margin-bottom">
             <a style="text-decoration: none" href="detail.php?id=<?php echo $row["pID"]; ?>">Xem chi tiết</a>
         </button>
         <button class="w3-button w3-round w3-light-grey w3 pro_cart">
            <a style="text-decoration: none" href="#">Đặt Mua</a>
        </button>
    </div>
</div>
<?php
}
?>
</div>
<div class="w3-container w3-white w3-bar w3-dark-grey w3-margin-bottom"> <p> Sản Phẩm Giảm Giá </p> </div>
<div class="w3-row w3-grayscale w3-margin-bottom">

    <?php 
    $sql = "SELECT
    tblproducts.pID,
    tblproducts.pName,
    tblproducts.pDescript,
    tblproducts.pPrice,
    tblproducts.mafacID,
    tblmf.mfName,
    tblproducts.pImg,
    cateID, pView, pSale,img_main
    FROM tblproducts 
    INNER JOIN tblmf ON tblproducts.mafacID = tblmf.mfID
    INNER JOIN tblimg ON tblproducts.pImg = tblimg.iID 
    WHERE pSale=1"	;
    $kq = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($kq))
    {
      ?>
      <div class="w3-col l3 s6">
        <div class="w3-container">
            <img class="w3-image w3-round-medium" src="<?php echo  $row["img_main"]?>" style="width:100%; height: 140px">
            <b class="pro_id" hidden="true"><?php echo $row["pID"] ?></b>
            <b class="pro_title" hidden="true"><?php echo $row["pName"] ?></b>
            <b class="pro_money" hidden="true"> <?php echo $row["pPrice"] ?></b>
            <b class="w3-center " style="width: 105%;"><?php echo $row["mfName"];?> <?php echo $row["pName"]; ?></b></br>
            <b class="w3-center" style="color: rgb(255,0,0);"><?php echo number_format($row["pPrice"]) ?>
            </b> 
            <b> VNĐ</b>
            <button class="w3-button w3-round w3-black w3-margin-bottom">
             <a style="text-decoration: none" href="detail.php?id=<?php echo $row["pID"]; ?>">Xem chi tiết</a>
         </button>
         <button class="w3-button w3-round w3-light-grey w3 pro_cart">
            <a style="text-decoration: none" href="#">Đặt Mua</a>
        </button>
    </div>
</div>
<?php
}
?>
</div>
<div class="w3-container w3-white w3-bar w3-black w3-margin-bottom"> <p> Tất Cả Sản Phẩm </p> </div>
<div class="w3-row w3-grayscale w3-margin-bottom"> 
    <?php 
    $sql = "SELECT
    tblproducts.pID,
    tblproducts.pName,
    tblproducts.pPrice,
    tblproducts.mafacID,
    tblmf.mfName,
    tblproducts.pImg,
    cateID, pView, pSale,img_main
    FROM tblproducts 
    INNER JOIN tblmf ON tblproducts.mafacID = tblmf.mfID
    INNER JOIN tblimg ON tblproducts.pImg = tblimg.iID"  ;
    $kq = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($kq))
    {
        ?>
        <div class="w3-col l3 s6" style="width: 25%; margin-bottom: 20px">
            <div class="w3-container">
                <img class="w3-image w3-round-medium" src="<?php echo  $row["img_main"]?>" style="width:100%; height: 140px">
                <p class="w3-center"><?php echo $row["pName"]; ?><br><b><?php echo number_format($row["pPrice"]);$row["pPrice"]; ?> VNĐ</b>
                </p>
                <button class="w3-button w3-round w3-black w3">
                    <a style="text-decoration: none" href="detail.php?id=<?php echo  $row["pID"]; ?>">Xem chi tiết</a>
                </button>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<!-- Subscribe section -->
<div class="w3-container w3-dark-grey w3-padding-32">
    <h1>Subscribe</h1>
    <p>To get special offers and VIP treatment:</p>
    <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%">
    </p>
    <button type="button" class="w3-button w3-red w3-margin-bottom">Subscribe</button>
</div>

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
            <div class="w3-container">
                <div class="shopping-cart">
                 <div class="modal-body">
                    <div class="ds_giohang">
                        Không có sản phẩm nào
                    </div>
                </div>
                <button class="w3-left w3-button btn-xoadon">Làm Rỗng giỏ hàng</button>
            </div>
        </div>
        <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom btn-thanhtoan" onclick="document.getElementById('shopcart').style.display='none'">Thanh Toán</button>
    </div>
</div>
</div>


<script src="js/javascript.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/function.js"></script>

</body>
</html>
<?php
$page="index";
include "admin/vstcount.php";
?>