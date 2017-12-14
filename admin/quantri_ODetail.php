<?php
session_start();

if(!isset($_SESSION["hoten"]))
{
	header("location:login.php");
	die();
}
include "../dbcon.php";

$thongbao=null;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery.js"></script>
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>
	<div class="header">
		<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span></button>
						<a class="navbar-brand" href="#"><span>THANHSPS</span> Admin</a>
						<ul class="nav navbar-top-links navbar-right">
							<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
								<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
							</a>
							<ul class="dropdown-menu dropdown-messages">
								<li>
									<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
										<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
										<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
										<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
										<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="all-button"><a href="#">
										<em class="fa fa-inbox"></em> <strong>All Messages</strong>
									</a></div>
								</li>
							</ul>
						</li>
						<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
							<em class="fa fa-bell"></em><span class="label label-info">5</span>
						</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
								</a></li>
								<li class="divider"></li>
								<li><a href="#">
									<div><em class="fa fa-heart"></em> 12 New Likes
										<span class="pull-right text-muted small">4 mins ago</span></div>
									</a></li>
									<li class="divider"></li>
									<li><a href="#">
										<div><em class="fa fa-user"></em> 5 New Followers
											<span class="pull-right text-muted small">4 mins ago</span></div>
										</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div><!-- /.container-fluid -->

				</nav>
			</div>
			<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
				<div class="profile-sidebar">
					<div class="profile-userpic">
						<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
					</div>
					<div class="profile-usertitle">
						<div class="profile-usertitle-name"><?php echo $_SESSION["hoten"] ?></div>
						<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="divider"></div>
				<form role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
				</form>
				<ul class="nav menu">
					<li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<!-- <li><a href="widgets.html"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
			<li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
			<li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
			<li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li> -->
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Table <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
			</a>
				<ul class="children collapse" id="sub-item-1">
				<li><a class="" href="quantri_loai.php">
					<span class="fa fa-arrow-right">&nbsp;</span> Loại Xe
				</a></li>
				<li><a class="" href="quantri_hang.php">
					<span class="fa fa-arrow-right">&nbsp;</span> Hãng Sản Xuất
				</a></li>
				<li><a class="" href="quantri_xe.php">
					<span class="fa fa-arrow-right">&nbsp;</span> Sản Phẩm
				</a></li>
				<li><a class="" href="quantri_tin.php">
					<span class="fa fa-arrow-right">&nbsp;</span> Tin Tức
				</a></li>
			</ul>
		</li>
		<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em>Logout</a></li>
	</ul>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">	
		<div class="alert bg-success hidden" id="alertsc" role="alert">
			<em class="fa fa-lg fa-info">&nbsp;<?php echo $thongbao ?></em> 
			<a href="#" class="pull-right">
				<em class="fa fa-lg fa-close"></em>
			</a>
		</div>
	</div>
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="index.php">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active"><a href="quantri_loai.php">Quản Trị Loại Xe</a></li>
			<button type="button" class="btn btn-md btn-default" style="float: right; padding: 0px"><a href="add_loai.php">Thêm</a></button>
		</ol>
	</div><!--/.row-->
	<div class="row">
		<table cellpadding="20" style="width: 99%;margin: auto;margin-left: 10px" border="0">
			<tbody style="margin-bottom: 100px;">
			<tr>
				<th>ID loại</th>
				<th>Tên loại</th>
				<th>Mô tả loại</th>
				<th>Công cụ</th>
			</tr>
			<?php 
			$sql = "SELECT * FROM tblcategories";
			$kq = mysqli_query($conn,$sql);

			while($row = mysqli_fetch_assoc($kq))
			{
				?>
				<tr>
					<td><?php echo  $row["cID"]; ?></td>
					<td><?php echo  $row["cName"] ?></td>
					<td><?php echo  $row["cDescript"] ?></td>
					<td> 
						<a href="edit_loai.php?suaid=<?php echo $row["cID"]; ?>">
							<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa 
						</a> | 
						<a onclick="return confirm('Bạn có chắc chắn không?')" href="delete_loai.php?id=<?php echo  $row["cID"]; ?>">								
							<i class="fa fa-trash" aria-hidden="true"></i> Xóa
						</a>
					</td>
				</tr>
				<?php
			}
			?>

</tbody>
		</table>
	</div>
</div>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/custom.js"></script>
<script>window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
	});
};
</script>

</body>
</html>