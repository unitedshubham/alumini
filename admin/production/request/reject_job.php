<?php
require '../../connect.php';
require '../session.php';

$job_id=$_POST['id'];

$sql = "UPDATE jobs SET status='2' WHERE job_id=?";
$stmt= $conn->prepare($sql);
$result=$stmt->execute([$job_id]);



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