<?php 
session_start();
include_once("dbcon.php");

$idTin = 2;
if(isset($_GET["idTin"]))
{
	$idTin = $_GET["idTin"];
}
//Tạo session là 1 cái mảng
if (!isset($_SESSION["tindaxem"])) {
	$_SESSION["tindaxem"]=array();
}
//Thêm mảng
$_SESSION["tindaxem"][]=$idTin;
print_r($_SESSION["tindaxem"]);


$khoangcachgiua2lanbam= time()-$_SESSION["time_UPDATE"];
if($khoangcachgiua2lanbam>60)
{
	$sql_update="update news set LuotXem=LuotXem+1 where id=$idTin";
	$kq = mysqli_query($conn,$sql_update);
	$_SESSION["time_UPDATE"]=time();
}
$sql = "SELECT * FROM news WHERE id = $idTin";
$kq= mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($kq);
	/*$seson = time() - $_SESSION['time'];

	$time = 50;
	if($seson>$time){

		$sql = "UPDATE news SET luotxem = luotxem + 1  WHERE id = $idTin";
		mysql_query($sql);
		echo "ok";
		$_SESSION['time']=time();

	}else{
		echo "--";
		echo time();
		echo "--";
		echo $_SESSION['time'];
		echo "no";
		echo "--";
	}*/



 ?>
	<div class="single">
		<div class="container">
			<div class="single-info">
				<h3><?php echo $row["name"] ?> - <?php echo $row["LuotXem"] ?></h3>
				<div class="comments">
					<ul>
						<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Chris Paul Drew</a> /</li>
						<li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>8 Comments</a> /</li>
						<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>31 March 2016</li>
					</ul>
				</div>
				<div class="dummy-text">
					<img style="float:left;margin: 10px" src="<?php echo $row["hinh"] ?>" />
					<?php echo $row["noidung"] ?>
				</div>
				
			</div>
		</div>
	</div>