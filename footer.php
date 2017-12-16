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
                    <div class="ds_giohang w3-margin-bottom">
                        Không có sản phẩm nào
                    </div>
                </div>
               
            </div>
             <button class="w3-left w3-button w3-round-xlarge w3-green btn-xoadon">Làm Rỗng giỏ hàng</button>
        </div>
    </div>
</div>
</div>


<script src="js/javascript.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/function.js"></script>



</body>
</html>