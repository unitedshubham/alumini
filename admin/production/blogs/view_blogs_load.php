
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

  <h2>Blogs</h2>

  <div class="card text-center" align="center">
    <div class="container">
     <?php 

     

     require '../../connect.php';

     $blog_id=$_POST['id'];

     $data = $conn->query("SELECT * FROM blogs where  blog_id=$blog_id")->fetchAll();
// and somewhere later:
     foreach ($data as $row) {
      echo '<h1>'.$row['blog_title'].'</h1>
      <h2>'.$row['blog_desc'].'</h2>
      <p>'.$row['blog_maindesc'].'</p>
      <p> <img width="500px" src="../blogs/'.$row['blog_picture'].'"></p>';
      
      

    }


    ?>
    <button onclick="location.reload()"> Back </button>
  </div>
</div>

</body>
</html> 