<?php 

require '../../connect.php' ;

$status = $_POST['status'];
$pd_id = $_POST['pd_id'];




	$sql1 = "UPDATE product_order SET delivery_status=:status WHERE id=:pd_id";
	$stmt = $conn->prepare($sql1);
	$result=  $stmt->execute(array(
		':status' => $status,
		':pd_id' => $pd_id
		
	
	
	));

	if ($result) {
		echo 1;

	}
	else{
		echo 0;
	}


?>

