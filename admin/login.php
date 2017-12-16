<?php 
session_start();
require_once("../dbcon.php");
mysqli_query($conn,"set names 'utf8' ");
if (isset($_POST["btn_DN"])) {

	$hoten=$_POST["hoten"];
	$pass=($_POST["password"]);
	if($hoten=="")
	{
			header("location:login.php");
			exit();
	}
	$sql = "select * from `tblusers`
			where userName = '$hoten' and password = '$pass'";
	$kq = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($kq);
		if($row["userName"]==$hoten && $row["password"]==$pass)
		{
		$_SESSION["hoten"] = $hoten;
		$_SESSION["role"] = $row["Role"];
		header("location:index.php");
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form method="post" action="login.php">
							<div class="form-group">
								<input class="form-control" name="hoten" type="text" >
							</div>
							<div class="form-group">
								<input class="form-control" name="password" type="password" value="">
							</div>
							 <button type="submit" class="btn btn-primary" name="btn_DN">Login</button>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
</body>
</html>
