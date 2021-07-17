<?php
session_start();


$user = $_POST['username'];
$pass =$_POST['password'];



require "connect.php";
$sql= $conn->prepare("SELECT * FROM login where username='".$user."'and password='".$pass."'");
$sql->execute();
$sql->setFetchMode(PDO::FETCH_ASSOC);
if($sql->rowCount()>0){
	foreach (($sql->fetchAll()) as $key => $row) 
		


$_SESSION["username"] = $row['username'];
$_SESSION["password"] = $row['password'];
$_SESSION["first_name"] = $row['first_name'];
$_SESSION["middle_name"] = $row['middle_name'];
$_SESSION["last_name"] = $row['last_name'];
$_SESSION["phone_no"] = $row['phone_no'];
echo '1';


}else
{
	echo '0';
}

?>