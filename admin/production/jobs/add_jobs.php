<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title> </title>

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
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" >Job Title <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text"  required="required" class="form-control " id="job_title" name="productname">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"  >Job Description <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text"  name="last-name" required="required" class="form-control" id="job_description" name="productdesc">
                </div>
              </div>
              <div class="item form-group">
                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align" >Number of Vacancies </label>
                <div class="col-md-6 col-sm-6 ">
                  <input  class="form-control" type="text" name="productnote" id="vacancy" >
                </div>
              </div>
              <div class="item form-group">
                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align" >Educational Qualification Required </label>
                <div class="col-md-6 col-sm-6 ">
                  <input  class="form-control" type="text" name="productnote" id="edu_qualification_required" >
                </div>
              </div>
              <div class="item form-group">
                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align" >Work Experience </label>
                <div class="col-md-6 col-sm-6 ">
                  <input  class="form-control" type="text" name="productnote" id="Work_experience" >
                </div>
              </div>
              
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" >Salary <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input   required="required" type="text" id="salary_begin" name="price">
                  <span>to</span>
                  <input   required="required" type="text" id="salary_end" name="price">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" >Job Type <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input  class="date-picker form-control" required="required" type="text" id="job_type" name="discountperc">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" >Job End Date <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input  class="date-picker form-control" required="required" type="text" id="job_end_date" name="discountperc">
                </div>
              </div>
              <br><br>





              


              


              

              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                  <button class="btn btn-primary" type="button">Cancel</button>
                  <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="button" id="add_job_submit" class="btn btn-success">Submit</button>
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
    <script src="input_db.js"></script>
    
  </body>
  </html>
