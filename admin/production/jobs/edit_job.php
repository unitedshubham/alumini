<?php
require '../../connect.php';



$job_id = $_POST['id'];


$data = $conn->query("SELECT * from jobs where job_id= $job_id and status='1'")->fetchAll();
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
                <span id="job_id" style="display:none;"> <?php echo $job_id; ?></span>
                <label class="col-form-label col-md-3 col-sm-3 label-align">Job Title <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text"  class="form-control " id="job_title" placeholder="<?php echo $row['job_title']; ?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align"  >Job Description <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text"  name="last-name" placeholder="<?php echo $row['job_desc']; ?>" class="form-control" id="job_description" name="productdesc">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" >Number of Vacancies </label>
                <div class="col-md-6 col-sm-6 ">
                  <input  class="form-control" type="text" placeholder="<?php echo $row['vacancy']; ?>" id="vacancy" >
                </div>
              </div>
              <div class="item form-group">
                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align" >Educational Qualification Required </label>
                <div class="col-md-6 col-sm-6 ">
                  <input  class="form-control" type="text" placeholder="<?php echo $row['edu_qual']; ?>" id="edu_qualification_required" >
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" >Work Experience </label>
                <div class="col-md-6 col-sm-6 ">
                  <input  class="form-control" type="text" placeholder="<?php echo $row['work_experience']; ?>" id="Work_experience" >
                </div>
              </div>
              
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" >Salary <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="salary_begin" placeholder="<?php echo $row['salary_begin']; ?>">
                  <span>to</span>
                  <input type="text" id="salary_end" placeholder="<?php echo $row['salary_end']; ?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" >Job Type <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input  class="date-picker form-control" placeholder="<?php echo $row['job_type']; ?>" type="text" id="job_type" >
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" >Job End Date <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input  class="date-picker form-control" placeholder="<?php echo $row['job_enddate']; ?>" type="text" id="job_end_date" >
                </div>
              </div>
              <br><br>





              


              


              

              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                  <button class="btn btn-primary" type="button">Cancel</button>
                  <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="button" id="update_job_submit" class="btn btn-success">Submit</button>
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
