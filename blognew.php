<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alumini|Blogs</title>
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
</head>
<body>
  
  <?php 

  $page = "index";
  require "header.php";

  $blog_id=$_GET['id'];

  ?>
  <!-- END nav -->
  
  <div class="hero-wrap hero-wrap-2" style="background-image: url('images/imgsrc/mix.png'); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-8 ftco-animate text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span class="mr-2"><a href="blog.php">Blog</a></span> <span>Blog Details</span></p>
          <h1 class="mb-3 bread">Blog Details</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-degree-bg">
    <div class="container">
      <div class="row">

        <?php 

        require 'connect.php';




        $sql= $conn->prepare("SELECT *,(SELECT type_id from users where users.user_id=blogs.created_by) as type_id FROM blogs where blog_id='".$blog_id."'");
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        if($sql->rowCount()>0){
          foreach (($sql->fetchAll()) as $key => $row) {

            $sql1= $conn->prepare("SELECT * FROM registration where registration_id='".$row['type_id']."'");
            $sql1->execute();
            $sql1->setFetchMode(PDO::FETCH_ASSOC);
            if($sql1->rowCount()>0){
              foreach (($sql1->fetchAll()) as $key => $row1) {
                

                echo '
                <div class="col-md-12 ftco-animate">
                <h2 class="mb-3">'.$row['blog_title'].'</h2>
                <p>'. $row['blog_desc'].'</p>
                <div class="row">
                <div class="col-md-3">
                
                <img src="admin/production/blogs/'.$row['blog_picture'].'" alt="" class="img-fluid">
                
                </div>

                </div> 
                '.$row['blog_maindesc'].'
                

                </div>';



              }
            }


          }
        }  

        ?>
        <!-- .col-md-8 -->
        

      </div>
    </div>
  </section> <!-- .section -->
  
<!-- 		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p></p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

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
    
  </body>
  </html>