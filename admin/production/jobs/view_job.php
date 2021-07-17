
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    .card {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      width: 40%;
      margin: 0 auto;

    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    .container {
      padding: 2px 16px;
    }
  </style>
</head>
<body>
  <?php 

  

  require '../../connect.php';

  $job_id=$_POST['id'];

  $data = $conn->query("SELECT * FROM jobs where job_id=$job_id")->fetchAll();
// and somewhere later:
  foreach ($data as $row) {?>

    <h2>Jobs</h2>

    <div class="card text-center">
      <div class="card-header">
        <?php echo '<h1>'.$row['job_title'].'</h1>'; ?>
      </div>
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text"><b>Description:</b> <?php echo $row['job_desc']; ?></p>
        <p class="card-text"><b>Vacancies:</b> <?php echo $row['vacancy']; ?></p>
        <p class="card-text"><b>Educational Qualification Required:</b> <?php echo $row['edu_qual']; ?></p>
        <p class="card-text"><b>Work Expirence needed:</b> <?php echo $row['work_experience']; ?></p>
        <p class="card-text"><b>Salary:</b> <?php echo $row['salary_begin']; ?> - <?php echo $row['salary_end']; ?></p>
        <p class="card-text"><b>Job Type:</b> <?php echo $row['job_type']; ?></p>
        <button onclick="location.reload();">Back</button>
      </div>
      <div class="card-footer text-muted">
        <p class="card-text">Last Date To Apply:<?php echo '<h2>'.$row['job_enddate'].'</h2>'; } ?></p>
      </div>
    </div>
    


  </div>
</div>

</body>
</html> 