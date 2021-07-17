<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>Alumini|Add Events </title>

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
                <h3>Add Event</h3>
              </div>

             
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><!-- Form Design --> <small>Event details</small></h2>
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
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" >Event Category  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                         <select name="Category" id="Category" class="form-control">
    <option value="Conventions">Conventions</option>
    <option value="College Event">College Event</option>
    <option value="Music festival">Music festival</option>
    <option value="Networking Events">Networking Events</option>
    <option value="Press conferences">Press conferences</option>
    <option value="Opening Ceremonies">Opening Ceremonies</option>
    <option value="Live Performances">Live Performances</option>
    <option value="Award Ceremonies">Award Ceremonies</option>
    <option value="Charity Events">Charity Events</option>
    <option value="Fundraising Events">Fundraising Events</option>
    <option value="Seminars">Seminars</option>
    <option value="Product Launches">Product Launches</option>
    <option value="Year End Functions">Year End Functions</option>
    <option value="Trade Shows / Expos">Trade Shows / Expos</option>
    <option value="Themed Parties">Themed Parties</option>

  </select>
                        </div>
                      </div>
 

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" >Event name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  required="required" class="form-control " id="eventname" name="eventname">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"  >Event description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="textarea"  name="last-name" required="required" class="form-control" id="eventdesc" name="eventdesc">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align" >Event note</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="form-control" type="text" name="eventnote" id="eventnote" >
                        </div>
                      </div>
                        
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Event start date <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="date-picker form-control" required="required" type="Date" id="sdate" name="start">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Event end date<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="date-picker form-control" required="required" type="Date" id="edate" name="end">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Event period <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="date-picker form-control" required="required" type="text" id="days" name="days" placeholder="No of event days">
                        </div>
                      </div>
                      <br><br>





                       <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Organiser<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="date-picker form-control" required="required" type="text" id="organiser" name="organiser">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Place<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="date-picker form-control" required="required" type="text" id="place" name="place">
                        </div>
                      </div>

<div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Offers <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="date-picker form-control" required="required" type="text" id="offer" name="offer">
                        </div>
                      </div>

   <div class="row">
     
   
        <div class="col-md-3 col-sm-3 ">
            <!-- <input type="file" id="file" name="file" /> -->
          
        </div>
         <div class='"col-md-3 col-sm-3 "'>
            <!-- <img src="" id="img" width="100" height="100" align="right">   -->    
            <input type="file" id="file" name="file" />    
          
        </div>
          <div class="col-md-6 col-sm-6 ">  <!-- <input type="text" name="image1" id="image1" disabled placeholder="Add poster"> --></div>
        </div>
      
<!-- <br>
         <div class="row">
     
   
        <div class="col-md-3 col-sm-3 ">
            <input type="file" id="file1" name="file1" />
            
        </div>
         <div class='preview1 col-md-2'>
            <img src="" id="img1" width="100" height="100" align="right">

          
          
        </div>
         <div class="col-md-6 col-sm-6 ">  <input type="text" name="image2" id="image2" disabled></div>
        </div> -->
       
<!-- <br> -->
        <!-- <div class="row">
     
   
        <div class="col-md-3 col-sm-3 ">
            <input type="file" id="file2" name="file2" />
           
        </div>
         <div class='preview2 col-md-2'>
            <img src="" id="img2" width="100" height="100" align="right">

          
          
        </div>
         <div class="col-md-6 col-sm-6 ">  <input type="text" name="image3" id="image3" disabled></div>
        </div> -->
       
<br>

        <!-- <div class="row">
     
   
        <div class="col-md-3 col-sm-3 ">
            <input type="file" id="file3" name="file3" />
            
        </div>
         <div class='preview3 col-md-2'>
            <img src="" id="img3" width="100" height="100" align="right">

          
          
        </div>
          <div class="col-md-6 col-sm-6 ">  <input type="text" name="image4" id="image4" disabled></div>
        </div> -->
      


      

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

            

                

               

                    <!-- start form for validation  -->
                    
                      

           

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
	  <script src="evalidate.js"></script>>
  </body>
</html>
<!-- <script type="text/javascript">

  $('#days').keyup(function(){

               var price= $('#price').val();
   var days= $('#days').val();
            
            var totvalue= (days/100)*price;

    var total=price-totvalue;
  $('#organiser').val(total);
        
});
  
$("#submit").click(function(){


   var eventname= $('#eventname').val();
   var eventdesc= $('#eventdesc').val();
   var eventnote= $('#eventnote').val();
   var sdate= $('#sdate').val();
   var edate= $('#edate').val();
   var days= $('#days').val();
   /*var price= $('#price').val();*/
   var organiser= $('#organiser').val();
   var place= $('#place').val();
   var offer= $('#offer').val();
   var image1=$('#image1').val();
   /*var image2=$('#image2').val();
   var image3=$('#image3').val(); 
   var image4=$('#image4').val();*/
   var Category=$('#Category').val();



   var datastr= 'eventname='+eventname+'&eventdesc='+eventdesc+'&eventnote='+eventnote+'&days='+days+'&organiser='+organiser+'&place='+place+'&offer='+offer+'&image1='+image1+'&Category='+Category ;




var reg = /^[0-9]+$/;

var letters = /^[0-9a-zA-Z]+$/;


if (eventname=='') {
  alert('enter Event name');
}
      else if (letters.test(eventname) == false) 
    {
      alert('please enter alphanumeric characters for eventname');
    }

  else if(eventdesc==''){

    alert('enter Event descrption');
  } 


  else if(letters.test(eventdesc) == false) {
      alert('please enter Event description');
    }

      else if (eventnote=='') {
      alert('enter Event note');
        }

     else if (letters.test(eventnote) == false) {
        alert('please enter Event note');
         }
    else if (days=='')  {
        alert('enter number of days event will be held');
    }

      
    else if (organiser=='') {

      alert("enter Organiser's name price")    
    }

    else if (letters.test(organiser) == false) {
      alert('please enter organiser name');
    }
      
    else if (offer==''){
      alert('enter offer price');
    }
    else if (reg.test(offer) == false) {
      alert('please enter offer');

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
        url:"inevents.php",
        data: datastr,
        success: function(res){
  //For wait 5 seconds
  setTimeout(function() 
  {
    location.reload();  //Refresh page
  }, 5000);

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


</script> -->