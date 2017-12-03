<?php
include "../dbcon.php";
$thongbao=null;
//Kiểm tra có nhấn nút hay không
if (isset($_POST["btn_Them"])) {
    if ($_POST["name"]=="") {
        $thongbao="Tên loại không được rỗng";
    } else {
        $sql="INSERT INTO tblcategories(cID,cName) VALUES(DEFAULT,'".$_POST["name"]."')";
        if (mysqli_query($conn,$sql)) {
            $thongbao= "Đã thêm dữ liệu";
        } else {
            $thongbao= "Thêm thất bại";
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
    <div class="header">
    TRANG ADMIN
    </div>
    <div class="menu">
    <a href ="index.php">Trang chủ</a> | <a href="quantri_loai.php">Quản trị loại xe</a> | <a href="quantri_xe.php">Quản trị xe</a>
    </div>
    <div class="content">
    <p style="color: white;background-color: green;font-weight: bold"><?php echo $thongbao;?></p>
    <form action="" method="post">
    <table>
    <tr>
        <td>
            Nhập tên loại
        </td>
        <td>
            <input type="text" name="name"/>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <input type="submit" name="btn_Them" value="Thêm"/>
        </td>
    </tr>   
    </table>
    </form>
    </div>
</div>



</body>
</html>
