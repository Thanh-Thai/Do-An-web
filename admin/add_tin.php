<?php
include( "checklogin.php" );


$thongbao = null;
//Kiểm tra có nhấn nút hay không
if ( isset( $_POST[ "btn_Them" ] ) ) {
   
        $title = $_POST[ "title" ];
        $content = $_POST[ "content" ];
        $dcontent = $_POST[ "dcontent" ];
        $date = $_POST[ "date" ];
        $new = $_POST[ "new" ];

        $temp = $_FILES[ "hinh_main" ][ "tmp_name" ];
        $hinhname = $_FILES[ "hinh_main" ][ "name" ];
        $handle = fopen( $_FILES[ "hinh_main" ][ "tmp_name" ], 'r' );
        move_uploaded_file( $temp, "../Media/images/news/".$hinhname);

        $temp1 = $_FILES[ "hinh_1" ][ "tmp_name" ];
        $hinhname1 = $_FILES[ "hinh_1" ][ "name" ];
        $handle = fopen( $_FILES[ "hinh_1" ][ "tmp_name" ], 'r' );
        move_uploaded_file( $temp1, "../Media/images/news/".$hinhname1);

        $temp2 = $_FILES[ "hinh_2" ][ "tmp_name" ];
        $hinhname2 = $_FILES[ "hinh_2" ][ "name" ];
        $handle = fopen( $_FILES[ "hinh_2" ][ "tmp_name" ], 'r' );
        move_uploaded_file( $temp2, "../Media/images/news/".$hinhname2);

        $temp3 = $_FILES[ "hinh_3" ][ "tmp_name" ];
        $hinhname3 = $_FILES[ "hinh_3" ][ "name" ];
        $handle = fopen( $_FILES[ "hinh_3" ][ "tmp_name" ], 'r' );
        move_uploaded_file( $temp3, "../Media/images/news/".$hinhname3);
        ///////////////////////////////////////////////////////////////// RÊSTet AI
        $num = 0;
        $sql_news_rs = "UPDATE tblnews SET nID = $num := ($num+1)";
        mysqli_query( $conn, $sql_news_rs );
        $sql_news_rs1 = "ALTER TABLE tblnews AUTO_INCREMENT = 1";
        mysqli_query( $conn, $sql_news_rs1 );
        /////////////////////////////////////////////////////////////////
        $sql = "INSERT INTO tblnews(nID,nTitle,nContent,nDcontent,nDate,nView,nImg,nStatus) VALUES(DEFAULT,'$title','$content','$dcontent','$date',DEFAULT,'Media/images/news/$hinhname','$new')";
        /////////////////////////////////////////////////////////////////ÊSTet AI
        $num_1 = 0;
        $sql_newsimg_rs = "UPDATE tblnewsimg SET nID = $num_1 := ($num_1+1)";
        mysqli_query( $conn, $sql_newsimg_rs );
        $sql_newsimg_rs1 = "ALTER TABLE tblnewsimg AUTO_INCREMENT = 1";
        mysqli_query( $conn,$sql_newsimg_rs1);
        /////////////////////////////////////////////////////////////////
        $sql1 = "INSERT INTO tblnewsimg(idNimg,img1,img2,img3) VALUES((SELECT nID FROM tblnews ORDER BY nID DESC LIMIT 1),'Media/images/news/$hinhname1','Media/images/news/$hinhname2','Media/images/news/$hinhname3')";
        mysqli_query( $conn, $sql );

        mysqli_query( $conn, $sql1 );
    header("location:quantri_tin.php");
    }

    ?>

    <?php include("header.php") ?>
    <li class="active"><a href="quantri_tin.php">Quản Trị Tin</a>
    </li>
    <li class="active"><a href="add_tin.php">Thêm Tin</a>
    </li>
    <button type="button" class="btn btn-md btn-default" style="float: right; padding: 0px"><a href="add_loai.php">Thêm</a></button>
    </ol>
    </div> <!--/.row-->
    <div class="row" style="margin-left: 10px">
        <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Nhập tiêu đề:
                    </td>
                    <td>
                        <textarea name="title" class="form-control" rows="4"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nhập tóm tắt:
                    </td>
                    <td>
                        <textarea name="content" class="form-control" rows="6"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nhập Nội dung:
                    </td>
                    <td>
                        <textarea name="dcontent" class="form-control" rows="20" cols="100"></textarea>
                    </td>
                </tr>
            </table>
            <table style="margin-left: 10px">
                <tr>
                    <td>
                        Ngày đăng:
                    </td>
                    <td>
                        <input name="date" class="form-control" type="date"/>
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
                    <td>Tin mới:</td>
                    <td>
                        <select style="margin-left: 5px" name="new">
                            <?php 
								$sql2="SELECT * FROM tblnew";
								$kq=mysqli_query($conn,$sql2);
								while($row=mysqli_fetch_assoc($kq)){ ?>
                            <option value="<?php echo $row["ID"];?>">
                                <?php echo $row["isNew"];?>
                            </option>
                            <?php
                            }
                            ?>
                        </select>
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
    <?php include("footer.php"); ?>