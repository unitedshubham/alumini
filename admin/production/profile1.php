.<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Navodaya|Profile </title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- bootstrap-progressbar -->
  <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- PNotify -->
  <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
  <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
  <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>


<!-- sidebar menu -->
<?php require 'sidebar.php';


$sql= $conn->prepare("SELECT * FROM registration where registration_id = '".$type_id."'");
$sql->execute();
$sql->setFetchMode(PDO::FETCH_ASSOC);
if($sql->rowCount()>0){
  foreach (($sql->fetchAll()) as $key => $row) {
    $first_name=$row['first_name'];
    $middle_name=$row['middle_name'];
    $last_name=$row['last_name'];
    $email=$row['email'];
    $contact_no=$row['contact_no'];
    $gender=$row['gender'];
    $passing_year=$row['passing_year'];
    $messages=$row['messages'];
    $registration_date=$row['registration_date'];
    $accepted_users=$row['accepted_users'];
    $accepted_date=$row['accepted_date'];
    $address=$row['address'];
    $blood_group=$row['blood_group'];
    $company_name=$row['company_name'];
    $country=$row['country'];
    $state=$row['state'];
    $city=$row['city'];
    $profile_picture=$row['profile_picture'];
    $designation=$row['designation'];
    

  }
}else{
  $first_name='';
  $middle_name='';
  $last_name='';
  $email='';
  $contact_no='';
  $gender='';
  $passing_year='';
  $messages='';
  $registration_date='';
  $accepted_users='';
  $accepted_date='';
  $address='';
  $blood_group='';
  $company_name='';
  $country='';
  $state='';
  $city='';
  $profile_picture='';
  $designation='';
}


?>

<!-- /top navigation -->

<!-- page content -->
 <div class="right_col" role="main">
     <div class="row col-md-12" style="display: inline-block;" >
    <div class="x_panel">

      <div class="x_content">
        <br />
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
<!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Profile picture <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <div class="container_img">
                <div class='preview'>
                  <img src="" id="profile_picture" width="100" height="100">
                </div>
                <div class="col-md-6 col-sm-6">

                  <input type="file" id="file" name="file" />
                  <input type="button" class="button" value="Upload" id="but_upload">
                </div>

              </div>
            </div>
          </div>
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
        <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="middle-name">Profile Picture<span class="required">*</span>
                        </label>
     
   
                        <div class="col-md-3 col-sm-3 ">
                            <input type="file" id="profile_picture" name="file" />
          
                        </div>
                         <div class='preview col-md-2'>
                            <img src="" id="img" width="100" height="100" align="right">

          
          
                       </div>
                         <div class="col-md-6 col-sm-6 ">  <input type="hidden" name="image1" id="image1" disabled></div>
                       </div>




          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">First Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="disabled" id="first_name" <?php echo 'value="'.$first_name.'"'?> required="required" class="form-control disabled">
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="middle-name">Middle Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="middle_name" <?php echo 'value="'.$middle_name.'"'?> required="required" class="form-control ">
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Last Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="last_name" <?php echo 'value="'.$last_name.'"'?> required="required" class="form-control ">
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="gender">Gender :</label>
            <p>
              Male:
              <input type="radio" class="flat" name="gender" id="gender" value="Male" checked="" required /> Female:
              <input type="radio" class="flat" name="gender" id="gender" value="Famale" />
            </p>

          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="cont_no">Contact No <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="contact_no" required="required" class="form-control ">
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="Email">E-mail <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="email" required="required" class="form-control ">
            </div>
          </div>
      <!--     <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="DOB">Date Of Birth <span class="required">*</span>
            </label>
            <div class='col-md-6 col-sm-6 '>

             <div class='input-group date' id='myDatepicker2'>
              <input type='date' class="form-control" class="form-control " id="date_of_birth" required="">
            </div>
          </div>


        </div> -->

        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="blood_group">Blood Group <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
            <input type="text" id="blood_group" required="required" class="form-control ">
          </div>
        </div>
        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Company Name<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
            <input type="text" id="company_name" required="required" class="form-control ">
          </div>
        </div>
        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Designation<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
            <input type="text" id="designation" required="required" class="form-control ">
          </div>
        </div>



        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Educational Qualification<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
            <input type="text" id="education_qual" required="required" class="form-control ">
          </div>
        </div>
        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Country <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
            <input type="text" id="country" required="required" class="form-control ">
          </div>
        </div>

        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">State <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
            <input type="text" id="state" required="required" class="form-control ">
          </div>
        </div>

        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">City <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
            <input type="text" id="city" required="required" class="form-control ">
          </div>
        </div>
        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="address">Address <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
            <input type="text" id="address" required="required" class="form-control ">
          </div>
        </div>









        <div class="ln_solid"></div>
        <div class="item form-group">
          <div class="col-md-6 col-sm-6 offset-md-3">
            <button class="btn btn-primary" type="button">Cancel</button>
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="button" id="formupdate" class="btn btn-success">Submit</button>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>
</div>


</div>
</div>
<!-- /page content -->

<!-- footer content -->
<footer>
  <div class="pull-right">
    <a href="http://navodayfoundation.com/">Navodya</a>
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="../vendors/jszip/dist/jszip.min.js"></script>
<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

<script src="update_formPost.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

<script>
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