<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alumini|Homepage</title>
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
  ?>
  <!-- END nav -->
  
  <div class="hero-wrap" style="background-image: url('images/imgsrc/img.jpg'); background-attachment:fixed;">
    <!--       <div class="overlay"></div> -->
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-8 ftco-animate text-center">
          <h1 class="mb-4">No Nation Can Prosper In Life Without Education</h1>
          <p><a href="register.php" class="btn btn-primary px-4 py-3">Register Now</a> </p>
        </div>
      </div>
    </div>
  </div>

    <!-- <section class="ftco-search-course">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="courseSearch-wrap d-md-flex flex-column-reverse">
    					<div class="full-wrap d-flex ftco-animate">
    						<div class="one-third order-last p-5">
    							<span>Know what you're after?</span>
    							<h3>I want to study</h3>
    							<form action="#" class="course-search-form">
		                <div class="form-group d-flex">
		                  <input type="text" class="form-control" placeholder="Type a course you want to study">
		                  <input type="submit" value="Search" class="submit">
		                </div>
		              </form>
		              <p>Just Browsing? <a href="#"> See all courses</a></p>
    						</div>
    						<div class="one-forth order-first img" style="background-image: url(images/image_1.jpg);"></div>
    					</div>
    					<div class="full-wrap ftco-animate">
    						<div class="one-half">
    							<div class="featured-blog d-md-flex">
    								<div class="image d-flex order-last">
    									<a href="#" class="img" style="background: url(images/image_2.jpg);"></a>
    								</div>
    								<div class="text order-first">
    									<span class="date">Aug 20, 2018</span>
    									<h3><a href="#">We Conduct Workshop 2018</a></h3>
											<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section> -->

    <section class="ftco-section" style="margin-top: -75px; margin-bottom: -150px;">
    	<div class="container">
    		<div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-3 py-4 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-exam"></span></div>
              <div class="media-body px-3">
                <h3 class="heading">Opportunities</h3>
                <p>Join the ex-students association to stay in touch and get involved by contributing time,effort and resources.
                </p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-3 py-4 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-blackboard"></span></div>
              <div class="media-body px-3">
                <h3 class="heading">History</h3>
                <p>In 19__ several gratuates of Alumini got together to create and organise the Alumini Foundation Association</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-3 py-4 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-books"></span></div>
              <div class="media-body px-3">
                <h3 class="heading">Events</h3>
                <p>On this page you will find information about upcoming class reunion,and contributing with your time effort and resources.</p>
              </div>
            </div>    
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section-3 img" style="background-image: url(images/imgsrc/img4.jpg);">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-center">
    			<div class="col-md-9 about-video text-center">
    				<h2 class="ftco-animate">Genius University is a Leading Schools Around the World</h2>
    				<div class="video d-flex justify-content-center">
    					<a href="https://vimeo.com/45830194" class="button popup-vimeo d-flex justify-content-center align-items-center"><span class="ion-ios-play"></span></a>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <section class="ftco-counter bg-light" id="section-counter">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
            <div class="row">
              <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                   
                    <?php  

                    require 'connect.php';
                    $data = $conn->query("SELECT count(blog_id) as Total1 FROM blogs")->fetchAll();
// and somewhere later:
                    foreach ($data as $row) {
                     
                      echo ' <strong class="number" data-number="'.$row['Total1'].'">';
                    }


                    ?>0</strong>
                    <span>Total Registered</span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <?php  


                    $data = $conn->query("SELECT count(job_id) as Total2 FROM jobs")->fetchAll();
// and somewhere later:
                    foreach ($data as $row) {
                     
                      echo ' <strong class="number" data-number="'.$row['Total2'].'">';
                    }


                    ?>0</strong>
                    <span>Job Opportunities</span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <?php  


                    $data = $conn->query("SELECT count(id) as Total3 FROM events")->fetchAll();
