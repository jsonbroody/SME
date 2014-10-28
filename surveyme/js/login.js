$(document).ready(function() {

			$('#login').click(function()
			{
			var username=$("#username").val();
			var password=$("#password").val();
		    var dataString = 'username='+username+'&password='+password;
			if($.trim(username).length>0 && $.trim(password).length>0)
			{


			$.ajax({
            type: "POST",
            url: "php/ajaxlogin.php",
            data: dataString,
            cache: false,
            beforeSend: function(){ $("#login").val('Connecting...');},
            success: function(data){
            if(data)
            {
            window.location.href = "home.php";
            }
            else
            {
             $('#box').effect("shake");
			 $("#login").val('Login')
			 $("#error").html("<span style='color:#cc0000'>Error:</span> Invalid username and password. ");
            }
            }
            });

			}
			return false;
			});


			});
