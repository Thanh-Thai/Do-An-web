<?php

$sql="select count from tblcount where page='".$page."'";

$count=0;

$cresult=mysqli_query($conn,$sql);

if(mysqli_num_rows($cresult))
{
	$crow=mysqli_fetch_row($cresult);
	$count=$crow[0];

	echo "Visitors:".$count."<br>";
}

$count=$count+1;

$usql="update tblcount set count=".$count." where page='".$page."'";

if(!mysqli_query($conn,$usql))
{
	echo mysqli_errno($conn).":";?>
	</br>
	<?php
	echo mysqli_error($conn);
	?>
	</br>
	<?php
}
?>
