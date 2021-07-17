<?php
require "../../connect.php";
require "../session.php";

$job_title=$_POST['job_title'];
$job_description=$_POST['job_description'];
$vacancy= $_POST['vacancy'];
$edu_qualification_required= $_POST['edu_qualification_required'];
$Work_experience=$_POST['Work_experience'];
$salary_begin=$_POST['salary_begin'];
$salary_end=$_POST['salary_end'];
$job_type= $_POST['job_type'];
$job_end_date= $_POST['job_end_date'];
$created_by=$_SESSION["user_id"];






$sql = "INSERT INTO jobs (job_title, job_desc, vacancy, edu_qual, Work_experience, salary_begin, salary_end, job_type, job_enddate, created_by) VALUES (:job_title , :job_description, :vacancy, :edu_qual, :Work_experience, :salary_begin , :salary_end, :job_type, :job_enddate, :created_by)";
$stmt= $conn->prepare($sql);
$result= $stmt->execute(array(
	':job_title'=>$job_title,
	':job_description'=>$job_description,
	':vacancy'=>$vacancy,
	':edu_qual'=>$edu_qualification_required,
	':Work_experience'=>$Work_experience,
	':salary_begin'=>$salary_begin,
	':salary_end'=>$salary_end,
	':job_type'=>$job_type,
	':job_enddate'=>$job_end_date,
	':created_by'=>$created_by ));


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