



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Login Portal</title>
	<style type="text/css">
		@import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";


	/*	body{
			margin: 0;
			padding: 0;
			//background-color: skyblue;
			/*background-image: url('https://images.unsplash.com/photo-1542654071-7ded22488685?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=60');
			background-repeat: no-repeat;
			background-size: cover;
			font-family: sans-serif;
			//opacity: 0.5;
		}
		.Login-portal{
			position: absolute;
			left: 55%;
			top: 50%;
			color: black;
			transform: translate(-50%, -50%)
		}
		.Login{
			float: left;
			border-bottom: 4px solid #20b820;
			margin-bottom: 20px;
			font-size: 18px;
			padding: 10px 0;
			letter-spacing: 0.5px;
		}

		.textbook{
			width: 100%;
			overflow: hidden;
			border-bottom: 1px solid #4caf50;
			margin-bottom: 10px;
			font-size: 18px;
			margin: 8px 0;
		}
		.textbook input{
			border: none;
			outline: none;
			background: none;
			color: black;
			font-size: 18px;
			width: 140px;
			float: left;
			/*text-align: center;
			padding: 5px 0;
			margin: 0 10px;
		}
		.textbook i{
			width: 26px;
			//font-size: 20px;
			float: left;
			text-align: center;
		}

		.btn{
			width: 100%;
			background: none;
			border: 2px solid #4caf50;
			color: black;
			float: left;
			cursor: pointer;
			margin: 5px;
			padding: 3px 0;
			
			
		}
		.Register{
			text-decoration: none;
		}*/
	</style>
</head>
<body>
	<?php
session_start();
if (isset($_SESSION["Username"])) {
	header("location:mysql_add.php");
}
?>
	<form action="mysql_add.php" method="POST">
	<div class="Login-portal">
		<h1 class="Login">Login</h1>
		<div class="textbook">
			<i class="fa fa-user" aria-hidden="true"></i>
			<input type="text" placeholder="Username" name="Username" value="">
			
		</div>
		<div class="textbook">
			<i class="fa fa-unlock-alt" aria-hidden="true"></i>
			<input type="Password" placeholder="Password" name="Password" value="">
		</div>
		<div>
			<input class="btn" type="submit" name="sign_in" value="Sign In">
			<br>
			<br>
		</div>
		<div><a class="Register" href="forget.php">Forget Password</a></div>
		<div>
			Need an account ? <a class="Register" href="registration_form.php">Register</a>
		</div>
	</div>
</form>

</body>
</html>