
$("#blogsubmit").click(function(){

    var blog_title=$("#blog_title").val();
    var short_description=$("#short_description").val();
    var main_description=$("#main_description").val();
    var profile_pic=$("#image1").val();
    
    
    var datastr='blog_title='+blog_title+'&short_description='+short_description+'&main_description='+main_description+'&profile_pic='+profile_pic;






    $.ajax({
        
      
        type: "POST",
        url: "blogs_get.php",
        data: datastr,
        cache: false,
        success: function(res){
            if(res==1)
            {
                $('form :input').attr('value', '');
               
                alert("blog submitted");

                
            }
            else{
              

             alert("error");


         }
         
     }
 }); 

    




});






