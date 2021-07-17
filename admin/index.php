<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alumini </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"> </script>
    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" id="username" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" id="password" required="" />
              </div>
              <div>
                <a type="button" class="btn btn-default" id="submit">Log in</a>
                
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                
                  
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><img src="nav.png" style="width: 10%"> Navdaya website</h1>
                  
                </div>
              </div>
            </form>
          </section>
        </div>


      </div>
    </div>
  </body>
</html>

<script type="text/javascript">
  
  $("#submit").click(function(){


   var username= $('#username').val();
   var password= $('#password').val();

   var datastr= 'username='+username+'&password='+password;
{
      $.ajax({
        type: "POST",
        url:"submit.php",
        data: datastr,
        success: function(res){
      
           if (res==1) {
window.location.href = "production/index.php";
           }
           else{
            alert('wrong username or password');
           }
    

        }

      });

    }






  });


  
</script>
