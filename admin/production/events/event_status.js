    function acceptfunc(id)
      { 
        var dataString = 'id='+ id;

        alert("acceptfunc");


        $.ajax({
          type: "POST",
          url: "../events/accept_event.php",
          data: dataString,
          cache: false,
          success:function(data){
            if(data == 1){

             window.location.reload();

           }
           else{
            alert("Error Occured");


           }
         }

       });

      };



  //function to delete event
    function deletefunc(id)
      { 
        var dataString = 'id='+ id;


        $.ajax({
          type: "POST",
          url: "../events/delete_event.php",
          data: dataString,
          cache: false,
          success:function(data){
            if(data == 1){

             window.location.reload();

           }
           else{
            alert("Error Occured");

           }
         }
       });
      };

      function rejectfunc(id)
      { 
        var dataString = 'id='+ id;


        $.ajax({
          type: "POST",
          url: "../events/reject_event.php",
          data: dataString,
          cache: false,
          success:function(data){
            if(data == 1){

             window.location.reload();

           }
           else{
            alert("Error Occured");
           }
         }
       });
      };





      //function to view event
      function viewfunc(id)
      { 

        alert("dfd");


        var dataString = 'id='+ id;


        var file="../events/viewevents_load.php";
        $('#display').load(file,{id:id});

      }; 





      /*function editfunc(id)
      { 
        window.location.href='updateproduct.php?id='+id;          
      };*/


      


      /*function deletefunc(id){ 
        var dataString = 'id='+ id;


        $.ajax({
          type: "POST",
          url: "delete_event.php",
          data: dataString,
          cache: false,
          success:function(data){
            if(data == 1){

             window.location.reload();

           }
           else{


           }
         }

       });
      };*/


      function viewfunc(id){ 

        alert("dfd");


        var dataString ='id='+ id;


        var file="viewevents_load.php";
        $('#display').load(file,{id:id});

      };

      



/*function acceptfunc(id)
      { 
        var dataString = 'id='+ id;

        alert("acceptfunc");


        $.ajax({
          type: "POST",
          url: "../events/accept_event.php",
          data: dataString,
          cache: false,
          success:function(data){
            if(data == 1){

             window.location.reload();

           }
           else{


           }
         }

       });

      };*/

