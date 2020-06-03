
<?php include('include/header.php');?>
<!-- main header end -->

<!-- Banner start -->
<div class="banner banner-bg" id="particles-banner-wrapper">
    <div id="particles-banner"></div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item item-bg active">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-left">
                    <div class="carousel-content container">
                        <div class="t-center">
                            <h2 data-animation="animated fadeInDown delay-05s">Home is where
the heart is</h2>
                            <p class="text-p" data-animation="animated fadeInUp delay-10s">
                                Here You Can Find A Dream House With Extrime Facilities.
                            </p>
                            <a data-animation="animated fadeInUp delay-10s" href="properties.php" class="btn btn-lg btn-theme">Buy Now</a>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item-bg">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-left">
                    <div class="carousel-content container">
                        <div class="t-right">
                            <h2 data-animation="animated fadeInDown delay-05s">Find Your Dream Properties</h2>
                            <p class="text-p" data-animation="animated fadeInUp delay-10s">
                                
                            </p>
                            <a data-animation="animated fadeInUp delay-10s" href="properties.php" class="btn btn-lg btn-round btn-theme">Buy Now</a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item-bg">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-left">
                    <div class="carousel-content container">
                        <div class="t-left">
                            <h2 data-animation="animated fadeInUp delay-05s">Best House Ever</h2>
                            <p class="text-p" data-animation="animated fadeInUp delay-10s">
                           
                            </p>
                            <a data-animation="animated fadeInUp delay-10s" href="properties.php" class="btn btn-lg btn-round btn-theme">Buy Now</a>
                           </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- banner end -->


<!-- Featured properties start -->

<?php include('include/header.php');?>
<!-- main header end -->

<!-- Sub banner start -->

<!-- Sub banner end -->

<!-- Properties list fullwidth start -->
<div class="properties-list-fullwidth content-area-2">
    <div class="container">
        <div class="option-bar d-none d-xl-block d-lg-block d-md-block d-sm-block">
            <div class="row clearfix">
                <div class="col-xl-4 col-lg-5 col-md-5 col-sm-5">
                    <h4>
                        <span class="heading-icon">
                            <i class="fa fa-caret-right icon-design"></i>
                            <i class="fa fa-th-large"></i>
                        </span>
                        <span class="heading">Properties
						11th Rudra Pvt.Ltd. is a renowened name in the field of real estate development. We believe that we have been blessed to build people's dreams through their homes and our tagline "Blessed to Build" amply state the same.
						We have designed, development and ececuted large scale projects to cater to the diversified needs of our client. Our project are known for their high quality standareds,best in class designs, timely delivery and am=n undisputed track record.
						Several of our projects have won many awards with the latest being the "BEST INTEGRATED TOWNSHIP OF THE YEAR AWARD 2015". We build passionately and our core philosophy is bassed on service to customers, which also reflects in our other ventures in the Education and Entarainment space.</span>
                    </h4>
                </div>
                <!--<div class="col-xl-8 col-lg-7 col-md-7 col-sm-7">
                    <div class="sorting-options clearfix">
                        <a href="properties-list-fullwidth.html" class="change-view-btn"><i class="fa fa-th-list"></i></a>
                        <a href="properties-grid-fullwidth.html" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                    </div>
                    <div class="search-area">
                        <select class="selectpicker search-fields" name="location">
                            <option>High to Low</option>
                            <option>Low to High</option>
                        </select>
                    </div>
                </div>-->
            </div>
        </div>
        <div class="subtitle">
            
        </div>
        <div class="row">
        <?php 
        include'include/config.php';
        $query1=mysqli_query($con,"select * from admin");
        $admin=mysqli_fetch_array($query1);
        
        $u_name=ucfirst($admin['name']);

