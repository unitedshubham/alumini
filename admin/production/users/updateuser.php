<?php 
$id = $_GET['id'];
require '../../connect.php';
$data = $conn->query("SELECT * FROM login where id = '".$id."'")->fetchAll();
// and somewhere later:
foreach ($data as $row) {

                          $username=$row['username'];
                          $password=$row['password'];
                          $first_name=$row['first_name'];
                          $middle_name=$row['middle_name'];
                          $last_name=$row['last_name'];
                          $phone_no=$row['phone_no'];
                          $address=$row['address'];
                          $date_of_reg=$row['date_of_reg'];
                          

}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>WishKar </title>

    <!-- Bootstrap -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">

    <style type="text/css">
      

/* Preview */
.preview{
   width: 100px;
   height: 100px;
   border: 1px solid black;
   margin: 0 auto;
   background: white;
}


.preview1{
   width: 100px;
   height: 100px;
   border: 1px solid black;
   margin: 0 auto;
   background: white;
}


.preview2{
   width: 100px;
   height: 100px;
   border: 1px solid black;
   margin: 0 auto;
   background: white;
}


.but_upload1{
  border: 0px;
   background-color: deepskyblue;
   color: white;
   padding: 5px 15px;
   margin-left: 10px;
}
.but_upload2{
  border: 0px;
   background-color: deepskyblue;
   color: white;
   padding: 5px 15px;
   margin-left: 10px;
   }
   .but_upload3{
  border: 0px;
   background-color: deepskyblue;
   color: white;
   padding: 5px 15px;
   margin-left: 10px;
 }
 .but_upload4{
  border: 0px;
   background-color: deepskyblue;
   color: white;
   padding: 5px 15px;
   margin-left: 10px;
 }
.preview3{
   width: 100px;
   height: 100px;
   border: 1px solid black;
   margin: 0 auto;
   background: white;
}

/*.preview3 img{
   display: none;
}*/
/* Button */
.button{
   border: 0px;
   background-color: deepskyblue;
   color: white;
   padding: 5px 15px;
   margin-left: 10px;
}
.button1{
   border: 0px;
   background-color: deepskyblue;
   color: white;
   padding: 5px 15px;
   margin-left: 10px;
}
.button2{
   border: 0px;
   background-color: deepskyblue;
   color: white;
   padding: 5px 15px;
   margin-left: 10px;
}
.button3{
   border: 0px;
   background-color: deepskyblue;
   color: white;
   padding: 5px 15px;
   margin-left: 10px;
}
    </style>
  </head>

  

            <!-- sidebar menu -->
            <?php require '../sidebar1.php';
            ?>



  <input type="hidden"  required="required" class="form-control " id="id" name="id"  <?php echo 'value="'.$id.'"'
 ?>>


              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
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
                      <img src="images/img.jpg" alt="">John Doe
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                      <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
  
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
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Elements</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Design <small>different form elements</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">


                          <li><a class="dropdown-item" href="#">Settings 1</a>
                          </li>
                          <li><a class="dropdown-item" href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                   <form method="post" action="" enctype="multipart/form-data" id="myform">
 
 <input type="hidden" id="id" name="id">

                        <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" >Category  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                         <select name="Category" id="Category" class="form-control">
    <option value="Cake">Cake</option>
    <option value="Flowers">Flowers</option>
    <option value="gifts">gifts</option>
   
  </select>
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" >username<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
      <input type="text"  required="required" class="form-control " id="productname" name="productname"  <?php echo 'value="'.$username.'"'
 ?>>
                        </div> 
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"  >password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="last-name" required="required" class="form-control" id="productdesc" name="productdesc" <?php echo 'value="'.$password.'"';?>>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align" >first_name</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="form-control" type="text" name="productnote" id="productnote" <?php echo 'value="'.$first_name.'"';?>>
                        </div>
                      </div>
                        
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >middle_name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="date-picker form-control" required="required" type="text" id="price" name="price" <?php echo 'value="'.$middle_name.'"'?>>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >last_name <span class="required">
                        *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="date-picker form-control" required="required" type="text" id="discountperc" name="discountperc" <?php echo 'value="'.$last_name.'"'?>>
                        </div>
                      </div>
                      <br><br>





                       <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >phone_no <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="date-picker form-control" required="required" type="text" id="discprice" name="discprice" <?php echo 'value="'.$phone_no.'"'?>>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >address <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="date-picker form-control" required="required" type="text" id="stock" name="stock"  <?php echo 'value="'.$address.'"'?>>
                        </div>
                      </div>

