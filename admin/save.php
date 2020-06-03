<?php 

include'include/config.php';
    $title=$_POST['title'];
    $bedroom=$_POST['bedroom'];
    $hall=$_POST['hall'];
    $kitchan=$_POST['kitchan'];
    $bathroom=$_POST['bathroom'];
    $balcony=$_POST['balcony'];
    $price=$_POST['price'];
    $sqr_price=$_POST['sqr_price'];
    $add=$_POST['add'];
   $video=$_POST['video'];
  // $file=$_POST['file'];
   $description=$_POST['description'];
   $location=$_POST['location'];
   $property_owner=$_POST['property_owner'];
   $property_type=$_POST['property_type'];
   $lot_size=$_POST['lot_size'];
   $sold=$_POST['sold'];
   $land_area=$_POST['land_area'];
    //$file=$_POST['file'];
	

$file=$_FILES['file']['name'];
  echo $file;
  $query="insert into property values('','$title','$bedroom','$hall','$kitchan','$bathroom','$balcony','$price','$sqr_price','$add','$video','$file','$description','$location','$property_owner','$property_type','$lot_size','$sold','$land_area')";  
  $r=mysqli_query($con,$query);
 move_uploaded_file($_FILES['file']['tmp_name'],"images/property_image/".$_FILES['file']['name']); 

if($r)
{
	echo "sucess";
	
}
else
{
	echo "fail";
}

?>  