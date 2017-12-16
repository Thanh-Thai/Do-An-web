<?php
include("checklogin.php");

$ID = $_GET['suaid'];

$sql_edit = "SELECT * FROM  tblnewsimg  INNER JOIN tblnews ON tblnewsimg.idNimg =  tblnews.nID WHERE nID=".$ID;
$kq_edit = mysqli_query($conn,$sql_edit);
$row_edit=mysqli_fetch_assoc($kq_edit);

if(isset($_POST["btn_Sua"]))
{
     $title = $_POST["title"];
        $content = $_POST["content"];
        $dcontent = $_POST["dcontent"];
        $date = $_POST["date"];
        $new = $_POST["new"];
    
     $temp = $_FILES["hinh_main"]["tmp_name"];
        $hinhname = $_FILES["hinh_main"]["name"];
        $handle = fopen($_FILES["hinh_main"]["tmp_name"], 'r' );
        move_uploaded_file($temp, "../Media/images/news/".$hinhname);

        $temp1 = $_FILES["hinh_1"]["tmp_name"];
        $hinhname1 = $_FILES["hinh_1"]["name"];
        $handle = fopen( $_FILES["hinh_1"]["tmp_name"], 'r' );
        move_uploaded_file($temp1, "../Media/images/news/".$hinhname1);

        $temp2 = $_FILES["hinh_2"]["tmp_name"];
        $hinhname2 = $_FILES["hinh_2"]["name"];
        $handle = fopen($_FILES["hinh_2"]["tmp_name"], 'r' );
        move_uploaded_file($temp2, "../Media/images/news/".$hinhname2);

        $temp3 = $_FILES["hinh_3"]["tmp_name"];
        $hinhname3 = $_FILES["hinh_3"]["name"];
        $handle = fopen($_FILES["hinh_3"]["tmp_name"], 'r' );
        move_uploaded_file($temp3, "../Media/images/news/".$hinhname3);
    
	$sql = "UPDATE tblnews SET
    `nTitle`='$title',
    `nContent`='$content',
    `nDcontent`='$dcontent',
    `nDate`='$date',
    `nView`=0,
    `nImg`='Media/images/news/$hinhname',
    `nStatus`='$new'
    where tblnews.nID=$ID";
	//Thuc thi va thong bao
        mysqli_query($conn,$sql);
    
    $sql1= "UPDATE tblnewsimg SET
    `img1`='Media/images/news/$hinhname1',
    `img2`='Media/images/news/$hinhname2',
    `img3`='Media/images/news/$hinhname3'
    WHERE tblnewsimg.idNimg=$ID";
        mysqli_query($conn,$sql1);
        
		header("location:quantri_tin.php");
}
?>
<?php include("header.php") ?>

			 <li class="active"><a href="quantri_tin.php">Quản Trị Tin</a></li>
            <li class="active"><a href="edit_tin.php">Sửa tin</a></li>
		</ol>
	</div><!--/.row-->
	<div class="row">
		<form action="" method="post" enctype="multipart/form-data">
            <table style="margin-left: 10px">
                <tr>
                    <td>
                       ID tin:
                    </td>
                    <td>
                        <input name="id" class="form-control" type="text" readonly value="<?php echo $row_edit["nID"] ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nhập tiêu đề:
                    </td>
                    <td>
                        <textarea name="title" class="form-control" rows="4" ><?php echo $row_edit["nTitle"]?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nhập tóm tắt:
                    </td>
                    <td>
                        <textarea name="content" class="form-control" rows="6"><?php echo $row_edit["nContent"] ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nhập Nội dung:
                    </td>
                    <td>
                        <textarea name="dcontent" class="form-control" rows="20" cols="100" ><?php echo $row_edit["nDcontent"] ?></textarea>
                    </td>
                </tr>
                 <tr>
                    <td>
                        Ngày đăng:
                    </td>
                    <td>
                        <input name="date" class="form-control" type="date" value="<?php echo $row_edit["nDate"]?>" />
                    </td>
                </tr>
            </table>
            <table style="margin-left: 120px">
                <tr>
					<td>Hình</td>
                </tr>
                    <tr>
					<td><img width="400px" height="200px" src="../<?php echo $row_edit["nImg"];?>"></td>
                    <td><img width="400px" height="200px" src="../<?php echo $row_edit["img1"];?>"></td>
                    </tr>
                <tr>
            
                    <td><img width="400px" height="200px" src="../<?php echo $row_edit["img2"];?>"></td>
                    <td><img width="400px" height="200px" src="../<?php echo $row_edit["img3"];?>"></td>
                </tr>
            </table>
            <table style="margin-left: 10px">
                <tr>
                    <td>Hình Chính: </td>
                    <td>
                        <input class="form-control" type="file" name="hinh_main" src="<?php echo $row_edit["nImg"] ?>" >
                    </td>
                </tr>
                <tr>
                    <td>Hình1: </td>
                    <td>
                        <input class="form-control" type="file" name="hinh_1" src="<?php echo $row_edit["img1"] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Hình2: </td>
                    <td>
                        <input class="form-control" type="file" name="hinh_2" src="<?php echo $row_edit["img2"] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Hình3: </td>
                    <td>
                        <input class="form-control" type="file" name="hinh_3" src="<?php echo $row_edit["img3"] ?>">
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
                           <option
                                        <?php

								if($row_edit["nStatus"]==$row["ID"]) 
									echo "selected";
								?>
									value="<?php echo $row["ID"];?>"><?php echo $row["isNew"];?>
								</option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="submit" class="btn btn-primary" name="btn_Sua" value="Sửa"/>
                    </td>
                </tr>
            </table>
        </form>

	</div>
</div>
<?php include("footer.php") ?>