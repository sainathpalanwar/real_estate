<?php
$conn=mysqli_connect('localhost','root','','real_estate');


//$property_id=$_POST['property_id'];
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$phone=$_POST['phone'];
$message=$_POST['message'];


 $query="insert into comments values('','$id','$name','$email','$subject','$phone','$message')";  
  $r=mysqli_query($conn,$query); 

if($r)
{
	
echo "<script>alert('Your message Sent Successfully');
window.location.href='properties-details.php?id=$id'</script>"; 

}
 

?>