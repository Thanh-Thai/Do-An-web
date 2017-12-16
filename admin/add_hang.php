<?php
include("checklogin.php");


$thongbao=null;
//Kiểm tra có nhấn nút hay không
if (isset($_POST["btn_Them"])) {
    if ($_POST["name"]=="") {
        $thongbao="Tên loại không được rỗng";
    } else {
        $sql="INSERT INTO tblmf(mfID,mfName) VALUES(DEFAULT,'".$_POST["name"]."')";
        if (mysqli_query($conn,$sql)) {
              $thongbao="Thêm thành công";
            ?>
                <script type="text/javascript">
                    $('#alertsc').removeClass('hidden');
                </script>
            <?php
        } else {
            $thongbao= "Thêm thất bại";
            return $thongbao=mysqli_errno($conn);
        }
    }
}

?>

<?php include("header.php"); ?>
            <li class="active"><a href="quantri_hang.php">Quản Trị Hãng Xe</a></li>
            <li class="active"><a href="add_hang.php">Thêm hãng xe</a></li>
            <button type="button" class="btn btn-md btn-default" style="float: right; padding: 0px"><a href="add_loai.php">Thêm</a></button>
        </ol>
    </div><!--/.row-->
    <div class="row" style="margin-left: 10px">
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        Nhập tên hãng:
                    </td>
                    <td>
                        <input type="text" class="form-control" name="name"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="submit" class="btn btn-primary" name="btn_Them" value="Thêm"/>
                    </td>
                </tr>   
            </table>
        </form>
    </div>
</div>
<?php include("footer.php") ?>
