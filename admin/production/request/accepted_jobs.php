<div  role="main" id="display">
          <div class="">


            <div class="row">


             

     

       


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2 style="color:blue;">Accepted Jobs</h2>
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
                          <th>Job Title</th>
                          <th>job Description</th>
                          <th>Vacancy</th>
                          <th>Educational Qualification Required</th>
                          <th>Workexperience</th>
                           <th>Salary Begin</th>
                          <th>Salary End</th>
                           <th>Job Type</th>
                            <th>Job End Date</th>
                            <th>User</th>
                            <th>Action</th>
                           
                      
                        </tr>
                      </thead>
                      <tbody>
                         <?php 
                        


require '../../connect.php';
$data = $conn->query("SELECT *,(select type_id from users where jobs.created_by=users.user_id) as type_id FROM jobs where status='1'")->fetchAll();
// and somewhere later:
foreach ($data as $row) {
  echo '  <tr>
                          <td>'.$row['job_title'].'</td>
                          <td>'.$row['job_desc'].'</td>
                          <td>'.$row['vacancy'].'</td>
                          <td>'.$row['edu_qual'].'</td>
                          <td>'.$row['work_experience'].'</td>
                          <td>'.$row['salary_begin'].'</td>
                          <td>'.$row['salary_end'].'</td>
                          <td>'.$row['job_type'].'</td>
                          <td>'.$row['job_enddate'].'</td>
                          ';
$data1 = $conn->query("SELECT * FROM registration where registration_id='".$row['type_id']."'")->fetchAll();
// and somewhere later:
foreach ($data1 as $row1) {
            echo ' <td>'.$row1['first_name'].' '.$row1['last_name'].'</td>';
}

                       
                      echo '    <td><button onclick=\'viewfunc("' .$row["job_id"]. '")\'><i class="fa fa-eye" style="color: blue;" >   </i></button>
                            <button onclick=\'acceptfunc("' .$row["job_id"]. '")\' ><i class="fa fa-check" style="color: green;" >   </i></button>
                             <button onclick=\'rejectfunc("' .$row["job_id"]. '")\'><i class="fa fa-close" style="color: red;" >   </i></button>
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
