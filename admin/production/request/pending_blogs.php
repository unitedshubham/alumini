<div  role="main" id="display">
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
                          <th>Blog Id</th>
                          <th>Blog Title</th>
                          <th>Blog Description</th>
                          <th>Blog Maindescription</th>
                          <th>Created By</th>
                          <th>Created Datetime</th>
                          <th>Action</th>
                        
                           
                      
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        error_reporting(0);


require '../../connect.php';
$data = $conn->query("SELECT * FROM blogs where status='0'")->fetchAll();
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
