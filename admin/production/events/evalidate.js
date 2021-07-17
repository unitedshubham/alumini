$("#submit").click(function(){


  var Category=$("#Category").val();
	var eventname=$("#eventname").val();
	var eventdesc=$("#eventdesc").val();
	var eventnote=$("#eventnote").val();
	var sdate=$("#sdate").val();
  var edate=$("#edate").val();
  var days=$("#days").val();
  var organiser=$("#organiser").val();
  var place=$("#place").val();
  var offer=$("#offer").val();
  var file=$("#file").val();

    var datastr='Category='+Category+'&eventname='+eventname+'&eventdesc='+eventdesc+'&eventnote='+eventnote+'&sdate='+sdate+'&edate='+edate+'&days='+days+
                  '&organiser='+organiser+'&place='+place+'&offer='+offer+'&file='+file;



    
if (eventname=='') {
            alert("Please insert event name");              
     }



else if (eventdesc=='') 
          {
            alert("eventdesc cannot be empty");
              }
          


else if (eventnote=="" ){
      alert("Enter event note");
             }



else if (sdate=="") {
  alert('enter event start date');
}

else if (edate=="") {
  alert('enter event end date');
}

else if (days=="") {
  alert('enter number of days event will be held');
}

else if (organiser=="") {
  alert('enter event Organiser');
}

else if (place=="") {
  alert('enter place of the event');
}
else if (offer=="") {
  alert('enter event offer');
}

else if (file=="") {
  alert('upload a poster');
}

else if (Category=="") {
  alert('select event Category');
}
    
else{
	$.ajax({
                url: "inevents.php",
                data: datastr,
                type: "POST",
                cache: false,

                
                success: function(res){
                   if (res==1) 
                   {
                    alert("success");

                   }
                   else{
                    alert("error");
                   }
                }
            });

      }

});