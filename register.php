<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alumini|Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">

  
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> 
</head>
<body>
  
 <?php 

 $page = "register";
 require "header.php";

 ?>
 <!-- END nav -->
 
 <div class="hero-wrap hero-wrap-2" style="background-image: url('images/imgsrc/mix.png'); background-attachment:fixed;">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-8 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="index.php
          ">Home</a></span> <span>Register</span></p>
          <h1 class="mb-3 bread">Register</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        
        
        
      </div>
      <form action="#">
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
          	<h4 class="mb-4">Do you have any questions?</h4>
            
            <div class="form-group">
              <input type="text" class="form-control" id="fname" placeholder="Your First Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="mname" placeholder="Your Middle Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="lname" placeholder="Your Last Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="email" placeholder="Your Email">
            </div>
            
            
            <div class="form-group">
              <input type="number" class="form-control" id="contact_no" placeholder="Your contact no">
            </div>
            
            
            
            
          </div>

          <div class="col-md-6 pr-md-5">
            <br><br>
            
            <div class="form-group">
              <label>Gender:</label><br>
              <input type="radio" id="gender" value="male"> Male<br>
              <input type="radio" id="gender" value="female"> Female<br>
            </div>
            <label>Pass out year:</label>
            <div class="form-group">
              <input type="month" class="form-control" id="passing_year" placeholder="Your Middle Name">
            </div>
            
            <div class="form-group">
              <textarea  cols="30" rows="7" id="messages" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              
              <button type="button" id="formsubmit" class="btn btn-primary py-3 px-5">Send Message</button>
            </div>
            
            
          </div>

        </div>
      </form>
    </div>
  </section>
  
  <section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <!-- <h2>Subcribe to our Newsletter</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p> -->
                <div class="row d-flex justify-content-center mt-5">
                  <div class="col-md-8">
                <!--   <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php 


    require "footer.php";
    
    ?>
    
    
    

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <script src="registration_post.js"></script>
    
  </body>
  </html>