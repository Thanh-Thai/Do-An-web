<?php
session_start();

if ( !isset( $_SESSION[ "hoten" ] ) ) {
    header( "location:login.php" );
    die();
}
include "../dbcon.php";

$thongbao = NULL;
//Kiem tra co nhat nut hay khong
if ( isset( $_POST[ "btn_Them" ] ) ) {

    $name = $_POST[ "name" ];
    $noidung = $_POST[ "noidung" ];
    $year = $_POST[ "year" ];
    $color = $_POST[ "color" ];
    $price = $_POST[ "price" ];
    $eng = $_POST[ "eng" ];
    $tran = $_POST[ "tran" ];
    $x = $_POST[ "x" ];
    $y = $_POST[ "y" ];
    $z = $_POST[ "z" ];
    $fbr = $_POST[ "fbr" ];
    $rbr = $_POST[ "rbr" ];
    $wei = $_POST[ "wei" ];

    $temp = $_FILES[ "hinh_main" ][ "tmp_name" ];
    $hinhname = $_FILES[ "hinh_main" ][ "name" ];
    $handle = fopen( $_FILES[ "hinh_main" ][ "tmp_name" ], 'r' );
    move_uploaded_file( $temp, "../Media/images/" . $hinhname );

    $temp = $_FILES[ "hinh_1" ][ "tmp_name" ];
    $hinhname1 = $_FILES[ "hinh_1" ][ "name" ];
    $handle = fopen( $_FILES[ "hinh_1" ][ "tmp_name" ], 'r' );
    move_uploaded_file( $temp, "../Media/images/" . $hinhname );

    $temp = $_FILES[ "hinh_2" ][ "tmp_name" ];
    $hinhname2 = $_FILES[ "hinh_2" ][ "name" ];
    $handle = fopen( $_FILES[ "hinh_2" ][ "tmp_name" ], 'r' );
    move_uploaded_file( $temp, "../Media/images/" . $hinhname );

    $temp = $_FILES[ "hinh_3" ][ "tmp_name" ];
    $hinhname3 = $_FILES[ "hinh_3" ][ "name" ];
    $handle = fopen( $_FILES[ "hinh_3" ][ "tmp_name" ], 'r' );
    move_uploaded_file( $temp, "../Media/images/" . $hinhname );

    $status = $_POST[ "status" ];
    $new = $_POST[ "new" ];
    $sale = $_POST[ "sale" ];
    $nsx_id = $_POST[ "nsx_id" ];

    $theloai_id = $_POST[ "theloai_id" ];


    $sql = "INSERT INTO 	tblproducts(pID,pName,pDescript,pYear,pColor,pPrice,pStatus,mafacID,cateID,pNew,pSale,pEngine,pTranmiss,pX,pY,pZ,pFbrakes,pRbrakes,pWeight)
	VALUES (DEFAULT,'$name','$noidung','$year','$color','$price','$status','$nsx_id','$theloai_id','$new','$sale','$eng','$tran','$x','$y','$z','$fbr','$rbr','$wei')";
    mysqli_query( $conn, $sql );

    $sql1 = "INSERT INTO tblimg((SELECT pID FROM tblproducts ORDER BY pID DESC LIMIT 1),'Media/images/$hinhname','Media/images/$hinhname1','Media/images/$hinhname2','Media/images/$hinhname3')";
    header( 'location:quantri_xe.php' );
    echo mysqli_error( $conn );
}
?>

    <?php include("header.php"); ?>
  
                <li class="active"><a href="quantri_xe.php">Quản Trị Xe</a>
                </li>
                <li class="active"><a href="add_xe.php">Thêm Xe</a>
                </li>
            </ol>
        </div>
        <!--/.row-->
        <div class="row">
            <form action="" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>
                            Chọn Loại xe
                        </td>
                        <td>
                            <select class="form-control" name="theloai_id">
                                <?php 
								$sql="SELECT * FROM tblcategories";
								$kq=mysqli_query($conn,$sql);
								while($row=mysqli_fetch_assoc($kq)){ ?>
                                <option value="<?php echo $row[" cID "];?>">
                                    <?php echo $row["cName"];?>
                                </option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nhà Sản Xuất:
                        </td>
                        <td>
                            <select class="form-control" name="nsx_id">
                                <?php 
									$sql2="SELECT * FROM tblmf";
									$kq=mysqli_query($conn,$sql2);
									while($row=mysqli_fetch_assoc($kq)){ ?>
                                <option value="<?php echo $row[" mfID "];?>">
                                    <?php echo $row["mfName"];?>
                                </option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Tên Xe</td>
                        <td><input class="form-control" type="text" name="name"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Nội dung</td>
                        <td><textarea class="form-control" name="noidung" rows="10"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Năm Sản Xuất:</td>
                        <td><input class="form-control" type="text" name="year"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Màu:</td>
                        <td><input class="form-control" type="text" name="color"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Giá:</td>
                        <td><input class="form-control" type="text" name="price"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Hình Chính: </td>
                        <td>
                            <input class="form-control" type="file" name="hinh_main">
                        </td>
                    </tr>
                    <tr>
                        <td>Hình1: </td>
                        <td>
                            <input class="form-control" type="file" name="hinh_1">
                        </td>
                    </tr>
                    <tr>
                        <td>Hình2: </td>
                        <td>
                            <input class="form-control" type="file" name="hinh_2">
                        </td>
                    </tr>
                    <tr>
                        <td>Hình3: </td>
                        <td>
                            <input class="form-control" type="file" name="hinh_3">
                        </td>
                    </tr>
                    <tr>
                        <td>Tình trạng:</td>
                        <td>
                            <select name="status">
                                <?php 
								$sql2="SELECT * FROM tblstatus";
								$kq=mysqli_query($conn,$sql2);
								while($row=mysqli_fetch_assoc($kq)){ ?>
                                <option value="<?php echo $row[" sID "];?>">
                                    <?php echo $row["sName"];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                        </td>
                        <td style="padding-left: 20px">Sản phẩm mới:</td>
                        <td>
                            <select name="new">
                                <?php 
								$sql2="SELECT * FROM tblnew";
								$kq=mysqli_query($conn,$sql2);
								while($row=mysqli_fetch_assoc($kq)){ ?>
                                <option value="<?php echo $row[" ID "];?>">
                                    <?php echo $row["isNew"];?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                        </td>
                        <tr>
                            <td>Giảm giá:</td>
                            <td>
                                <select name="sale">
                                    <?php 
								$sql2="SELECT * FROM tblsale";
								$kq=mysqli_query($conn,$sql2);
								while($row=mysqli_fetch_assoc($kq)){ ?>
                                    <option value="<?php echo $row[" ID "];?>">
                                        <?php echo $row["isSale"];?>
                                    </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                        </td>
                        <td style="padding-left: 20px">Loại Động Cơ</td>
                            <td><input class="form-control" type="text" name="eng"/></td>
                        </tr>
                    <tr>
                     <td>Hộp Số</td>
                            <td><input class="form-control" type="text" name="tran"/></td>
                         <td style="padding-left: 20px">Chiều Dài</td>
                            <td><input class="form-control" type="text" name="x"/></td>
                    </tr>
                    <tr>
                     <td>Thắng Trước</td>
                            <td><input class="form-control" type="text" name="fbr"/></td>
                         <td style="padding-left: 20px">Chiều Rộng</td>
                            <td><input class="form-control" type="text" name="y"/></td>
                    </tr>
                    <tr>
                     <td>Thắng Sau</td>
                            <td><input class="form-control" type="text" name="rbr"/></td>
                         <td style="padding-left: 20px">Chiều Cao</td>
                            <td><input class="form-control" type="text" name="z"/></td>
                    </tr>
                        <tr>
                            <td colspan="2">
                                <input class="btn btn-primary" type="submit" name="btn_Them" value="Thêm">
                            </td>
                        </tr>
                </table>
            </form>
        </div>
    </div>
<?php include("footer.php") ?>