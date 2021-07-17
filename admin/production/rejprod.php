<?php 

session_start();
require '../connect.php';
if (isset($_SESSION["user_name"])){

// echo $_SESSION["first_name"];
$sql= $conn->prepare("SELECT * FROM users where user_name= '".$_SESSION['user_name']."' and password='".$_SESSION['password1']."' and status='1'");
$sql->execute();
$sql->setFetchMode(PDO::FETCH_ASSOC);
if($sql->rowCount()>0){

$username1 =$_SESSION["user_name"] ;

$user_type =$_SESSION["user_type"] ;
$type_id= $_SESSION["type_id"] ;


}else{
  header('Location:../index.php');
}


}else{
  header('Location:../index.php');
}




  $reg_id=0;
date_default_timezone_set('Asia/Calcutta');
$today = date('Y-m-d H:i:s' );



$id= $_POST["id"];
$status= '2';



	$sql1 = "UPDATE registration SET status=:status, accepted_users=:accepted_users, accepted_date=:deleted_date WHERE registration_id=:id";
	$stmt = $conn->prepare($sql1);
	$result=  $stmt->execute(array(
		':status' => $status,
		':accepted_users' => $username1,
		':deleted_date' => $today,
		':id' => $id		
	));

	if ($result) {
		echo 1;

	}
	else{
		echo 0;
	}


?>