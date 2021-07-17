<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jobs|Request</title>

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
        <div class="right_col" role="main"  >
          <div class="">


            <div class="row">

             

     

       


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="content">
  <div class="container-fluid">
<center>
    <div class="title"><h1>Display Jobs</h1></div>
    <br>

    <div class="radio-inline">
      <label>
        <input type="radio" name="searchimages" onchange="valuechange()" checked=""  id="full2"  >Pending Jobs   
        <input type="radio" name="searchimages" onchange="valuechange()"  id="full1"  >Accepted Jobs   
       
        <input type="radio" name="searchimages"  class="byid" id="bylec" onchange="valuechange()"> Rejected Jobs  
        
      </label>
    </div>
   
  
  </center>


<br>





</div> 

<!--______________________________________________________________________________________________________________________-->



             

     

       


              <div class="col-md-12 col-sm-12 col-xs-12" id="display">
             <?php require "pending_jobs.php"; ?>
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
      

      
    </script>

    <script>
  $("#checkAl").click(function () {
    $('input:checkbox').not(this).prop('checked', this.checked);
  });
</script>







<script type="text/javascript">
  $(document).ready(function() {

     $('#audiance').select2();


    $('#datatables').DataTable({
      "pagingType": "full_numbers",
      "lengthMenu": [
      [10, 25, 50, -1],
      [10, 25, 50, "All"]
      ],
      responsive: true,
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search records",
      }

    });


    var table = $('#datatables').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
          $tr = $(this).closest('tr');

          if ($tr.hasClass('child')) {
            $tr = $tr.prev('.parent');
          }

          var data = table.row($tr).data();
          alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
          $tr = $(this).closest('tr');
          table.row($tr).remove().draw();
          e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function() {
          alert('You clicked on Like button');
        });
      });
    </script>
    <script type="text/javascript">

      $('#users').select2();




    function valuechange() {
      if (document.getElementById("full1").checked == true) {

        $('#display').load('accepted_jobs.php');
      

      } 
      if (document.getElementById("full2").checked == true) {

         $('#display').load('pending_jobs.php');
        
      

      } 
      else if (document.getElementById("bylec").checked == true) {

        $('#display').load('rejected_jobs.php');

      }
      
    };

        function acceptfunc(job_id)
    { 

      

    var dataString ='id='+job_id;
    
      


      $.ajax({
              type: "POST",
              url: "accept_job.php",
              data: dataString,
              cache: false,
              success: function(res){
                if(res==1)
                {
                  alert("Job Accepted!!");

                 }
                else
                {
                  alert("Some Error Occured!!");
            
                }

              }
           });
      
          
        };
         function rejectfunc(job_id)
    { 

      

    var dataString ='id='+job_id;
    
       $.ajax({
              type: "POST",
              url: "reject_job.php",
              data: dataString,
              cache: false,
              success: function(res){
                if(res==1)
                {
                  alert("Job Rejected!!");

                 }
                else
                {
                  alert("Some Error Occured!!");
            
                }

              }
           });
      
          
        };
             function viewfunc(job_id)
    { 

      

    var dataString ='id='+job_id;
    

      var file="../jobs/view_job.php";
      $('#display').load(file,{id:job_id});
          
        };




  </script>

  </body>
</html>