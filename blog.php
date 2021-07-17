<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alumini|Blog</title>
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

  $page = "blog";
  require "header.php";
  ?>
  <!-- END nav -->
  
  <div class="hero-wrap hero-wrap-2" style="background-image: url('images/imgsrc/mix.png'); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container" style="margin-bottom: 60px">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-8 ftco-animate text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Blog</span></p>
          <h1 class="mb-3 bread">Blog</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section">
    <div class="container">
      <div class="row d-flex">
        <?php 

        require 'connect.php';




        $sql= $conn->prepare("SELECT *,(SELECT type_id from users where users.user_id=blogs.created_by) as type_id FROM blogs where status='1'");
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        if($sql->rowCount()>0){
          foreach (($sql->fetchAll()) as $key => $row) {

            $sql1= $conn->prepare("SELECT * FROM registration where registration_id='".$row['type_id']."'");
            $sql1->execute();
            $sql1->setFetchMode(PDO::FETCH_ASSOC);
            if($sql1->rowCount()>0){
              foreach (($sql1->fetchAll()) as $key => $row1) {
                

                echo ' <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                <a href="blognew.php?id='.$row['blog_id'].'" class="block-20" ><img width="300px" src="admin/production/blogs/'.$row['blog_picture'].'">
                </a>
                <div class="text p-4 d-block">
                <div class="meta mb-3">
                <div>'.$row['created_datetime'].'</div>
                <div><a href="#">'.$row1['first_name'].' '.$row1['last_name'].'</a></div>
                
                </div>
                <h3 class="heading mt-3"><a href="blognew.php?id='.$row['blog_id'].'">'.$row['blog_title'].'</a></h3>
                <p>'. $row['blog_desc'].'</p>
                </div>
                </div>
                </div>';



              }
            }


          }
        }  

        ?>
        
        <!-- <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>    for chat umber           -->
        
      </div>

<!--        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> -->
      </div>
    </section>
    
    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
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
    
  </body>
  </html>