<?php 

include'include/config.php';

$sid=$_GET['x'];



mysqli_query($con,"delete from contact where id='$sid'");

echo"<script>window.location.href='contact_people.php';</script>";		
	

?>