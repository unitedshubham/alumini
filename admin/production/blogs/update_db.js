$("#update_blog_submit").click(function(){



  var profile_picture=$("#profile_picture").val();
  if(profile_picture==""){
    profile_picture= $("#profile_picture").attr('placeholder');
  }

  var blog_title=$("#blog_title").val();
  if(blog_title==""){
    blog_title= $("#blog_title").attr('placeholder');
  }
  var short_description=$("#short_description").val();
  if(short_description==""){
    short_description= $("#short_description").attr('placeholder');
  }
  var main_description=$("#main_description").val();
  if(main_description==""){
    main_description= $("#main_description").attr('placeholder');
  }
  
  var blog_id=$("#blog_id").html();

  


  var datastr='profile_picture='+profile_picture+'&blog_title='+blog_title+'&short_description='+short_description+'&main_description='+main_description+'&blog_id='+blog_id;
  
  $.ajax({
    type: "POST",
    url: "update_blog.php",
    data: datastr,
    cache: false,
    success: function(res){
     if(res==1)
     {
      alert("Successfull!!");

    }
    else
    {
      alert("Some Error Occured!!");
      
    }

  }
});

  location.reload();
});