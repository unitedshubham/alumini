<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="profile_style.css">
  <title>Navodaya|Gallery </title>

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
        <h3>Gallery</h3>
      </div>

      
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Upload images to gallery</h2>
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

              <div id="preview"></div>
              <input type="file" id="file-input" name="files[]" multiple class="btn btn-success"/>
              <input type="submit" class="btn btn-success"/>



              <br><br>




              <div class="ln_solid"></div>
              

            </form>
          </div>
        </div>
      </div>
    </div>



    <?php
    if(isset($_FILES['files'])){
      $query = "INSERT into gallery(`FILE_NAME`,`FILE_SIZE`,`FILE_TYPE`)
      VALUES(:FILE_NAME,:FILE_SIZE,:FILE_TYPE)";
      $stmt  = $conn->prepare($query);
      $errors= array();
      foreach($_FILES['files']['tmp_name'] as $key => $error ){
        if ($error != UPLOAD_ERR_OK) {
          $errors[] = $_FILES['files']['name'][$key] . ' was not uploaded.';
          continue;
        }
        $file_name = $key.$_FILES['files']['name'][$key];

        $file_size = $_FILES['files']['size'][$key];
        $file_tmp  = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];  
        if($file_size > 5097152){
          $errors[] = 'File size must be less than 5 MB';
          continue;
        }
        try{       
          $stmt->bindParam( ':FILE_NAME', $file_name , PDO::PARAM_STR );
          $stmt->bindParam( ':FILE_SIZE', $file_size, PDO::PARAM_STR );
          $stmt->bindParam( ':FILE_TYPE', $file_type, PDO::PARAM_STR );
          $stmt->execute();

          $desired_dir="../../../gallery";

          if(is_dir($desired_dir)==false){
                mkdir($desired_dir, 0700);// Create directory if it does not exist
              }

              if(is_file($desired_dir.'/'.$file_name)==false){
                move_uploaded_file($file_tmp,$desired_dir.'/'.$file_name);

            }else{    //rename the file if another one exist
              $new_file=$desired_dir.'/'.time().$file_name;
              move_uploaded_file($file_tmp,$new_file) ;               
            }
          }catch(PDOException $e){
            $errors[] = $file_name . 'not saved in db.';
            echo $e->getMessage();
          }   
        }
        if(empty($error)){
          echo "Success";
        }
      }
      ?>



      

      <!-- start form for validation -->





      <!-- jQuery -->
      <?php require "../../vendors/js_files/jsscripts.php"; ?>
      <script type="text/javascript">
        function previewImages() {

          var preview = document.querySelector('#preview');
          
          if (this.files) {
            [].forEach.call(this.files, readAndPreview);
          }

          function readAndPreview(file) {

    // Make sure `file.name` matches our extensions criteria
    if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
      return alert(file.name + " is not an image");
    } // else...
    
    var reader = new FileReader();
    
    reader.addEventListener("load", function() {
      var image = new Image();
      image.height = 100;
      image.title  = file.name;
      image.src    = this.result;
      preview.appendChild(image);
    });
    
    reader.readAsDataURL(file);
    
  }

}

document.querySelector('#file-input').addEventListener("change", previewImages);

</script>
</body>
</html>
