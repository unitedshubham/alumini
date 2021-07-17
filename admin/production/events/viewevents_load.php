
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

<h2>Events</h2>

<div class="card text-center" align="center">
  <div class="container">
<?php 

                       

require '../../connect.php';

$id=$_POST['id'];

$data = $conn->query("SELECT * FROM events where status='0' AND id=$id")->fetchAll();
// and somewhere later:
foreach ($data as $row) {
  echo '<h1>'.$row['event_category'].'</h1>
        <h2>'.$row['event_name'].'</h2>
        <p>'.$row['event_desc'].'</p>
        <p>'.$row['event_note'].'</p>
        <p>'.$row['event_sdate'].'</p>
        <p>'.$row['event_edate'].'</p>
        <p>'.$row['event_period'].'</p>
        <p>'.$row['event_organiser'].'</p>
        <p>'.$row['event_place'].'</p>
        <p>'.$row['event_offer'].'</p>
        <p>'.$row['event_poster'].'</p>';
}

?>
  </div>
</div>

</body>
</html> 