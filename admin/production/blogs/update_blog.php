<?php
require "../../connect.php";
//require "../session.php";


$profile_picture=$_POST['profile_picture'];

$blog_title=$_POST['blog_title'];
$short_description=$_POST['short_description'];
$main_description=$_POST['main_description'];
$blog_id=$_POST['blog_id'];



$sql = "UPDATE blogs SET blog_picture=?, blog_title=?,blog_desc=?,blog_maindesc=? WHERE blog_id=? ";
$stmt= $conn->prepare($sql);
$result=$stmt->execute([$profile_picture,$blog_title,$short_description, $main_description, $blog_id]);



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