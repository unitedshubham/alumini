<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="profile_style.css">
  <title> </title>

  <!-- Bootstrap -->
  <?php require "../../vendors/css_file/styles.php"; ?>

  
</head>



<!-- sidebar menu -->
<?php require '../sidebar1.php';
?>



<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Form Elements</h3>
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
             
             <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="middle-name">Profile Picture <span class="required">*</span>
              </label>
              
              
              <div class="col-md-3 col-sm-3 ">
                <input type="file" id="profile_picture" name="file" />
                
              </div>
              <div class='preview col-md-2'>
                <img src="" id="img" width="100" height="100" align="right">

                
                
              </div>
              <div class="col-md-6 col-sm-6 ">  <input type="text" name="image1" id="image1" disabled></div>
            </div>

            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" >Blog Title <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text"  required="required" class="form-control " id="blog_title" name="productname">
              </div>
            </div>
            
            <div class="item form-group">
              <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align" >Short Description </label>
              <div class="col-md-6 col-sm-6 ">
                <textarea class="form-control" type="text" name="productnote"  id="short_description" ></textarea>
              </div>
            </div>
            <div class="item form-group">
              <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align" >Main Description </label>
              <div class="col-md-6 col-sm-6 ">
                <textarea class="form-control" type="text" name="productnote"  id="main_description" ></textarea>
              </div>
            </div>
            
            <br><br>




            <div class="ln_solid"></div>
            <div class="item form-group">
              <div class="col-md-6 col-sm-6 offset-md-3">
                <button class="btn btn-primary" type="button">Cancel</button>
                <button class="btn btn-primary" type="reset">Reset</button>
                <button type="button" id="blogsubmit" class="btn btn-success">Post</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

  

  

  

  <!-- start form for validation -->
  
  

  

  <!-- jQuery -->
  <?php require "../../vendors/js_files/jsscripts.php"; ?>
  <script type="text/javascript" src="blogs_post.js"></script>
  <script  type="text/javascript">
   
    $('#profile_picture').change(function(){

      var fd = new FormData();
      var files = $('#profile_picture')[0].files[0];
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


    
  </script>
  
</body>
</html>