$query=mysqli_query($con,"select * from property");
while($res=mysqli_fetch_array($query))
{
$id=$res['id'];
$img=$res['image'];

        ?>    
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                            <div class="tag button alt featured">Featured</div>
                            <div class="price-ratings-box">
                                <p class="price">
                                     <?php echo "Buy Now";?>
                                </p>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <img src="admin/images/property_image/<?php echo $img;?>" alt="property-1" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.php?id=<?php echo $id;?>" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                           <!-- <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>-->
                            <div class="property-magnify-gallery">
                                <a href="admin/images/property_image/<?php echo $img;?>" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="properties-details.php?id=<?php echo $id;?>"><?php echo $res['title'];?></a>
                        </h1>
                        <div class="location">
                            <a href="properties-details.php?id=<?php echo $id;?>">
                                <i class="fa fa-map-marker"></i><?php echo $res['address'];?>
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> <?php echo $res['bedroom'];?> : Bedroom
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> <?php echo $res['hall'];?> : Hall
                            </li>
                            <li>
                    </i>
                            </li>
                            <li>
                                <i class="fa fa-coffee"></i> <?php echo $res['kichan'];?> : kitchen
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#">
                         <i class="fa fa-user"></i> <?php echo $res['property_owner'];?>
                        </a>
                        <span>
                                <i class="fa fa-calendar-o"></i> Recently
                            </span>
                    </div>
                </div>
            </div>
<?php } ?>
            
        </div>
    </div>
</div>





<!-- Recent Properties end -->


<!-- Testimonial 2 start -->
<div class="testimonial-2 overview-bgi" style="background-image: url(assets/img/testimonial-property.jpg)">
    <div class="container">
        <div class="row">
            <div class="offset-lg-2 col-lg-8">
                <div class="testimonial-inner">
                    <header class="testimonia-header">
                        <h1>Testimonial</h1>
                    </header>
                    <div id="carouselExampleIndicators7" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="avatar">
                                            <img src="assets/img/avatar/avatar-2.jpg" alt="avatar-2" class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <p class="lead">
                                                               Director Of The Company 
															   </p>
                                        <div class="author-name">
                                           Ashish Badalwad
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="avatar">
                                            <img src="assets/img/avatar/satish.jpg" alt="avatar" class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <p class="lead">
                                          
										   Mr Satish Pillangwad is the visionary founder and chairman of 11th Rudra Reality Pvt. Ltd. He embodies the virtues of Thinking Big, Hardwaork and Humbleness which is reflected in each and every venture of his.
										   He runs a diversified business empire which has strong roots in Housing, Education and Entertainment.
										   His success in creating a world class coaching academies "Shambhavi's Academy Of Technoscience" , "Shambhavi's Medical & IIT Institute" & "Shambhavi's Academy"
										   is a testimony to his remarkable abilities and vision.Satish Pillangwad's latest realty venture project Rudra is bound to become a landmark in Nanded city.</p>
                                        <div class="author-name">
                                            Satish Pillangwad
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="avatar">
                                            <img src="assets/img/avatar/office_manager.jpg" alt="avatar-3" class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <p class="lead">
                                          Office Manager  </p>
                                        <div class="author-name">
                                            XYZ
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleIndicators7" role="button" data-slide="prev">
                            <span class="slider-mover-left" aria-hidden="true">
                                <i class="fa fa-angle-left"></i>
                            </span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators7" role="button" data-slide="next">
                            <span class="slider-mover-right" aria-hidden="true">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br/><br/><br/><br/>
<!-- Testimonial 2 end -->



<!-- partner start -->
<div class="container partner">
    <div class="main-title">
        <h1>Partners</h1>
    </div>
    <div class="row">
        <div class="multi-carousel" data-items="1,3,5,6" data-slide="1" id="multiCarousel"  data-interval="1000">
            <div class="multi-carousel-inner">
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Shambhavi's Academy of Technoscience</p>
                        <img src="assets/img/brands/brand-1.png" alt="brand">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Shambhavi's Medical & IIT Institute</p>
                        <img src="assets/img/brands/brand-2.png" alt="brand">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Shambhavi's Academy </p>
                        <img src="assets/img/brands/brand-3.png" alt="brand">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Rudra </p>
                        <img src="assets/img/brands/brand-4.png" alt="brand">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Tuts</p>
                        <img src="assets/img/brands/brand-5.png" alt="brand">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Audiojungle</p>
                        <img src="assets/img/brands/brand-1.png" alt="brand">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Codecanyon</p>
                        <img src="assets/img/brands/brand-2.png" alt="brand">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Graphicriver</p>
                        <img src="assets/img/brands/brand-3.png" alt="brand">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Themeforest</p>
                        <img src="assets/img/brands/brand-4.png" alt="brand">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Tuts</p>
                        <img src="assets/img/brands/brand-5.png" alt="brand">
                    </div>
                </div>
            </div>
            <a class="multi-carousel-indicator leftLst" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="multi-carousel-indicator rightLst" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
</div>
<!-- partner end -->

<!-- Footer start -->
<?php include('include/footer.php');?>