
<?php
$id=$_REQUEST['id'];

echo $id ;

?>



<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome-free-5.6.3-web/css/all.css">
  <!-- Our Custom CSS style sheet -->
  <link rel="stylesheet" href="css/style.css">
  <title>Contact Us</title>
</head><section>
				  <div class="container">
      <div class="row">
        <div class="col-12">
          
          <hr />
        </div>
      </div>
    </div>
  </section>

  <section class="form-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form action="save_comments.php" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Full name *">

              </div>
              <div class="form-group col-md-6">
                <input type="email" name="email" class="form-control" placeholder="Email Address *">
              </div>
            </div>
			<input type="hidden" name="id" value="<?php echo $id ;?>">
<div class="form-row">
              <div class="form-group col-md-12">
                <input type="text" name="subject" class="form-control" placeholder="Subject *">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="number" name="phone" class="form-control" placeholder="Contact Number *">

              </div>
              
            </div>
            
            <div class="form-row">
              <div class="form-group col-md-12">
                  <textarea class="form-control" name="message" rows="3"></textarea>
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12 text-center">
                   <button type="submit" class="btn btn-primary"></i> Send Message</button>
                </div>
             </div>

          </form>

            </div>

				    </section>