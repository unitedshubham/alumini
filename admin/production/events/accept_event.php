<?php
require '../../connect.php';
require '../session.php';

$id=$_POST['id'];
$deleted_by=$user_id;
$deleted_datetime=date('Y-m-d h:m:s');


$sql = "UPDATE events SET status='1',deleted_by=?,deleted_datetime=? WHERE id=?";
$stmt= $conn->prepare($sql);
$result=$stmt->execute([$deleted_by,$deleted_datetime, $id]);



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