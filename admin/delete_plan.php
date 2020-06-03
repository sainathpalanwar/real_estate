<?php 

include'include/config.php';

$sid=$_GET['x'];

$query2=mysqli_query($con,"select * from images property_plan where property_id='$sid'");
$image1=mysqli_fetch_array($query2);

$img1=$image1['image1'];

unlink("images/plan_image/$img1");


mysqli_query($con,"delete from property_plan where property_id='$sid'");
echo"<script>window.location.href='add_plan.php';</script>";		
	

?>



