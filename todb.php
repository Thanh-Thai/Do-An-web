<?php
include("dbcon.php");
if(isset($_POST["btntt"])){
    $id = $_POST[ "proID"];
    $name = $_POST[ "proName"];
    $price = $_POST[ "proPrice"];
    $sl = $_POST[ "proQtt" ];
    $date = date("Y/m/d");
    $tenkh = $_POST[ "name" ];
    $email = $_POST[ "email"];
    $sdt = $_POST["sdt"];
    $total = $_POST["totalprice"];
    $sql = "INSERT INTO tblcustomer(CusName,CusEmail,CusPhone) VALUES('$tenkh','$email','$sdt')";
    mysqli_query( $conn, $sql );
    $sql1 = "INSERT INTO tblorders(Total,dateCreate,ctID) VALUES('$total','$date',(SELECT CusID FROM tblcustomer WHERE CusEmail='$email'))";
    mysqli_query( $conn, $sql1 );
    $sql2 = "INSERT INTO tblorddetails(proID,proQtt,oID) VALUES((SELECT pID FROM tblproducts WHERE pID=$id),'$sl',(SELECT tblorders.oID FROM tblorders INNER JOIN tblcustomer ON ctID =tblcustomer.CusID  WHERE tblcustomer.CusEmail='$email' ORDER BY oID DESC LIMIT 1))";
    mysqli_query( $conn, $sql2 );
    $sql = "SELECT * FROM tblcustomer WHERE CusEmail='$email'";
    $kq = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($kq);
    location:header("location:guimail.php?mail=".$row["CusEmail"]);
}