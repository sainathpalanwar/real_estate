<?php 
include('include/header.php');
extract($_REQUEST);
include'include/config.php';
if(isset($submit))
{

 $file=$_FILES['file']['name'];
  $query="insert into property_plan values('','$property_id','$file','$height','$length','$free_area','$wall_size','$slab_size','$windows','$ventilation','$floor_no','$kitchen')";  
  mysqli_query($con,$query);
  move_uploaded_file($_FILES['file']['tmp_name'],"images/property_plan/".$_FILES['file']['name']); 
 
   $msg='<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Image Upload  successfuly.
  </div>';       
}

?>  
    <!-- Header -->
    
    <section>
       
       <!-- Left Sidebar -->
<?php include('include/sidebar.php');?>
        <!-- #END# Left Sidebar -->
        <section class="content">
        <div class="container-fluid">
            <?php echo @$msg;?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="text-align: center;">
                                Add Property Plan
                                
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
						<form method="post" enctype="multipart/form-data">
                              
                           

                                <div class="row clearfix">

                                    <div class="col-lg-12 col-md-3 col-sm-3 col-xs-6">
                                        <select  name="property_id">
                                            
                                            <?php
                                            $sel=mysqli_query($con,"select * from property");
                                            while($res=mysqli_fetch_array($sel))
                                            {
                                            ?>

                                            <option value="<?php echo $res[0];?>"><?php echo $res['title'];?></option>  
                                           
                                           <?php  }  ?>

                                        </select>  
                                    </div>


                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                       
                                    
                                    <h3>Click to Image upload.</h3>
                                    
                               
                                <div>
                                    <input required name="file" type="file" multiple />
                                </div>
                             <br><br> 
							 <br><br> 
							 <br><br>
							 <br><br> 
							 <br><br>
							 <br><br>
							 <br><br> <br><br>
                             </div>


                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="height" class="form-control">
                                                <label class="form-label">Height</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="length" class="form-control">
                                                <label class="form-label">length</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="free_area" class="form-control">
                                                <label class="form-label">Free Area</label>
                                            </div>
                                        </div>
                                     </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="wall_size" class="form-control">
                                                <label class="form-label">Wall Size</label>
                                            </div>
                                        </div>
                                     </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="slab_size" class="form-control">
                                                <label class="form-label">Slab Size</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="windows" class="form-control">
                                                <label class="form-label">Total Windows</label>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                 <label style="color:gray;">Ventilation</label>
                                               
                                               <input name="ventilation" type="radio" id="radio_36" value="yes" class="with-gap radio-col-light-blue" checked />
                                                <label for="radio_36">YES</label>

                                                <input name="ventilation" type="radio" id="radio_30" value="No" class="with-gap radio-col-red"  />
                                                <label for="radio_30">NO</label>
                                            </div>
                                        </div>
                                     </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="floor_no" class="form-control">
                                                <label class="form-label">Floor NO</label>
                                            </div>
                                        </div>
                                     </div>


                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="kitchen" class="form-control">
                                                <label class="form-label">Kitchen Specification</label>
                                            </div>
                                        </div>
                                    </div>

                              
                                

                                    

                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12" style="text-align: center;">
                             
                                     
                                        <input type="submit" name="submit" class="btn btn-primary btn-lg m-l-15 waves-effect" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
            <?php include'include/footer.php';?>
            <!-- Select Plugin Js -->
 
