$("#formsubmit").click(function(){

  var fname=$("#fname").val();
  var mname=$("#mname").val();
  var lname=$("#lname").val();
  var email=$("#email").val();
  var contact_no=$("#contact_no").val();
  var gender=$("#gender").val();
  var passing_year=$("#passing_year").val();
  var messages=$("#messages").val();

  var datastr='fname='+fname+'&mname='+mname+'&lname='+lname+'&email='+email+'&contact_no='+contact_no+'&gender='+gender+'&passing_year='+passing_year+'&messages='+messages;





  if($("#fname").val().length >=4){
    if (fname=='') {
     Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Please fill first name',
      
    })
     
   }

   else if (mname=='') {
     Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Please fill middle name',
      
    })
   }
   else if (lname=='') {
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Please fill last name',
      
    })



  }
  else if (email=='') {
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Please fill email',
      
    })



  }
  else if (contact_no=='') {
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Please fill contact info',
      
    })

  }
  else if (gender=='') {
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Please fill gender',
      
    })

  }
  else if (passing_year=='') {
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Please fill passing year',
      
    })

  }
  else if (messages=='') {
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Please fill message',
      
    })

  }

  else{

   $.ajax({
    
    
    type: "POST",
    url: "registration_get.php",
    data: datastr,
    cache: false,
    success: function(res){
      if(res==1)
      {
                        // $('form :input').attr('value', '');
                        swal.fire(
                          'Thank You',
                          'Your from has been submited!',
                          'success'
                          
                          )
                        
                      }
                      else{
                        

                       alert("error");


                     }
                     
                   }
                 }); 
 }
}else{
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Name must be atleast 4 characters',
    
  })
}





});