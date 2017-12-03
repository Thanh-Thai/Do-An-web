<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="banner-bottom-grids">
				<div class="col-md-8 banner-bottom-grid-left">
					<h6>To-Day-News</h6>
					<div class="banner-bottom-grid-left-grids">
						<?php 
						$tintrangchu = getTinTrangChu();
						?>
						<?php
						foreach($tintrangchu as $row) {
							?>
						<div class="banner-bottom-grid-left-grid">
							<div class="col-md-5 banner-bottom-grid-left-gridl">
								<img src="<?php echo $row["hinh"] ?>" alt=" " class="img-responsive" />
								<div class="banner-bottom-grid-left-gridl-pos">
									<h4>25th<span>March</span> 2016</h4>
								</div>
							</div>
							<div class="col-md-7 banner-bottom-grid-left-gridr">
								<h3><a href="index.php?page=single&idTin=<?php echo $row['id'] ?>"><?php echo $row["name"] ?></a></h3>
								<p><?php echo $chuoi = mb_substr($row['noidung'], 0, 150);?></p>
							</div>
							<div class="clearfix"> </div>
						</div>
							<?php
						}
						 ?>
						

					</div>
					<h5>Our-Missions</h5>
					<div class="military-armies">
						<div class="col-md-4 military-army">
							<h3><a href="single.html">being a soldier is more than <span>courage.</span></a></h3>
							<a href="single.html"><img src="images/8.jpg" alt=" " class="img-responsive" /></a>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
							<div class="more">
								<a href="single.html"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
							</div>
						</div>
						<div class="col-md-4 military-army">
							<h3><a href="single.html">sacrificing yourself for <span>peace.</span></a></h3>
							<a href="single.html"><img src="images/7.jpg" alt=" " class="img-responsive" /></a>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
							<div class="more">
								<a href="single.html"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
							</div>
						</div>
						<div class="col-md-4 military-army">
							<h3><a href="single.html">putting the serve into your <span>country.</span></a></h3>
							<a href="single.html"><img src="images/9.jpg" alt=" " class="img-responsive" /></a>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
							<div class="more">
								<a href="single.html"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 banner-bottom-grid-right">
					


					<div class="banner-bottom-grid-right-grid1">
						<h3>Military-Education</h3>
						<ul>
						<?php 
							$arr_tindaxem= array_unique($_SESSION["tindaxem"]);
							$str = implode(",", $arr_tindaxem);
							$sql="select * from news
									where id in (2,3,6)";
							$tindaxem = mfetch_assoc(mquery($sql));
						 ?>
						<?php 
						foreach($tindaxem as $row) {?>
							<li><a href="single.php?idTin=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a></li>
						<?php } ?>
						</ul>
					</div>
					



					<div class="banner-bottom-grid-right-grid1">
						<h3>Combatant-Programs</h3>
						<div class="banner-btm-gd-rgt-grd1-grd">
							<img src="images/6.jpg" alt=" " class="img-responsive" />
							<div class="banner-info">
								<a class="read-more" href="single.html"><i></i></a>
								<h5>
									<a href="single.html">
										Combatant Force
									</a>
								</h5>
								<div class="event-meta">
									<h4>Description</h4>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
								</div>
							</div>
						</div>
						<div class="banner-btm-gd-rgt-grd1-grd">
							<div class="banner-btm-gd-rgt-grd1-grdl">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
							</div>
							<div class="banner-btm-gd-rgt-grd1-grdr">
								<a href="single.html">natus error sit voluptatem perspiciatis</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="banner-btm-gd-rgt-grd1-grd">
							<div class="banner-btm-gd-rgt-grd1-grdl">
								<img src="images/9.jpg" alt=" " class="img-responsive" />
							</div>
							<div class="banner-btm-gd-rgt-grd1-grdr">
								<a href="single.html">Duis aute irure dolor in voluptate velit </a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->