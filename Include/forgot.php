<!DOCTYPE html>
<html>
<head>
	<title>Login Portal</title>
	<style type="text/css">
		.error{
	color:red;
}

body{
    margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: #34495e;
			
}

label{
	color:white;
}

.heading{
    color: white;
  text-transform: uppercase;
  font-weight: 500;
}

.forgot-password-box{
    width: 300px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: #191919;
  text-align: center;
}

.btn{
width: 100%;
			background: none;
			border: 2px solid #4caf50;
			color: white;
			float: left;
			cursor: pointer;
			margin: 5px;
			padding: 3px 0;
}

.textbook{
	border-bottom: 1px solid #4caf50;
			outline: none;
			background: none;
			color: white;
			font-size: 18px;
			width: 140px;
			float: left;
			/*text-align: center;
			padding: 5px 0;*/
			margin: 0 10px;
}

 input[type = "email"]  {
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
}
input[type = "submit"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}

	</style>
</head>
<body>

	<?php
	
		$email="";
		$emailerr="";
        session_start();
        
		
		if ($_SERVER['REQUEST_METHOD']=='POST') {

            require_once 'database.php';
			if (isset($_POST['submit'])) {
			if (empty($_POST["email"]))
					{
						$emailerr="Email is required";
					}
					
					else{
						$email=test_input($_POST["email"]);
						
						if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
							$emailerr="Invalid email format";
						}
						else
						{
							//echo "$email";
							$otem= rand(100000,999999);
			
							$email=$_POST["email"];

                            $sql="SELECT  email_id from RegistrationTable WHERE email_id= '$email' ";
                            
                            $fdb = new database();
                            $fdb->query($sql);
							
							if($fdb->sql_query->rowCount() <= 0){
                                $emailerr = "Email doesn't match";
							}

							
							else{
                                $result = $fdb->sql_query->fetchALL(PDO::FETCH_ASSOC);
							
							$subject="Mail for forget Password";
						

						
							

							$message="Your one time password is "."$otem";
						

							$headers = "From:rsahagdrive@gmail.com";
							
							if(mail($email,$subject,$message,$headers)){
								$_SESSION['email']=$email;
								$sql="UPDATE `RegistrationTable`  SET otp='$otem' WHERE email_id='".$email."'";
                                $fdb->query($sql);
                            // echo "<h3>Please Enter the OTP sent to Your email id </h3>";
                            // header('location:otp.php');
							include_once 'otp.php';
                            $sucess=true;
                            $fdb->close_connection();
			
							}
							else
							{
								echo "true";
								?>

								<h3 style="color:white;"><?php echo "can't send mail"?></h3>
									
							<?php
								
								$sucess=false;  
								$emailerr =  "Can't Send Mail";
							}
							}
                            $fdb->close_connection();
							}
						}
				
							
					
	//	$connect->close();	
	}

		function test_input($data){
						$data=trim($data);
						$data=stripslashes($data);
						$data=htmlspecialchars($data);
						return $data;
					}

	?>
	<?php
		//echo "$sucess";
		// if (isset($_POST['submit']) && !empty($_POST['email']) && $sucess==true ) {
		// 	// echo "Otp sent to the Email adress";
		// 	// header('location:otp2.php');

		// }

		//if (!isset($_POST['submit']) || empty($_POST['email']) || $sucess=false ){

	?>
	<div class="forgot-password-box">
		<form action= '<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="POST">
			<label for="forgot-email" class="heading">Enter Your Email id : </label>
			<br> 
			<input class="textbook" type="email" name="email" id="forgot-email" placeholder="Email ID" value="" required=" ">
  			
			<br>
            <input class="btn" type="submit" name="submit" value="submit">
            
        </form>
        <span class="error"> <?php echo $emailerr;?></span>
        
		</div>
		<?php// } ?>
</body>
</html>
