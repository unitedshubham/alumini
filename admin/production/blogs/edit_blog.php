<?php
require '../../connect.php';



$blog_id = $_POST['id'];


$data = $conn->query("SELECT * from blogs where blog_id= $blog_id ")->fetchAll();
                        // and somewhere later:
if($data){ echo "1";}else{ echo "0";}
foreach ($data as $row) { 
  ?>




  <!-- page content -->
  
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
              <span id="blog_id" style="display:none;"> <?php echo $blog_id; ?></span>
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="middle-name">Profile Picture <span class="required">*</span>
              </label>
              
              
              <div class="col-md-3 col-sm-3 ">
                <input type="file" id="profile_picture" name="file">
                
              </div>
              <div class='preview col-md-2'>
                <img src="<?php echo $row['blog_picture']; ?>" id="img" width="100" height="100" align="right">

                
                
              </div>
              <div class="col-md-6 col-sm-6 ">  <input type="text" name="image1" id="image1" disabled></div>
            </div>

            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" >Blog Title <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text"  required="required" class="form-control " id="blog_title" name="productname" placeholder="<?php echo $row['blog_title']; ?>">
              </div>
            </div>
            
            <div class="item form-group">
              <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align" >Short Description </label>
              <div class="col-md-6 col-sm-6 ">
                <textarea class="form-control" type="text" name="productnote"  id="short_description" placeholder="<?php echo $row['blog_desc']; ?>"></textarea>
                
              </div>
            </div>
            <div class="item form-group">
              <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align" >Main Description </label>
              <div class="col-md-6 col-sm-6 ">
                <textarea class="form-control" type="text" name="productnote"  id="main_description" placeholder="<?php echo $row['blog_maindesc']; ?>"></textarea>
              </div>
            </div>
            
            <br><br>





            


            


            

            <div class="ln_solid"></div>
            <div class="item form-group">
              <div class="col-md-6 col-sm-6 offset-md-3">
                <button class="btn btn-primary" type="button">Cancel</button>
                <button class="btn btn-primary" type="reset">Reset</button>
                <button type="button" id="update_blog_submit" class="btn btn-success">Post</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
    
    

    

    

    <!-- start form for validation -->
    
    

    

    <!-- jQuery -->
  <?php }
  
  require "../../vendors/js_files/jsscripts.php"; ?>
  <script src="update_db.js"></script>
  
</body>
</html>
