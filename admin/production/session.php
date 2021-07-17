<?php
session_start();

require "../../connect.php";




if (isset($_SESSION["user_name"])){

// echo $_SESSION["first_name"];
	$sql= $conn->prepare("SELECT * FROM users where user_name= '".$_SESSION['user_name']."' and password='".$_SESSION['password1']."' and status='1'");
	$sql->execute();
	$sql->setFetchMode(PDO::FETCH_ASSOC);
	if($sql->rowCount()>0){

		$username1 =$_SESSION["user_name"] ;

		$user_type =$_SESSION["user_type"] ;
		$type_id= $_SESSION["type_id"] ;

		$user_id= $_SESSION["user_id"] ;

	}else{
		header('Location:../index.php');
	}


}else{
	header('Location:../index.php');
}

?>