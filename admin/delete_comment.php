<?php 

include'include/config.php';

$sid=$_GET['x'];

mysqli_query($con,"delete from comments where comment_id='$sid'");

	
echo"<script>window.location.href='show_comment.php';</script>";		
	

?>