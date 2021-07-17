<?php
require '../../connect.php';
require '../session.php';

$blog_title=$_POST['blog_title'];
$short_description=$_POST['short_description'];
$main_description=$_POST['main_description'];
$created_by=$_SESSION['user_id'];
$profile_picture=$_POST['profile_pic'];




$sql="INSERT INTO blogs(blog_title, blog_desc, blog_maindesc,created_by,blog_picture) VALUES (:blog_title,:short_description,:main_description,:created_by,:blog_picture)";
$stmt= $conn->prepare($sql);
$result= $stmt->execute(array(
	':blog_title'=>$blog_title,
	':short_description'=>$short_description,
	':main_description'=>$main_description,
	':blog_picture'=>$profile_picture,
	':created_by' =>$created_by
));


if($result)
{
	echo "1";

	
}
else
{
	echo "0";
}



?>