



$("#formupdate").click(function(){


  alert("hello");


    var profile_picture=$("#image1").val();
    var contact_no=$("#contact_no").val();
    var email=$("#email").val();
    
    var blood_group=$("#blood_group").val();
    var company_name=$("#company_name").val();
    var designation=$("#designation").val();
    var education_qual=$("#education_qual").val();
    var country=$("#country").val();
     var state=$("#state").val();
      var city=$("#city").val();
       var address=$("#address").val();


    var datastr='profile_picture='+profile_picture+'&contact_no='+contact_no+'&email='+email+
    '&blood_group='+blood_group+'&company_name='+company_name+'&designation='+designation+
    '&education_qual='+education_qual+'&country='+country+'&state='+state+'&city='+city+'&address='+address;


   alert("hello2");


//   if($("#fname").val().length >=4){
//       if (fname=='') {
//      Swal.fire({
//                   icon: 'error',
//                   title: 'Error',
//                   text: 'Please fill first name',
                  
//                })
     
// }

// else if (mname=='') {
//      Swal.fire({
//                   icon: 'error',
//                   title: 'Error',
//                   text: 'Please fill middle name',
                  
//                })
// }
// else if (lname=='') {
//     Swal.fire({
//                   icon: 'error',
//                   title: 'Error',
//                   text: 'Please fill last name',
                  
//                })



// }
// else if (email=='') {
//     Swal.fire({
//                   icon: 'error',
//                   title: 'Error',
//                   text: 'Please fill email',
                  
//                })



// }
// else if (contact_no=='') {
//     Swal.fire({
//                   icon: 'error',
//                   title: 'Error',
//                   text: 'Please fill contact info',
                  
//                })

// }
// else if (gender=='') {
//     Swal.fire({
//                   icon: 'error',
//                   title: 'Error',
//                   text: 'Please fill gender',
                  
//                })

// }
// else if (passing_year=='') {
//     Swal.fire({
//                   icon: 'error',
//                   title: 'Error',
//                   text: 'Please fill passing year',
                  
//                })

// }
// else if (messages=='') {
//     Swal.fire({
//                   icon: 'error',
//                   title: 'Error',
//                   text: 'Please fill message',
                  
//                })

// }

// else{

 $.ajax({
                
              
                type: "POST",
                url: "update_formGet.php",
                data: datastr,
                cache: false,
                success: function(res){
                    if(res==1)
                    {
                        // $('form :input').attr('value', '');
                     alert("form updated!");
                        
                    }
                    else{
                          

                       alert("error");


                    }
                    
                }
            }); 
// }
//     }else{
//         Swal.fire({
//                   icon: 'error',
//                   title: 'Error',
//                   text: 'Name must be atleast 4 characters',
                  
//                })
//     }





 });