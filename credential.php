<?php
session_start();
require 'connect.php';

$uname=$_POST['uname'];
$pass=($_POST['pass']);
$encrypt=md5($pass);





$sql= $conn->prepare("SELECT * FROM users where user_name='".$uname."'and password='".$pass."'");
$sql->execute();
$sql->setFetchMode(PDO::FETCH_ASSOC);
if($sql->rowCount()>0){
	foreach (($sql->fetchAll()) as $key => $row) 
		

		$_SESSION["user_name"] = $row['user_name'];
	$_SESSION["password1"] = $row['password'];
	$_SESSION["user_type"] = $row['user_type'];
	$_SESSION["type_id"] = $row['type_id'];
	$_SESSION["user_id"] = $row['user_id'];





	if ($row['user_type']=="admin") {

		echo "20";

	}
	else if ($row['user_type']=="student") {

		echo "23";


	}
// else  if ($row['user_type']=="parent") {

// 	echo "25";



// }
	else
	{
		echo '0';
	}
}




?>

