<?php 
	$conn = mysqli_connect("localhost","id3299765_admin","123456","id3299765_dbcarsp");
	mysqli_query($conn,"Set names 'utf8'");
	function mquery($sql)
	{
		$conn = $GLOBALS["conn"]; // lay bien cuc bo ben ngoai dem vao
		return mysqli_query($conn,$sql);
	}

	function mfetch_assoc($kq)
	{
		while($row=mysqli_fetch_assoc($kq))
		{
			$arr[] = $row;
		}
		return $arr;		
	}

	function getListTheLoai()
	{
		//$sql = "SELECT * FROM theloai";
		//cach 1
		// $kq = mquery($sql);
		// return mfetch_assoc($kq);
		//return $arr;

		//cach 2 , rut gon hon
		//return mfetch_assoc(mquery($sql));
	}

	function getTinTrangChu($batdau=0,$sotin=2)
	{
		///$sql = "SELECT * FROM news LIMIT $batdau,$sotin";
		//return mfetch_assoc(mquery($sql));
	}
	function getTinByidLoai($idtheloai,$batdau,$sotin)
	{
		//$sql = "SELECT * from news where theloai_id = $idtheloai 
		//		ORDER by id LIMIT $batdau,$sotin";
		//return mfetch_assoc(mquery($sql));
	}

 ?>