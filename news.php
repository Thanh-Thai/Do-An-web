<?php include "dbcon.php"; ?>

<?php include("header_main.php") ?> 
<a onclick = "myAccFunc()" href = "javascript:void(0)" class = "w3-button w3-block w3-left-align" id ="myBtn"> Sản Phẩm 
    <i class = "fa fa-caret-down" > </i> </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium w3-animate-right">
        <a href="product_cars.php" class="w3-bar-item w3-button">Xe Hơi</a>
        <a href="product_SUV.php" class="w3-bar-item w3-button">Xe SUV</a>
        <a href="product_sport.php" class="w3-bar-item w3-button">Xe Thể Thao</a>
    </div>
<?php include("sub_nav.php") ?>

<!-- Top menu on small screens -->
<?php include("header_1.php") ?> 
<a href = "#" >
    <p class="w3-left">Tin Tức</p> </a>
<?php include("header_sc.php") ?>
<!-- Image header -->
<div class="w3-content w3-display-container">
</div>
<!-- Product grid -->
<div class="w3-row w3-grayscale">
    <?php 
			$sql = "SELECT *
    	    FROM tblnews";
			$kq = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($kq))
			{
				?>
<div class="w3-content">
    <ul class="w3-ul">
        <li class="w3-bar">
            <a href="detail_news.php?id=<?php echo $row["nID"] ?>" style="text-decoration: none">
            <img src="<?php echo $row["nImg"] ?>" class="w3-bar-item " style="width:200px">
            <div class="w3-large w3-margin-top">
                <span><?php echo $row["nTitle"] ?></span><br>
            </div>
            </a>
        </li>
    </ul>
</div>
    <?php } ?>
</div>
<!-- Subscribe section -->
 <?php include("footer.php"); ?>


