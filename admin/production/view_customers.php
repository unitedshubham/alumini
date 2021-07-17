.<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alumini </title>

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
            ?>
           
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">


            <div class="row">


             

     

       


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registration </h2>
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
                         
                          <th>First Name</th>
                          <th>Middle Name</th>
                          <th>Last Name</th>
                          <th>Email id</th>
                          <th>phone no</th>
                           <th>Gender</th>
                          <th>Passing Year</th>
                           <th>Message</th>
                            <th>DOR</th>
                             <th>Action</th>
                              <th>Action</th>
                            
                      
                        </tr>
                      </thead>
                      <tbody>
                        <?php 

require '../connect.php';
$data = $conn->query("SELECT * from registration where status='0'")->fetchAll();
// and somewhere later:
foreach ($data as $row) {
  echo ' <tr>
                          <td>'.$row['first_name'].'</td>
                          <td>'.$row['middle_name'].'</td>
                          <td>'.$row['last_name'].'</td>
                          <td>'.$row['email'].'</td>
                          <td>'.$row['contact_no'].'</td>
                          <td>'.$row['gender'].'</td>
                          <td>'.$row['passing_year'].'</td>
                          <td>'.$row['messages'].'</td>
                          <td>'.$row['registration_date'].'</td>
                            <td><input type="button" value="Accept" onclick=\'editfunc("' .$row["registration_id"]. '")\' ></td>
                            <td><input type="button" value="Reject" onclick=\'deletefunc("' .$row["registration_id"]. '")\'></td>
                         
                        
                          


                          
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

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script type="text/javascript">
      
      function deletefunc(registration_id)
    { 

      

    var dataString = 'id='+ registration_id;


      $.ajax({
        type: "POST",
        url: "rejprod.php",
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



      function editfunc(registration_id)
    { 

      

    var dataString = 'id='+ registration_id;


      $.ajax({ 
        type: "POST",
        url: "accprod.php",
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