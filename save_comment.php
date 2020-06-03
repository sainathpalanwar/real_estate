<?php
$conn=mysqli_connect('localhost','root','','real_estate');


//$property_id=$_POST['property_id'];

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$phone=$_POST['phone'];
$message=$_POST['message'];


 $query="insert into contact values('','$name','$email','$subject','$phone','$message')";  
  $r=mysqli_query($conn,$query); 

if($r)
{
	
echo "<script>alert('Your message Sent Successfully');
window.location.href='contact.php'</script>"; 

}
 

?>