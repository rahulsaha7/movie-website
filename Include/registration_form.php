<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
	<title>Registration Form</title>
	<style type="text/css">
		.error{
			color: red;
		}

		.log-events{
			display:flex;
			flex-direction:row-reverse;
			justify-content:space-between;
		}
		.menu-buttons{
			background:none;
		}
		.menu-buttons span{
				display:none;
		}
		.menu-buttons span:hover{
				display:block;
				position:relative;
				background-color:red;
		}

	</style>
</head>
<body class="not-show">

	

		<font color="red">* Required field</font>
		<br>
		<div class="log-events">
		<button class="menu-buttons">✎
			<span class="login-mess">Login</span>
		</button>
        <button class="menu-buttons close">✖
			<span class="close-msg">Close</span>
		</button>
		</div>
		Username : 
		<input class="name" type="Text" name="Name" placeholder="Username">
		<span class="name-error error">* </span>
		<br>
		
		password : 
		<input class="passw" type="password" name="Password" placeholder="password" >
		<span class="passw-error error">* </span>
		<br>
		Again Password
		<input class="passwmatch" type="password" name="Password-check" placeholder="Again type password" >
		<span class="passw-mismatch error">* </span>
		<br>
  		Mobile Number :
  		<input class="number" type="text" name="phone" placeholder="Contact Number" >
  		<span class="number-error error">* </span>
  		<br>
  		Email Id :
  		<input class="email" type="text" name="email" placeholder="Email ID">
  		<span class=" email-error error">* </span>
  		<br>
		<input class="submit" type="submit" name="submit" value="Submit">

		<p class="show"></p>

		<script >
				$(document).ready(function(){
					var flag=false;
					$(".name").mouseleave(function(){
					var name = $(".name").val();
					if(!name){
						$(".name-error").html("* required field");
					}
					else if(name){
						$(".name-error").html("*");
					}
				});
				$(".passw").mouseleave(function()
				{
					var passw = $(".passw").val();
					if(!passw){
							$(".passw-error").html("* required field");
					}
					else if(passw){
						$(".passw-error").html("*");
					}
				});

				$(".passwmatch").mouseleave(function()
				{
					var passw = $(".passw").val();
					var passwmatch = $(".passwmatch").val();
					if(!passwmatch){
							$(".passw-mismatch").html("* required field");
					}
					else if(passw != passwmatch){
							$(".passw-mismatch").html("* password mismatch");
					}
				});

				

				$(".number").mouseleave(function()
				{
					var number = $(".number").val();
					if(!number){
							$(".number-error").html("* required field");
					}
				/*else if(number.legth != 10){
					$(".number-error").html("* invalid format");
				}*/
				else if(number){
					$(".number-error").html("*");
				}
				});


				$(".email").mouseleave(function()
				{
					var email = $(".email").val();
					if(!email){
							$(".email-error").html("* required field");
					}
				/*else if(number.legth != 10){
					$(".number-error").html("* invalid format");
				}*/
				else if(IsEmail(email) == false){

					$(".email-error").html("* invalid format");
				}

				else if(IsEmail(email) == true){
					flag=true;
					$(".email-error").html("*");
				}
				});

				
				function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
    return false;
  }else{
    return true;
  }
}

			$(".submit").click(function(){
				var name = $(".name").val();
				var passw = $(".passw").val();
				var passwmatch = $(".passwmatch").val();
				var number = $(".number").val();
				var email = $(".email").val();
					if(name && passw && passwmatch && passw==passwmatch  && number && email && flag ){
					

						$.post('add_to_Database.php',
           				  {
								  Name : name,
								  Password:passw,
								  phone:number,
								  email:email
            				 },
            			 function(data,status){
             			     $(".show").html(data);
              				    if (status != "success") {
              			         $(".show").html(status);
                  }
             });

					}
				
			});

		
			});
		</script>

</body>
</html>