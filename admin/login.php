<?php 
	session_start();
	require_once("../dbcon.php");
	mysqli_query($conn,"set names 'utf8' ");
	if (isset($_POST["btn_DN"])) {
		$hoten=$_POST["hoten"];
		$pass=md5($_POST["password"]);

		$sql = "select * from `tblusers`
				where userName = '$hoten' and password = '$pass'";
		$kq = mysqli_query($conn,$sql);
		$sodongtimduoc = mysqli_num_rows($kq);
		if ($sodongtimduoc==0) {
			$row = mysqli_fetch_assoc($kq);
			$_SESSION["hoten"] = $hoten;
			$_SESSION["id"] = $row["id"];
			header("location:index.php");
		}

	}
 ?>
 <form method="post" action="">
 	<input type="text" name="hoten">
 	<input type="password" name="password">
 	<input type="submit" name="btn_DN" value="Đăng nhập">
 </form>