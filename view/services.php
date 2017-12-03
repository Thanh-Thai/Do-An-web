<?php 
include_once"dbcon.php";
 ?>
<!-- services -->
	<div class="services">
		<div class="container">
			<div class="services-grids">
				<div class="services-grid1">
			<?php
			if(isset($_GET['idTL'])){
				$idtheloai = $_GET['idTL'];
				$tins = getTinByidLoai($idtheloai,0,3);
			}
			 ?>
			 <?php foreach ($tins as $row) {
			 ?>
					<div class="col-md-4 services-grid1-left">
						<img height="187" style="height:187px !important;width:100%" src="<?php echo $row['hinh'] ?>" alt=" " class="img-responsive" />
						<h5><a href="index.php?page=single&idTin=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a></h5>
						<p><?php echo substr($row['noidung'],0,100) ?></p>
						<div class="more">
							<a href="index.php?page=single&idTin=<?php echo $row["id"];?>"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
						</div>
					</div>
				<?php } ?>
			<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
<!-- //services -->