

<?php
require '../../connect.php';
require 'session_script.php';

if ($_POST['profile_picture']=='') {
	$profile_picture='';

}
else
{
	$profile_picture=$_POST['profile_picture'];
}


$contact_no=$_POST['contact_no'];
$email=$_POST['email'];

$blood_group=$_POST['blood_group'];
$company_name=$_POST['company_name'];
$education_qual=$_POST['education_qual'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$address=$_POST['address'];







$sql = "UPDATE registration SET profile_picture=?, contact_no=?, email=?,blood_group=?, company_name=?, education_qual=?, country=?, state=?, city=?, address=?   WHERE registration_id=?";
$stmt= $conn->prepare($sql);
$result=$stmt->execute([$profile_picture,$contact_no,$email,$blood_group,$company_name,$education_qual,$country,$state,$city,$address,$type_id]);




if ($result) {
	echo '1';
}
else
{
	echo '0';
}



// if ($fname=='') {
// 	echo "0";
// }
// else if ($mname=='') {
// 	echo "0";
// }
// else if ($lname=='') {
// 	echo "0";
// }
// else if ($email==''){
// 	echo "0";
// }
// else if ($contact_no=='') {
// 	echo "0";
// }
// else if ($gender=='') {
// 	echo "0";
// }
// else if ($passing_year==''){
// 	echo "0";
// }
// else if ($messages==''){
// 	echo "0";
// }






// else{

// $sql="INSERT INTO registration(first_name, middle_name, last_name, email, contact_no, gender, passing_year, messages) VALUES (:fname,:mname,:lname,:email,:contact_no,:gender,:passing_year,:messages)";
// $stmt= $conn->prepare($sql);
// $result= $stmt->execute(array(
//   ':fname'=>$fname,
//   ':mname'=>$mname,
//   ':lname'=>$lname,
//   ':email'=>$email,
//   ':contact_no'=>$contact_no,
//   ':gender'=>$gender,
//   ':passing_year'=>$passing_year,
//   ':messages'=>$messages,

// ));


// if($result)
// {
//     echo "1";
// }
// else
// {
// 	echo "0";
// }

// // }

// ?>