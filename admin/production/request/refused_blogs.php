<?php 

require '../../connect.php';
require '../session.php';



   $blog_id=$_POST['id'];

	$sql1 = "UPDATE blogs SET status='3'  WHERE blog_id=?";
	$stmt = $conn->prepare($sql1);
	$result1=  $stmt->execute([$blog_id]);


	if ($result1) {
		echo 1;

	}
	else{
		echo 0;
	}


?>
