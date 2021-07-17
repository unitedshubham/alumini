$("#login").click(function(){

  var uname=$("#uname").val();
  var pass=$("#pass").val();

  var datastr='uname='+uname+'&pass='+pass;







  if ($("#uname").val().length==0 || $("#pass").val().length==0) {
   alert("Please fill username and password");
 }

 else{

   $.ajax({
    
    
    type: "POST",
    url: "credential.php",
    data: datastr,
    cache: false,
    success: function(res){
      if(res==20)
      {
        window.location.href ="admin/production/index.php";     
        
        
      }
      else if(res==23){
        
       
        

       window.location.href ="admin/production/index1.php";
       


     }
                    // else if(res==25){
                      
                    //    window.location.href ="index";
                    //    alert("Parent Login");


                    // }
                    else{
                      alert("invalid login");
                    }
                    
                  }
                }); 
 }
 





});