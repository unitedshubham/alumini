$("#submit").click(function(){

		
   var username= $('#username').val();
   var password= $('#password').val();
{
			$.ajax({
				type: "POST",
				url:"connect.php",
				data: datastr,
				success: function(res){
			
						alert(res);
		

				}

			});

		}






	});