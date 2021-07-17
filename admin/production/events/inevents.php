<?php
require '../../../connect.php';
require '../session.php';

$eventname=$_POST['eventname'];
$eventdesc=$_POST['eventdesc'];
$eventnote=$_POST['eventnote'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$days=$_POST['days'];
$organiser=$_POST['organiser'];
$place=$_POST['place'];
$offer=$_POST['offer'];
$file=$_POST['file'];
$Category=$_POST['Category'];
$created_by=$user_id;

if ($eventname=='') {
            alert("Please insert event name");              
     }



else if ($eventdesc=='') 
          {
            alert("eventdesc cannot be empty");
              }
          


else if ($eventnote=="" ){
      alert("Enter event note");
             }



else if ($sdate=="") {
  alert('enter event start date');
}

else if ($edate=="") {
  alert('enter event end date');
}

else if ($days=="") {
  alert('enter number of days event will be held');
}

else if ($organiser=="") {
  alert('enter event Organiser');
}

else if ($place=="") {
  alert('enter place of the event');
}
else if ($offer=="") {
  alert('enter event offer');
}

else if ($file=="") {
  alert('upload a poster');
}

else if ($Category=="") {
  alert('select event Category');
}
    
else{


$sql="INSERT INTO events(event_category, event_name, event_desc, event_note, event_sdate, event_edate, event_period, event_organiser, event_place, event_offer, event_poster, created_by ) VALUES (:Category, :eventname, :eventdesc, :eventnote, :sdate, :edate, :days, :organiser, :place, :offer, :file, :created_by)";
$stmt= $conn->prepare($sql);
$result= $stmt->execute(array(
	
  ':Category'=>$Category,
  ':eventname'=>$eventname,
  ':eventdesc'=>$eventdesc,
  ':eventnote'=>$eventnote,
  ':sdate'=>$sdate,
  ':edate'=>$edate,
  ':days'=>$days,
  ':organiser'=>$organiser,
  ':place'=>$place,
  ':offer'=>$offer,
  ':file'=>$file,
  ':created_by'=>$created_by


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