// and somewhere later:
                    foreach ($data as $row) {
                     
                      echo ' <strong class="number" data-number="'.$row['Total3'].'">';
                    }


                    ?>0</strong>
                    <span>Events</span>
                  </div>
                </div>
              </div>
		         <!--  <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="200">0</strong>
		                <span>Schools</span>
		              </div>
		            </div>
		          </div> -->
		        </div>
         </div>
       </div>
     </div>
   </section>

   <section class="ftco-section testimony-section">
    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Our Mission</h2>
        </div>
      </div>
      <div class="row justify-content-center mt-5">
        <div class="col-md-10 ftco-animate">
          <p>To develop and strengthen ties between our alumni and JNV, Canacona, by providing diverse tangible benefits including Career services, Networking opportunities, Industry-academic Linkages,
          Environmental conciousness, Mentoring, Locational advantages, community Outreach, Knowledge series and young connect. Further to engage and invoice alumni with JNV for future goals in order that every persons feels welcome and values as a member of Alumini Foundation.</p>
          
        </div>
      </div>
      

    </div>


    
  </section>

  <section class="ftco-section testimony-section" style="margin-top: -200px">
    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Our Vision</h2>
        </div>
      </div>
      <div class="row justify-content-center mt-5">
        <div class="col-md-10 ftco-animate">
          <p>A respectful, amiable & equitable endeavour involving and including alumni of all ages along with their families. Energetic communiel of responsible alumni who will contribute towards brand Alumini and act as goodwill ambassadors.</p>
          
        </div>
      </div>
      

    </div>


    
  </section>

  <section class="ftco-section testimony-section">
    <div class="container">
     <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">What Our Student Says</h2>
      </div>
    </div>
    <div class="row">
     <div class="col-md-12 ftco-animate">
      <div class="carousel-testimony owl-carousel">
        <div class="item">
          <div class="testimony-wrap text-center">
            <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
              <span class="quote d-flex align-items-center justify-content-center">
                <i class="icon-quote-left"></i>
              </span>
            </div>
            <div class="text">
              <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <p class="name">Dennis Green</p>
              <span class="position">CSE Student</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimony-wrap text-center">
            <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
              <span class="quote d-flex align-items-center justify-content-center">
                <i class="icon-quote-left"></i>
              </span>
            </div>
            <div class="text">
              <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <p class="name">Dennis Green</p>
              <span class="position">Math Student</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimony-wrap text-center">
            <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
              <span class="quote d-flex align-items-center justify-content-center">
                <i class="icon-quote-left"></i>
              </span>
            </div>
            <div class="text">
              <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <p class="name">Dennis Green</p>
              <span class="position">Science Students</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimony-wrap text-center">
            <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
              <span class="quote d-flex align-items-center justify-content-center">
                <i class="icon-quote-left"></i>
              </span>
            </div>
            <div class="text">
              <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <p class="name">Dennis Green</p>
              <span class="position">English Student</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

  <!--   <section class="ftco-section bg-light">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Management Advisor</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-4 mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/person_1.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.php">Ivan Jacobson</a></h3>
        					<span class="position">CSE Teacher</span>
        					<p class="ftco-social d-flex">
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
		              </p>
        				</div>
        			</div>
        			<div class="text">
        				<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-4 mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/person_2.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.php">Ivan Jacobson</a></h3>
        					<span class="position">CSE Teacher</span>
        					<p class="ftco-social d-flex">
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
		              </p>
        				</div>
        			</div>
        			<div class="text">
        				<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-4 mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/person_3.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.php">Ivan Jacobson</a></h3>
        					<span class="position">CSE Teacher</span>
        					<p class="ftco-social d-flex">
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
		              </p>
        				</div>
        			</div>
        			<div class="text">
        				<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
        			</div>
        		</div>
        	</div>
        </div>
      </div>
    </section> -->



    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Latest Events</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 d-flex ftco-animate">
           <div class="blog-entry align-self-stretch">
            <a href="blog-single.php" class="block-20" style="background-image: url('images/event-1.jpg');">
            </a>
            <div class="text p-4 d-block">
             <div class="meta mb-3">
              <div><a href="#">Sep. 10, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mb-4"><a href="#">Intern Bootcamp Meetup 2018</a></h3>
            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="event.php">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
       <div class="blog-entry d-flex align-self-stretch flex-column-reverse">
        <a href="blog-single.php" class="block-20" style="background-image: url('images/event-2.jpg');">
        </a>
        <div class="text p-4 d-block">
         <div class="meta mb-3">
          <div><a href="#">Sep. 10, 2018</a></div>
          <div><a href="#">Admin</a></div>
          <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
        </div>
        <h3 class="heading mb-4"><a href="#">Intern Bootcamp Meetup 2018</a></h3>
        <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        <p><a href="event.php">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
      </div>
    </div>
  </div>
  <div class="col-md-4 d-flex ftco-animate">
   <div class="blog-entry align-self-stretch">
    <a href="blog-single.php" class="block-20" style="background-image: url('images/event-3.jpg');">
    </a>
    <div class="text p-4 d-block">
     <div class="meta mb-3">
      <div><a href="#">Sep. 10, 2018</a></div>
      <div><a href="#">Admin</a></div>
      <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
    </div>
    <h3 class="heading mb-4"><a href="#">Intern Bootcamp Meetup 2018</a></h3>
    <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
    <p><a href="event.php">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
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