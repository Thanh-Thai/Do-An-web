<?php
session_start();
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
		<a href="index.php"><p class="w3-left">Trang Chủ</p></a>
<?php include("header_sc.php") ?>	
    <!-- Image header -->
    <div class="w3-content w3-display-container w3-margin-bottom">
     <?php 
     $sql = "SELECT tblproducts.pID,tblproducts.pNew,img_main FROM tblproducts INNER JOIN tblmf ON tblproducts.mafacID = tblmf.mfID
     INNER JOIN tblimg ON tblproducts.pID = tblimg.iID WHERE pNew=1"	;
     $kq = mysqli_query($conn,$sql);
     while($row = mysqli_fetch_assoc($kq))
     {
        ?>
        <img class="mySlides w3-animate-fading w3-round w3-image w3-grayscale-min" src="<?php echo $row["img_main"] ?>" alt="Xe" style="width:100%; height: 50%">
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
<div class="w3-row w3-margin-bottom">

	<?php 
	$sql = "SELECT
	tblproducts.pID,
	tblproducts.pName,
	tblproducts.pPrice,
	tblproducts.mafacID,
	tblmf.mfName,
	cateID, pView,img_main 
	FROM tblproducts
    INNER JOIN tblmf ON tblproducts.mafacID = tblmf.mfID
    INNER JOIN tblimg ON tblproducts.pID = tblimg.iID 
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
<div class="w3-row w3-margin-bottom">

    <?php 
    $sql = "SELECT
    tblproducts.pID,
    tblproducts.pName,
    tblproducts.pDescript,
    tblproducts.pPrice,
    tblproducts.mafacID,
    tblmf.mfName,
    cateID, pView, pSale,img_main
    FROM tblproducts 
    INNER JOIN tblmf ON tblproducts.mafacID = tblmf.mfID
    INNER JOIN tblimg ON tblproducts.pID = tblimg.iID 
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
<div class="w3-row w3-margin-bottom"> 
    <?php 
    $sql = "SELECT
    tblproducts.pID,
    tblproducts.pName,
    tblproducts.pPrice,
    tblproducts.mafacID,
    tblmf.mfName,
    cateID, pView, pSale,img_main
    FROM tblproducts 
    INNER JOIN tblmf ON tblproducts.mafacID = tblmf.mfID
    INNER JOIN tblimg ON tblproducts.pID = tblimg.iID"  ;
    $kq = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($kq))
    {
        ?>
        <div class="w3-col l3 s6" style="width: 25%; margin-bottom: 20px">
            <div class="w3-container">
                <img class="w3-image w3-round-medium" src="<?php echo  $row["img_main"]?>" style="width:100%; height: 140px">
                <b class="pro_id" hidden="true"><?php echo $row["pID"] ?></b>
                <b class="pro_title" hidden="true"><?php echo $row["mfName"];?> <?php echo $row["pName"]; ?></b>
                <b class="pro_money" hidden="true"> <?php echo $row["pPrice"] ?></b>
                <p class="w3-center"><?php echo $row["pName"]; ?><br><b><?php echo number_format($row["pPrice"]);$row["pPrice"]; ?> VNĐ</b>
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
<!-- Subscribe section -->
<?php include("footer.php"); ?>

<?php
$page="index";
include "admin/vstcount.php";
?>