<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alumini|Events</title>

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
        <div class="right_col" role="main"  id="display">
          <div class="">


            <div class="row">


             

     

       


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Events</h2>
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
                          <th>Category</th>
                          <th>Event Name</th>
                          <th>Event Description</th>
                          <th>Event Note</th>
                          <th>Start Date</th>
                          <th>End Date</th>
                          <th>Days</th>
                          <th>Organiser</th>
                          <th>Place</th>
                          <th>Offers</th>
                          <th>Poster</th>
                          <th>Action</th>
                          
                         

                        </tr>
                      </thead>
                      <tbody>
                        <?php 

                      
require '../../connect.php';
$data = $conn->query("SELECT * FROM events where status='0' AND created_by='".$user_id."' ")->fetchAll();
// and somewhere later:
foreach ($data as $row) {
  echo ' <tr>
                          <td>'.$row['event_category'].'</td>
                          <td>'.$row['event_name'].'</td>
                          <td>'.$row['event_desc'].'</td>
                          <td>'.$row['event_note'].'</td>
                          <td>'.$row['event_sdate'].'</td>
                          <td>'.$row['event_edate'].'</td>
                          <td>'.$row['event_period'].'</td>
                          <td>'.$row['event_organiser'].'</td>
                          <td>'.$row['event_place'].'</td>
                          <td>'.$row['event_offer'].'</td>
                          <td>'.$row['event_poster'].'</td>
                          
            
                          
                          <td><input type="button" value="view" onclick=\'viewfunc("' .$row["id"]. '")\'>
                         
                           <input type="button" value="delete" onclick=\'deletefunc("' .$row["id"]. '")\' >
                           <input type="button" value="edit" onclick=\'editfunc("' .$row["id"]. '")\' >
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
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <!-- Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a> -->
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

    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>

    <script src="event_status.js"></script>

    <!-- <script type="text/javascript">
      

      function editfunc(id)
      { 
        window.location.href='updateproduct.php?id='+id;          
      };


      function deletefunc(id)
      { 
        var dataString = 'id='+ id;


        $.ajax({
          type: "POST",
          url: "delete_event.php",
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

      function viewfunc(id)
      { 

        alert("dfd");


        var dataString = 'id='+ id;


        var file="viewevents_load.php";
        $('#display').load(file,{id:id});

      }; function editfunc(id)
      { 
        window.location.href='updateproduct.php?id='+id;          
      };


      function deletefunc(id)
      { 
        var dataString = 'id='+ id;


        $.ajax({
          type: "POST",
          url: "delete_event.php",
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

      function viewfunc(id)
      { 

        alert("dfd");


        var dataString ='id='+ id;


        var file="viewevents_load.php";
        $('#display').load(file,{id:id});

      };
  
    </script> -->

  </body>
</html>