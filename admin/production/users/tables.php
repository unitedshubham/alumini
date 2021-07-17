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

.preview img{
   display: none;
}
.preview1{
   width: 100px;
   height: 100px;
   border: 1px solid black;
   margin: 0 auto;
   background: white;
}

.preview1 img{
   display: none;
}
.preview2{
   width: 100px;
   height: 100px;
   border: 1px solid black;
   margin: 0 auto;
   background: white;
}

.preview2 img{
   display: none;
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

.preview3 img{
   display: none;
}
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
 
 

                        <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" >  <span class="required"></span>
                        </label>
                        
                      </div>
 

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"  >Username<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="last-name" required="required" class="form-control" id="username" name="username" id="username">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align" >password</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="form-control" type="text" name="password" id="password" >
                        </div>
                      </div>
                        
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >first_name <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="date-picker form-control" required="required" type="text" id="first_name" name="first_name">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >middle_name <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="date-picker form-control" required="required" type="text" id="middle_name" name="middle_name">
                        </div>
                      </div>
                    




                       <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >last_name <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="date-picker form-control" required="required" type="text" id="last_name" name="last_name">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >phone_no <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="date-picker form-control" required="required" type="text" id="phone_no" name="phone_no">
                        </div>
                      </div>

<div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >address <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="date-picker form-control" required="required" type="text" id="address" name="address">
                        </div>
                      </div>
                      

<div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >date_of_reg <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="date-picker form-control" required="required" type="text" id="date_of_reg" name="date_of_reg">
                        </div>
                      </div>
                      

   <div class="row">
     
   
        <div class="col-md-3 col-sm-3 ">
            <input type="file" id="file" name="file" />
          
        </div>
         <div class='preview col-md-2'>
            <img src="" id="img" width="100" height="100" align="right">

          
          
        </div>
          <div class="col-md-6 col-sm-6 ">  <input type="text" name="image1" id="image1" disabled></div>
        </div>
      
<br>


      


      

                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="button" id="submit" class="btn btn-success">Submit</button>
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


  
$("#submit").click(function(){



   var username= $('#username').val();
   var password= $('#password').val();
   var first_name= $('#first_name').val();
   var middle_name= $('#middle_name').val();
   var last_name= $('#last_name').val();
   var phone_no= $('#phone_no').val();
   var address= $('#address').val();
   var date_of_reg=$('#date_of_reg').val();
 



   var datastr= 'username='+username+'&password='+password+'&first_name='+first_name+'&middle_name='+middle_name+'&last_name='+last_name+'&phone_no='+phone_no+'&address='+address+'&date_of_reg='+date_of_reg ;






var reg = /^[0-9]+$/;

var letters = /^[0-9a-zA-Z]+$/;


if (username=='') {
  alert('enter user name');
}
      else if (letters.test(username) == false) 
    {
      alert('please enter alphanumeric characters for username');
    }

  else if(password==''){

    alert('enter password');
  } 


  else if(letters.test(password) == false) {
      alert('please enter password');
    }

      else if (first_name=='') {
alert('enter first name');
}

     else if (letters.test(first_name) == false) {
      alert('please enter first name');
     }

     else if (middle_name=='') {
alert('enter middle name');
}

     else if (letters.test(middle_name) == false) {
      alert('please enter middle name');

}

    else if (last_name=='') {
alert('enter last name');
}

     else if (letters.test(last_name) == false) {
      alert('please enter last name');


}
    else if (phone_no==''){
      alert('enter phone number');
    }
else if (reg.test(phone_no) == false) {
      alert('please enter phone number');


}

    else if (date_of_reg==''){
      alert('enter date_of_reg');
    }
else if (reg.test(date_of_reg) == false) {
      alert('please enter date_of_reg');


}
    else if (address==''){
      alert('enter address');
    }
else if (letters.test(address) == false) {
      alert('please enter address');

    }
    else if(image1==''){

      alert(' upload image1 please');
    }
   else if(image2==''){

      alert(' upload image2 please');
    }
     else if(image3==''){

      alert(' upload image3 please');
    }
     else if(image4==''){

      alert(' upload image4 please');
    }
  
    
  

else{

      $.ajax({
        type: "POST",
        url:"insertuser.php",
        data: datastr,
        success: function(res){
  //For wait 5 seconds
  // setTimeout(function() 
  // {
  //   location.reload();  //Refresh page
  // }, 1000);
      
           
    

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
            url: 'upload5.php',
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

   

 

});


</script>