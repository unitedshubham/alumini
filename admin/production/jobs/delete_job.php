<?php
require '../../connect.php';
require '../session.php';

$job_id=$_POST['id'];
$deleted_by=$user_id;
$deleted_datetime=date('Y-m-d h:m:s');


$sql = "UPDATE jobs SET status='3',deleted_by=?,deleted_datetime=? WHERE job_id=?";
$stmt= $conn->prepare($sql);
$result=$stmt->execute([$deleted_by,$deleted_datetime, $job_id]);



if($result)
{
	echo "1";
	
}
else
{
	echo "0";
	
}
//$conn->close();

?>