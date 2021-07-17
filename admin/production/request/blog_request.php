<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blogs|Request</title>

    <!-- Bootstrap -->
   <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">
  </head>

  <?php require '../sidebar1.php';
  ?>
              

            
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">


            <div class="row">


             

     

       


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="content">
  <div class="container-fluid">
<center>
    <div class="title" style="color:black;"><h1 >Display Blogs</h1></div>
    <br>

    <div class="radio-inline">
      <label>
        
        <input type="radio" name="searchimages"  class="byid" id="bylec2" onchange="valuechange()" checked=""> Pending Blogs

        <input type="radio" name="searchimages" onchange="valuechange()"  id="full1"  >Accepted Blogs
       
     
        <input type="radio" name="searchimages"  class="byid" id="bylec" onchange="valuechange()"> Rejected Blogs
       
  
       
      </label>
    </div>
   
   
  
  </center>


<br>





</div> 

<!--______________________________________________________________________________________________________________________-->


<div class="col-md-12 col-sm-12 col-xs-12" id="display">
                <div class="x_panel">
       
          <div class="">


            <div class="row">


             

     

       


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2 style="color:blue;">Pending Blogs</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                 
          
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">




                      <thead>

                        

                        <tr>
                          <th>blog_id</th>
                          <th>blog_title</th>
                          <th>blog_desc</th>
                          <th>blog_maindesc</th>
                          <th>created_by</th>
                          <th>created_datetime</th>
                          <th>Action</th>
                        
                           
                      
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        error_reporting(0);


require '../../connect.php';
$data = $conn->query("SELECT * FROM blogs where status='0' ")->fetchAll();
// and somewhere later:
foreach ($data as $row) {
  echo '  <tr>
                          <td>'.$row['blog_id'].'</td>
                          <td>'.$row['blog_title'].'</td>
                          <td>'.$row['blog_desc'].'</td>
                          <td>'.$row['blog_maindesc'].'</td>
                          <td>'.$row['created_by'].'</td>
                          <td>'.$row['created_datetime'].'</td>
                       
                          <td>
                          <button onclick=\'viewfunc("' .$row["blog_id"]. '")\'><i class="fa fa-eye" style="color: blue;" >   </i></button>

                          <button onclick=\'acceptfunc("' .$row["blog_id"]. '")\'><i class="fa fa-check" style="color: green;" >   </i></button>
                         

                          <button onclick=\'deletefunc("' .$row["blog_id"]. '")\'><i class="fa fa-close" style="color: red;" >   </i></button>
                           
                          </td>
                           
                        </tr>';

}



?>
                      </tbody>
                    </table>
          
          
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
</div>











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
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!------------------------------------- Custom Theme Scripts ------------------------------------------------------->
    <script src="../../build/js/custom.min.js"></script>

    <script type="text/javascript">
      

      function editfunc(id)
    { 

  window.location.href='updatestatus.php?id='+id;


          
        };
    </script>

    <script type="text/javascript">

    




    function valuechange() {
      if (document.getElementById("full1").checked == true) {

        $('#display').load('accepted_blogs.php');
      

      } 
      else if (document.getElementById("bylec").checked == true) {

        $('#display').load('rejected_blogs.php');

      }
      
    

     else if (document.getElementById("bylec2").checked == true) {

        $('#display').load('pending_blogs.php');

      }
      
    }





function viewfunc(blog_id)
    { 


      
      
    var dataString = 'id='+ blog_id;


      var file="../blogs/view_blogs_load.php";
      $('#display').load(file,{id:blog_id});
          
        };





   function acceptfunc(blog_id)
    { 

      

    var dataString = 'id='+ blog_id;


      $.ajax({ 
        type: "POST",
        url: "approved_blogs.php",
        data: dataString,
        cache: false,
          success:function(data){
            if(data == 1){
            
             window.location.reload();
          
          }
          else{

          
        }
      }





      });
          
        };




   function deletefunc(blog_id)
    { 

      

    var dataString = 'id='+ blog_id;


      $.ajax({ 
        type: "POST",
        url: "refused_blogs.php",
        data: dataString,
        cache: false,
          success:function(data){
            if(data == 1){
            
             window.location.reload();
          
          }
          else{

          
        }
      }





      });
          
        };      
         
  </script>

  </body>
</html>