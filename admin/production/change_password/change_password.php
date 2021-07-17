      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="profile_style.css">
        <title>Alumini|Change password</title>

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

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> 
        <style type="text/css">
         
         .message {
          color: #FF0000;
          text-align: center;
          width: 100%;
        }
      </style>

      
    </head>

    

    <!-- sidebar menu -->
    <?php require '../sidebar1.php';
    ?>

    <?php

    if (count($_POST) > 0) {

     $data = $conn->query("SELECT * FROM users WHERE user_id='" . $_SESSION["user_id"] . "'")->fetchAll();
      // and somewhere later:
     foreach ($data as $row) {

      $ciphering2 = $_POST["currentPassword"];
      $newpass2= md5($ciphering2);


      if(!preg_match("#[0-9]+#",$_POST["newPassword"])) {
        $message = "Your Password Must Contain At Least 1 Number!";
        
      }
      elseif(!preg_match("#[A-Z]+#",$_POST["newPassword"])) {
        $message = "Your Password Must Contain At Least 1 Capital Letter!";
      }
      elseif(!preg_match("#[a-z]+#",$_POST["newPassword"])) {
        $message = "Your Password Must Contain At Least 1 Lowercase Letter!";
      } 
      
      
      elseif ($newpass2 == $row["password"]) {

        $ciphering = $_POST["newPassword"]; 
        $newpass = md5($ciphering);


        $sql = "UPDATE users SET password='" . $newpass . "' WHERE user_id='" . $_SESSION["user_id"] . "'";
        $stmt= $conn->prepare($sql);
        $result=$stmt->execute([$password,$user_id]);


        
        $message = "Password Changed";

        echo '<script>alert("Password Changed")</script>'; 
      } 
      else
        $message = "Current Password is not correct";

    }
  }
  ?>

  <!-- /top navigation -->

  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Change Password</h3>
        </div>

        
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <!--     <h2>Form Design</h2> -->
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
              <form name="frmChange" method="post"  action="" onSubmit="return validatePassword()" enctype="multipart/form-data">
                
                <div class="message"><?php if(isset($message)) { echo $message; } ?></div>  
                <div class="item form-group">
                 
                  <!-------------------------------------------------------------------------------------------------------------->
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="current_password" >Current Password<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 ">
                    <input type="password"  required="required" class="form-control " id="currentPassword" name="currentPassword">
                  </div>
                </div>
                <!----------------------------------------------------------------------------------------------------------------->                     
                <div class="item form-group">
                  <label for="new_password" class="col-form-label col-md-3 col-sm-3 label-align" >New Password</label>
                  <div class="col-md-6 col-sm-6 ">
                    <input type="password" minlength="8" required="required" class="form-control " id="newPassword" name="newPassword">
                  </div>
                </div>

                <!----------------------------------------------------------------------------------------------------------------->                     
                <div class="item form-group">
                  <label for="confirm_password" class="col-form-label col-md-3 col-sm-3 label-align" >Confirm Password</label>
                  <div class="col-md-6 col-sm-6 ">
                    <input type="password" minlength="8"  required="required" class="form-control " id="confirmPassword" name="confirmPassword">
                  </div>
                </div>
                <!----------------------------------------------------------------------------------------------------------------->                     
                <br><br>




                <div class="ln_solid"></div>
                <div class="item form-group">
                  <div class="col-md-6 col-sm-6 offset-md-3">
                   
                    <button type="submit" name="submit" class="btn btn-primary">Reset Password</button>
                    
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

      <script>
        function validatePassword() {
          var currentPassword,newPassword,confirmPassword,output = true;

          currentPassword = document.frmChange.currentPassword;
          newPassword = document.frmChange.newPassword;
          confirmPassword = document.frmChange.confirmPassword;

          if(!currentPassword.value) {
           currentPassword.focus();
           document.getElementById("currentPassword").innerHTML = "required";
           output = false;
         }
         else if(!newPassword.value) {
           newPassword.focus();
           document.getElementById("newPassword").innerHTML = "required";
           output = false;
         }
         else if(!confirmPassword.value) {
           confirmPassword.focus();
           document.getElementById("confirmPassword").innerHTML = "required";
           output = false;
         }
         if(newPassword.value != confirmPassword.value) {
           newPassword.value="";
           confirmPassword.value="";
           alert("Password Dont Match");
           newPassword.focus();
           document.getElementById("confirmPassword").innerHTML = "not same";
           output = false;
         } 	
         return output;
       }
     </script>


   </body>
   </html>
