<?php 
include("dbcon.php");
if(isset($_GET["tukhoa"]))
{
	$tukhoa = $_GET["tukhoa"];
}



 ?>

<!DOCTYPE html>
<html>
<head>
<title>Combatant a Social and People Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Combatant Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>

<!-- body-top -->
	<div class="body-top">
		<div class="container">
			<div class="body-top-left">
				<p>Temporibus autem quibusdam et aut officiis debitis.</p>
			</div>
			<div class="body-top-right">
				<div class="social">
					<ul>
						<li><a href="#" class="link facebook"><span></span></a></li>
						<li><a href="#" class="link twitter"><span></span></a></li>
						<li><a href="#" class="link google-plus"><span></span></a></li>
						<li><a href="#" class="link dribble"><span></span></a></li>
					</ul>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //body-top -->
<!-- body-content -->
	<div class="body-content">
		<div class="container">
			<!-- header -->
				<div class="logo-search">
					<div class="logo">
						<h1><a href="index.html">Combatant<i>Duty Honor Country</i></a></h1>
					</div>
					<div class="search">
						<form method="get" action="timkiem.php">
							<input type="text" name="tukhoa" value="Search Here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Here...';}" required="">
							<input type="submit" value=" " >
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			<!-- //header -->
			<!-- nav -->
				<div class="navigation">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							<nav class="cl-effect-20" id="cl-effect-20">
								<ul class="nav navbar-nav">
									<li><a href="index.html"><span data-hover="Home">Home</span></a></li>
									<li><a href="services.html"><span data-hover="Services">Services</span></a></li>
									<li><a href="about.html"><span data-hover="About Us">About Us</span></a></li>
									<li><a href="short-codes.html"><span data-hover="Short Codes">Short Codes</span></a></li>
									<li><a href="gallery.html"><span data-hover="Gallery">Gallery</span></a></li>
									<li><a href="mail.html"><span data-hover="Mail Us">Mail Us</span></a></li>
								</ul>
							</nav>
						</div>
						<!-- /.navbar-collapse -->
					</nav>
				</div>
			<!-- //nav -->
			<!-- banner -->
				<div class="banner">
					<div class="wmuSlider example1">
						<div class="wmuSliderWrapper">
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="banner1">
										
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="banner2">
										
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="banner3">
										
									</div>
								</div>
							</article>
						</div>
					</div>
							<script src="js/jquery.wmuSlider.js"></script> 
							<script>
								$('.example1').wmuSlider();         
							</script> 

				</div>
			<!-- //banner -->
		</div>
	</div>
<!-- //body-content -->
<!-- single -->	
	<div class="single">
		<div class="container">

			<div class="single-info">
			<?php 
				$sql 	= "Select * from news where name like '%$tukhoa%' ";
				$kq 	= mysql_query($sql); ?>
			<h3>Bạn đã tìm <b><?php echo $tukhoa ?></b> và có <?php echo mysql_num_rows($kq) ?> kết quả</h3>
				<?php 
				
				
					while($row = mysql_fetch_assoc($kq))
					{
						$str = str_replace("$tukhoa","<b>$tukhoa</b>",$row[name]);
						?>
						<a href="single.php?idTin=<?php echo $row[id] ?>"><?php echo $str; ?></a><hr/>
						<?php						
					}
				 ?>	
				
				<div class="recent-posts"></div>
				<div class="recent-com"></div>
				<div class="leave-comm"></div>
			</div>
		</div>
	</div>
<!-- //single -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grid">
				<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
				<h3><span>Connect</span> Subscribe To Newsletter</h3>
				<form>
					<input type="email" value="enter your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'enter your email address';}" required="">
					<input type="submit" value=" " >
				</form>
			</div>
			<div class="footer-grid-logo">
				<h2><a href="index.html"><span></span>Combatant<i>Duty Honor Country</i></a></h2>
				<p>all of us should get a taste of military service</p>
				<div class="social">
					<ul>
						<li><a href="#" class="link facebook"><span></span></a></li>
						<li><a href="#" class="link twitter"><span></span></a></li>
						<li><a href="#" class="link google-plus"><span></span></a></li>
						<li><a href="#" class="link dribble"><span></span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-copy">
		<div class="container">
			<p>&copy 2016 Combatant. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts.</a></p>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>