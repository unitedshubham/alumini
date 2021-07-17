<?php

$eventname = $_POST['eventname'];
$eventdesc =$_POST['eventdesc'];
$eventnote =$_POST['eventnote'];
$sdate =$_POST['sdate'];
$edate =$_POST['edate'];
$days =$_POST['days'];
$place =$_POST['place'];
$organiser =$_POST['organiser'];
$image_1 =$_POST['image1'];
$offer =$_POST['offer'];
/*$image_3 =$_POST['image3'];
$image_4 =$_POST['image4'];*/
$Category =$_POST['Category'];






require "../../connect.php";


$sql= "INSERT INTO events (event_name, event_desc, event_note ,event_sdate, event_edate, event_period, event_organiser,
		event_place,  poster, Category) VALUES (:eventname, :eventdesc, :eventnote, :sdate, :edate, :days, :organiser, :place, :offer, :image1 ,:Category)";
$stmt =$conn->prepare($sql);

$result=$stmt->execute(array(
':event_name' => $event_name, 
':event_desc' => $eventdesc, 
':event_note' => $eventnote, 
':event_sdate' => $sdate, 
':event_edate' => $edate, 
':event_period' => $days, 
':event_organiser' => $organiser,
':event_place' => $place, 
':offer' => $offer, 
':poster' => $image1, 
rc
':Category' => $Category
));

if($result){
	echo 1;
}
else{
echo 0	;
}

?>