<div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >date_of_reg <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="date-picker form-control" required="required" type="text" id="offer" name="offer" <?php echo 'value="'.$date_of_reg.'"'?>>
                        </div>
                      </div>

   <div class="row">
     
   
       
         
          
        </div>
      
<br>
        
       
<br>
        
       
<br>

        
      


      

                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <button class="btn btn-primary" type="button" button onclick="location.href = 'viewusers.php';">Cancel</button>
						 
                          <button type="button" id="update" class="btn btn-success">update</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

            

                

               

                    <!-- start form for validation -->
                    
                      

           

    <!-- jQuery -->
    <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../../vendors/moment/min/moment.min.js"></script>
    <script src="../../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>
	
  </body>
</html>
<script type="text/javascript">

  $('#discountperc').keyup(function(){

               var price= $('#price').val();
   var discountperc= $('#discountperc').val();
            
            var totvalue= (discountperc/100)*price;

    var total=price-totvalue;
  $('#discprice').val(total);
        
});
  
$("#update").click(function(){



   var username= $('#username').val();
   var password= $('#password').val();
   var first_name= $('#first_name').val();
   var middle_name= $('#middle_name').val();
   var last_name= $('#last_name').val();
   var phone_no= $('#phone_no').val();
   var address= $('#address').val();
   var date_of_reg= $('#date_of_reg').val();
 



   var datastr= 'username='+username+'&password='+password+'&first_name='+first_name+'&middle_name='+middle_name+'&last_name='+last_name+'&phone_no='+phone_no+'&address='+address+'&date_of_reg='+date_of_reg ;

if (username=='') {
      alert('please enter username');
    }
  else if (password=='') {
      alert('please enter password');
    }
     else if (first_name=='') {
      alert('please enter first name');
    }
    else if (middle_name=='') {
      alert('please enter middle name');
    }
    else if (last_name=='') {
      alert('please enter last name');
    }
    else if (phone_no=='') {
      alert('please enter phone no');
    }
    else if (address=='') {
      alert('please enter address');
    }
    else if (date_of_reg=='') {
      alert('please enter date of registry ');
    }
    
  

else{

      $.ajax({
        type: "POST",
        url:"updateuser1.php",
        data: datastr,
        success: function(res){
  window.location.replace("viewusers.php");
      
           
    

        }


      });

  


}



  });




$(document).ready(function(){



      $('#file').change(function(){

        var fd = new FormData();
        var files = $('#file')[0].files[0];
        fd.append('file',files);

        $.ajax({
            url: 'upload.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                if(response != 0){
                    $("#img").attr("src",response); 
                    $('#image1').val(response);
                    $(".preview img").show(); // Display image element
                }else{
                    alert('file not uploaded');
                }
            },
        });
    });

    $('#file1').change(function(){

        var fd = new FormData();
        var files = $('#file1')[0].files[0];
        fd.append('file',files);

        $.ajax({
            url: 'upload1.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                if(response != 0){
                    $("#img1").attr("src",response); 
                    $('#image2').val(response);
                    $(".preview1 img").show(); // Display image element
                }else{
                    alert('file not uploaded');
                }
            },
        });
    });

    $('#file2').change(function(){

        var fd = new FormData();
        var files = $('#file2')[0].files[0];
        fd.append('file',files);

        $.ajax({
            url: 'upload2.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                if(response != 0){
                    $("#img2").attr("src",response); 
                    $('#image3').val(response);
                    $(".preview2 img").show(); // Display image element
                }else{
                    alert('file not uploaded');
                }
            },
        });
    });

    $('#file3').change(function(){

        var fd = new FormData();
        var files = $('#file3')[0].files[0];
        fd.append('file',files);

        $.ajax({
            url: 'upload3.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                if(response != 0){
                    $("#img3").attr("src",response); 
                    $('#image4').val(response);
                    $(".preview3 img").show(); // Display image element
                }else{
                    alert('file not uploaded');
                }
            },
        });
    });
});


</script>