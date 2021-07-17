<?php

$username = $_POST['username'];
$password =$_POST['password'];
$first_name =$_POST['first_name'];
$middle_name =$_POST['middle_name'];
$last_name =$_POST['last_name'];
$phone_no =$_POST['phone_no'];
$address =$_POST['address'];
$date_of_reg =$_POST['date_of_reg'];






require "../../connect.php";


$sql= "INSERT INTO login (username, password, first_name ,middle_name, last_name, phone_no, address, date_of_reg ) VALUES (:username, :password, :first_name, :middle_name, :last_name, :phone_no, :address, :date_of_reg)";
$stmt =$conn->prepare($sql);

$result=$stmt->execute(array(
':username' => $username, 
':password' => $password, 
':first_name' => $first_name, 
':middle_name' => $middle_name, 
':last_name' => $last_name, 
':phone_no' => $phone_no, 
':address' => $address, 
':date_of_reg' => $date_of_reg 

));

if($result){
	echo 1;
}
else{
echo 0	;
}

?>