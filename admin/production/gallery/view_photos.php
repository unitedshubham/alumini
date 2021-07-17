<!DOCTYPE html>
<html lang="en">
<head>

  <title>Nav </title>

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
  
  <link href='simplelightbox-master/dist/simplelightbox.min.css' rel='stylesheet' type='text/css'>
  <script src='jquery-3.0.0.js' type='text/javascript'></script> 
  <script type="text/javascript" src="simplelightbox-master/dist/simple-lightbox.js"></script>

  <link href='style.css' rel='stylesheet' type='text/css'>
  
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
            

          <div class='container'>
        <div class="gallery">
              
            <?php 
            // Image extensions
            $image_extensions = array("png","jpg","jpeg","gif");

            // Target directory
            $dir = 'images/';
            if (is_dir($dir)){
                
                if ($dh = opendir($dir)){
                    $count = 1;

                    // Read files
                    while (($file = readdir($dh)) !== false){

                        if($file != '' && $file != '.' && $file != '..'){
                            
                            // Thumbnail image path
                            $thumbnail_path = "images/thumbnail/".$file;

                            // Image path
                            $image_path = "images/".$file;
                            
                            $thumbnail_ext = pathinfo($thumbnail_path, PATHINFO_EXTENSION);
                            $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);

                            // Check its not folder and it is image file
                            if(!is_dir($image_path) && 
                                in_array($thumbnail_ext,$image_extensions) && 
                                in_array($image_ext,$image_extensions)){
                                ?>

                                <!-- Image -->
                                <a href="<?php echo $image_path; ?>">
                                    <img src="<?php echo $thumbnail_path; ?>" alt="" title=""/>
                                </a>
                                <!-- --- -->
                                <?php

                                // Break
                                if( $count%4 == 0){
                                ?>
                                    <div class="clear"></div>
                                <?php    
                                }
                                $count++;
                            }
                        }
                            
                    }
                    closedir($dh);
                }
            }
            ?>
            </div>
</div>


          </div>
        </div>
      </div>
    </div>







    <!-- start form for validation -->





    <!-- jQuery -->
    <?php require "../../vendors/js_files/jsscripts.php"; ?>

    <script type='text/javascript'>
        $(document).ready(function(){

            // Intialize gallery
            var gallery = $('.gallery a').simpleLightbox();
        });
        </script>
  </body>
  </html>
