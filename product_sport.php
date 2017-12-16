<?php

include "dbcon.php";

?>
<?php include("header_main.php") ?>
<a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-left-align" id="myBtn">Sản Phẩm
   <i class="fa fa-caret-down"></i>
</a>
                <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium w3-animate-right">
                    <a href="product_cars.php" class="w3-bar-item w3-button w3-light-grey">Xe Hơi</a>     
                  <a href="product_SUV.php" class="w3-bar-item w3-button">Xe SUV</a>
                    <a href="product_sport.php" class="w3-bar-item w3-button"><i class="fa fa-caret-right w3-margin-right"></i>Xe Thể Thao</a>
                </div>
 <?php include("sub_nav.php") ?>

    <!-- Top menu on small screens -->
 <?php include("header_1.php") ?>
           <a href="product_sport.php"><p class="w3-left">Danh Mục Xe Thể Thao</p></a>
   <?php include("header_sc.php") ?>
        <!-- Image header -->
       <div class="w3-content w3-display-container w3-margin-bottom">
            <?php 
			$sql = "SELECT tblproducts.pID, tblproducts.cateID, img_main
    	    FROM tblproducts 
            INNER JOIN tblmf ON tblproducts.mafacID = tblmf.mfID
            INNER JOIN tblimg ON tblproducts.pID = tblimg.iID WHERE cateID=2"	;
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
           <?php 
			$sql = "SELECT cID,cName,cDescript FROM tblcategories WHERE cID=2"	;
			$kq = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($kq))
			{
				?>
            <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
                <h1 class="w3-jumbo w3-hide-small new-header"><?php echo $row["cName"] ?></h1>
                <h1 class="w3-hide-large w3-hide-medium new-header"><?php echo $row["cName"] ?></h1>
                <h1 class="w3-hide-small new-header"><?php echo $row["cDescript"] ?></h1>
<!--                <p><a href="#jeans" class="w3-button w3-black w3-padding-large w3-large">SHOP NOW</a>-->
                       <?php   }  ?>
                </p>
            </div>
        </div>

    <div class="w3-container w3-white w3-bar w3-black w3-margin-bottom w3-mobile"> <p> Các dòng xe </p> </div>
        <!-- Product grid -->
        <div class="w3-row w3-grayscale w3-margin-bottom">

            <?php 
			$sql = "SELECT
            tblproducts.pID,
            tblproducts.pName,
            tblproducts.pDescript,
            tblproducts.pPrice,
            tblproducts.mafacID,
            tblproducts.cateID,
            tblmf.mfName,
            cateID, pView,img_main 
            FROM tblproducts
            INNER JOIN tblmf ON tblproducts.mafacID = tblmf.mfID
            INNER JOIN tblimg ON tblproducts.pID = tblimg.iID  
            WHERE cateID=2"	;
			$kq = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($kq))
			{
				?>
            <div class="w3-col l3 s6">
                <div class="w3-container">
                    <img src="<?php echo  $row["img_main"]?>" style="width:100%; height: 140px">
                     <b class="pro_id" hidden="true"><?php echo $row["pID"] ?></b>
                    <b class="pro_title" hidden="true"><?php echo $row["mfName"];?> <?php echo $row["pName"]; ?></b>
                    <b class="pro_money" hidden="true"> <?php echo $row["pPrice"] ?></b>
                    <p class="w3-center" style="width: 110%"><?php echo $row["mfName"];?> <?php echo $row["pName"]; ?><br><b><?php echo number_format($row["pPrice"]);$row["pPrice"]; ?> VNĐ</b>
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
         <div class="w3-row w3-grayscale">
            
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
                    <p><i class="fa fa-fw fa-map-marker"></i> Company Name</p>
                    <p><i class="fa fa-fw fa-phone"></i> 0044123123</p>
                    <p><i class="fa fa-fw fa-envelope"></i> ex@mail.com</p>
                    <h4>We accept</h4>
                    <p><i class="fa fa-fw fa-cc-amex"></i> Amex</p>
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
    <?php include("footer.php"); ?>