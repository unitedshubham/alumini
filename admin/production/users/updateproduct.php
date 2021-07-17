<?php 
$id = $_GET['id'];
require '../../connect.php';
$data = $conn->query("SELECT * FROM products where id = '".$id."'")->fetchAll();
// and somewhere later:
foreach ($data as $row) {

                          $product_name=$row['product_name'];
                          $product_desc=$row['product_desc'];
                          $product_note=$row['product_note'];
                          $discount_perc=$row['discount_perc'];
                          $price=$row['price'];
                          $disc_price=$row['disc_price'];
                          $stock=$row['stock'];
                          $offer=$row['offer'];
                          $image_1=$row['image_1'];
                          $image_2=$row['image_2'];
                          $image_3=$row['image_3'];
                          $image_4=$row['image_4'];
                   

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
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" >Product name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
      <input type="text"  required="required" class="form-control " id="productname" name="productname"  <?php echo 'value="'.$product_name.'"'
 ?>>
                        </div> 
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"  >Product description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="last-name" required="required" class="form-control" id="productdesc" name="productdesc" <?php echo 'value="'.$product_desc.'"';?>>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align" >Product note</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="form-control" type="text" name="productnote" id="productnote" <?php echo 'value="'.$product_note.'"';?>>
                        </div>
                      </div>
                        
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Price <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="date-picker form-control" required="required" type="text" id="price" name="price" <?php echo 'value="'.$discount_perc.'"'?>>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Discount percent <span class="required">
                        *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="date-picker form-control" required="required" type="text" id="discountperc" name="discountperc" <?php echo 'value="'.$price.'"'?>>
                        </div>
                      </div>
                      <br><br>





                       <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Discounted price <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="date-picker form-control" required="required" type="text" id="discprice" name="discprice" <?php echo 'value="'.$disc_price.'"'?>>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Stock <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="date-picker form-control" required="required" type="text" id="stock" name="stock"  <?php echo 'value="'.$stock.'"'?>>
                        </div>
                      </div>

<div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Offer <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="date-picker form-control" required="required" type="text" id="offer" name="offer" <?php echo 'value="'.$offer.'"'?>>
                        </div>
                      </div>

   <div class="row">
     
   
        <div class="col-md-3 col-sm-3 ">
            <input type="file" id="file" name="file" />
          
        </div>
         <div class='preview col-md-2'>
            <img <?php echo 'src="'.$image_1.'"'; ?> id="img" width="100" height="100" align="right">

          
          
        </div>
          <div class="col-md-6 col-sm-6 ">  <input type="text" name="image1" id="image1" disabled <?php echo 'value="'.$image_1.'"'?>></div>
        </div>
      
<br>
        <div class="row">
     
   
        <div class="col-md-3 col-sm-3 ">
            <input type="file" id="file1" name="file1" />
            
        </div>
         <div class='preview1 col-md-2'>
            <img <?php echo 'src="'.$image_2.'"'; ?> id="img1" width="100" height="100" align="right">

          
          
        </div>
         <div class="col-md-6 col-sm-6 ">  <input type="text" name="image2" id="image2" disabled <?php echo 'value="'.$image_2.'"'?>></div>
        </div>
       
<br>
        <div class="row">
     
   
        <div class="col-md-3 col-sm-3 ">
            <input type="file" id="file2" name="file2" />
           
        </div>
         <div class='preview2 col-md-2'>
            <img <?php echo 'src="'.$image_3.'"'; ?> id="img2" width="100" height="100" align="right">

          
          
        </div>
         <div class="col-md-6 col-sm-6 ">  <input type="text" name="image3" id="image3" disabled <?php echo 'value="'.$image_3.'"'?>></div>
        </div>
       
<br>

        <div class="row">
     
   
        <div class="col-md-3 col-sm-3 ">
            <input type="file" id="file3" name="file3" />
            
        </div>
         <div class='preview3 col-md-2'>
            <img <?php echo 'src="'.$image_4.'"'; ?> id="img3" width="100" height="100" align="right">

          
          
        </div>
          <div class="col-md-6 col-sm-6 ">  <input type="text" name="image4" id="image4" disabled <?php echo 'value="'.$image_4.'"'?>></div>
        </div>
      


      

                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <button class="btn btn-primary" type="button" button onclick="location.href = 'viewproduct.php';">Cancel</button>
						 
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


var id= $('#id').val();
   var productname= $('#productname').val();
   var productdesc= $('#productdesc').val();
   var productnote= $('#productnote').val();
   var discountperc= $('#discountperc').val();
   var price= $('#price').val();
   var discprice= $('#discprice').val();
   var stock= $('#stock').val();
   var offer= $('#offer').val();
   var image1=$('#image1').val();
   var image2=$('#image2').val();
   var image3=$('#image3').val();
   var image4=$('#image4').val();
   var Category=$('#Category').val();



   var datastr= 'productname='+productname+'&id='+id+'&productdesc='+productdesc+'&productnote='+productnote+'&discountperc='+discountperc+'&price='+price+'&discprice='+discprice+'&stock='+stock+'&offer='+offer+'&image1='+image1+'&image2='+image2+'&image3='+image3+'&image4='+image4+'&Category='+Category ;

if (productname=='') {
      alert('please enter product name');
    }
  else if (productdesc=='') {
      alert('please enter product description');
    }
     else if (productnote=='') {
      alert('please enter product note');
    }
    else if (discountperc=='') {
      alert('please enter discount percent');
    }
    else if (price=='') {
      alert('please enter discount percent');
    }
    else if (discprice=='') {
      alert('please enter discount price');
    }
    else if (stock=='') {
      alert('please enter stock');
    }
    else if (offer=='') {
      alert('please enter offer amount');
    }
    
  

else{

      $.ajax({
        type: "POST",
        url:"updateproduct1.php",
        data: datastr,
        success: function(res){
  window.location.replace("viewproduct.php");
      
           
    

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