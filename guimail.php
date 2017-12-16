<?php
$email=$_GET['mail'];
include("dbcon.php");
// Khai báo thư viên phpmailer
	//require "lib/class.phpmailer.php";
require 'lib/PHPMailerAutoload.php';
	// Khai báo tạo PHPMailer
$mail = new PHPMailer();
	//Khai báo gửi mail bằng SMTP
$mail->IsSMTP();
	//Tắt mở kiểm tra lỗi trả về, chấp nhận các giá trị 0 1 2
	// 0 = off không thông báo bất kì gì, tốt nhất nên dùng khi đã hoàn thành.
	// 1 = Thông báo lỗi ở client
	// 2 = Thông báo lỗi cả client và lỗi ở server
$mail->SMTPDebug  = 0;
	$mail->Debugoutput = "html"; // Lỗi trả về hiển thị với cấu trúc HTML
	$mail->Host       = "smtp.gmail.com"; //host smtp để gửi mail
	$mail->Port       = 465; // cổng để gửi mail
	$mail->SMTPSecure = "ssl"; //Phương thức mã hóa thư - ssl hoặc tls
	$mail->SMTPAuth   = true; //Xác thực SMTP
	$mail->Username   = "guugomeo@gmail.com"; // Tên đăng nhập tài khoản Gmail
	$mail->Password   = "haha_1st"; //Mật khẩu của gmail
	$mail->SetFrom("guugomeo@gmail.com", "Waymo Auto"); // Thông tin người gửi
	$mail->AddReplyTo("guugomeo@gmail.com","Waymo Auto");// Ấn định email sẽ nhận khi người dùng reply lại.
	$sql = "SELECT
	tblcustomer.CusID,
	tblcustomer.CusName,
	tblcustomer.CusEmail
	FROM
	tblcustomer
	WHERE tblcustomer.CusEmail='$email'";
	$kq = mysqli_query( $conn, $sql );
	$row = mysqli_fetch_assoc($kq);
	$mail->AddAddress($email);//Email của người nhận
	$mail->Subject = "Mail cho".$row["CusName"]; //Tiêu đề của thư
	$mail->MsgHTML("Mail dc gui de xac nhan don hang cua ban tai Waymo Auto, Thanks you :)) <3"); //Nội dung của bức thư.
	// $mail->MsgHTML(file_get_contents("email-template.html"), dirname(__FILE__));
	// Gửi thư với tập tin html
	$mail->AltBody = "Xac Nhan mua hang";//Nội dung rút gọn hiển thị bên ngoài thư mục thư.
	//$mail->AddAttachment("images/attact-tui.gif");//Tập tin cần attach
	//Tiến hành gửi email và kiểm tra lỗi
	if(!$mail->Send()) { echo "Có lỗi khi gửi mail:".$mail->ErrorInfo;} 
		else {header("location:index.php");}