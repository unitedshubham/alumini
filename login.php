<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alumini|Login</title>
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
          ">Home</a></span> <span>Login</span></p>
          <h1 class="mb-3 bread">Login</h1>
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
          <div class="col-md-12">
            <h4 class="mb-4" align="center">Login to your account</h4>
            
            <div class="form-group">
              <label>UserName</label>
              <input type="text" id="uname" class="form-control" placeholder="Your username">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" id="pass" class="form-control" placeholder="Your password">
            </div>
            

          </div>

          <div class="col-md-4"></div>
          <div class="col-md-2">     <input type="button" class="btn btn-primary py-3 px-5" id="login" value="Login">
          </div><div class="col-md-2"> 
            <p><a href="register.php" class="btn btn-primary px-4 py-3">Register Now</a> </p></div>


            
            
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
                  <!-- <form action="#" class="subscribe-form">
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
    <script src="loginmain.js"></script>
    
  </body>
  </html>