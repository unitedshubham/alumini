<?php
require "../../connect.php";
//require "../session.php";

$job_title=$_POST['job_title'];
$job_desc=$_POST['job_description'];
$vacancy=$_POST['vacancy'];
$edu_qualification_required=$_POST['edu_qualification_required'];
$Work_experience=$_POST['Work_experience'];
$salary_begin=$_POST['salary_begin'];
$salary_end=$_POST['salary_end'];
$job_type=$_POST['job_type'];
$job_end_date=$_POST['job_end_date'];
$job_id=$_POST['job_id'];



$sql = "UPDATE jobs SET job_title=?,job_desc=?,vacancy=?,edu_qual=?,Work_experience=?,salary_begin=?,salary_end=?,job_type=?,job_enddate=? WHERE job_id=? AND status='1'";
$stmt= $conn->prepare($sql);
$result=$stmt->execute([$job_title,$job_desc, $vacancy, $edu_qualification_required, $Work_experience,$salary_begin,$salary_end, $job_type, $job_end_date, $job_id]);



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