<?php

require '../../connect.php';
require "session.php";

?>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><img src="../nav.png" style="width: 15%">Alumini</a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <?php





              $data = $conn->query("SELECT * FROM registration WHERE registration_id='".$type_id."'")->fetchAll();
// and somewhere later:
              foreach ($data as $row) {


                // echo '
                // <img class="img-circle profile_img" width="200px" src="../'.$row['profile_picture'].'">';

              }
              ?>
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2><?php echo $username1;


              ?></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />



          <?php 
          if ($user_type=='admin') {
            echo'            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
            <h3>General</h3>
            <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
            <li><a href="index.php">Dashboard</a></li>
            
            </ul>
            </li>
            <li><a><i class="fa fa-desktop"></i> Register Student <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
            <li><a href="view_customers.php">View Student</a></li>
            
            
            </ul>
            </li>
            <li><a><i class="fa fa-table"></i> Users <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
            <li><a href="users/tables.php">Add new users</a></li>
            <li><a href="users/viewusers.php">View new users</a></li>
            </ul>
            </li>
            <li><a><i class="fa fa-edit"></i>Add Events <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
            <li><a href="events/addevents.php">Add Event</a></li>
            
            <li><a href="products/viewevents.php">View Event</a></li>
            
            </ul>
            </li>
            <li><a><i class="fa fa-edit"></i>Add Jobs <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
            <li><a href="jobs/add_jobs.php">Add Jobs</a></li>
            
            <li><a href="jobs/view_jobs.php">View Jobs</a></li>
            
            </ul>
            </li>
            <li><a><i class="fa fa-edit"></i>Add Blogs <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
            <li><a href="blogs/add_blogs.php">Add Blogs</a></li>
            
            <li><a href="blogs/view_blogs.php">View Blogs</a></li>
            
            </ul>
            </li>


            <li><a><i class="fa fa-image"></i>Gallery <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
            <li><a href="gallery/add_photos.php">Add Photos</a></li>
            <li><a href="gallery/view_photos.php">View Photos</a></li>
            
           
            </ul>
            </li>





            
            <li><a><i class="fa fa-bar-chart-o"></i> Request <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
            <li><a href="request/neworders.php">new request</a></li>
            <li><a href="request/job_request.php">Jobs request</a></li>
            <li><a href="request/blog_request.php">Blogs request</a></li>
            </ul>
            </li>
         
            </ul>
            </div>



            
            

            </div>';
          } 
          else{
            echo '            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
            <h3>General</h3>
            <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
            <li><a href="index1.php">Dashboard</a></li>
            
            </ul>
            </li>
            
            
            <li><a><i class="fa fa-edit"></i>Add Events <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
            <li><a href="events/addevents.php">Add Event</a></li>
            
            <li><a href="events/viewevents.php">View Event</a></li>
            
            </ul>
            </li>
            <li><a><i class="fa fa-edit"></i>Add Jobs <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
            <li><a href="jobs/add_jobs.php">Add Jobs</a></li>
            
            <li><a href="jobs/view_jobs.php">View Jobs</a></li>
            
            </ul>
            </li>
            <li><a><i class="fa fa-edit"></i>Add Blogs <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
            <li><a href="blogs/add_blogs.php">Add Blogs</a></li>
            
            <li><a href="blogs/view_blogs.php">View Blogs</a></li>
            
            </ul>
            </li>


            <li><a><i class="fa fa-image"></i>Gallery <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
            <li><a href="gallery/add_photos.php">Add Photos</a></li>
            <li><a href="gallery/view_photos.php">View Photos</a></li>
            
            
            
            
            </ul>
            </li>





            
            
            
            </ul>
            </div>



            
            

            </div>';
          }



          ?>

          

          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <?php





                  $data = $conn->query("SELECT * FROM registration WHERE registration_id='".$type_id."'")->fetchAll();
// and somewhere later:
                  foreach ($data as $row) {


                    echo '
                    <img src="'.$row['profile_picture'].'">';

                  }
                  ?>




                  <?php echo $username1;?>
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item"  href="profile1.php">PROFILE</a>
                  
                  <a class="dropdown-item"  href="change_password/change_password.php">CHANGE PASSWORD</a>
                  
                  <a class="dropdown-item"  href="Logout.php"><i class="fa fa-sign-out pull-right"></i>LOG OUT</a>
                </div>
              </li>
<!-- 
                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li> -->
              </ul>
            </nav>
          </div>
        </div>