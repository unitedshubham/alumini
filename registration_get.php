<?php
require 'connect.php';

$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$contact_no=$_POST['contact_no'];
$gender=$_POST['gender'];
$passing_year=$_POST['passing_year'];
$messages=$_POST['messages'];


if ($fname=='') {
	echo "0";
}
else if ($mname=='') {
	echo "0";
}
else if ($lname=='') {
	echo "0";
}
else if ($email==''){
	echo "0";
}
else if ($contact_no=='') {
	echo "0";
}
else if ($gender=='') {
	echo "0";
}
else if ($passing_year==''){
	echo "0";
}
else if ($messages==''){
	echo "0";
}






else{

	$sql="INSERT INTO registration(first_name, middle_name, last_name, email, contact_no, gender, passing_year, messages) VALUES (:fname,:mname,:lname,:email,:contact_no,:gender,:passing_year,:messages)";
	$stmt= $conn->prepare($sql);
	$result= $stmt->execute(array(
		':fname'=>$fname,
		':mname'=>$mname,
		':lname'=>$lname,
		':email'=>$email,
		':contact_no'=>$contact_no,
		':gender'=>$gender,
		':passing_year'=>$passing_year,
		':messages'=>$messages,

	));


	if($result)
	{
		echo "1";
	}
	else
	{
		echo "0";
	}

}

?>