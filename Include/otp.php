<!DOCTYPE html>
<html>
<head>
	<title>otp verification</title>
	<style type="text/css">
		.error{
			color: red;
		}
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: #34495e;
}
.otp-match{
    width: 300px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: #191919;
  text-align: center;
}

input[type = "text"]  {
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



.heading{
    color: white;
  text-transform: uppercase;
  font-weight: 500;
}


	</style>
</head>
<body>

    <?php
    //  require_once 'database.php';
		// 	session_start();
			$otperr="";
			if (isset($_POST['submit2'])) {
				$email=$_SESSION['email'];
			
				$otpc=$_POST["otp"];
			
                $sql="SELECT otp FROM RegistrationTable WHERE email_id='$email'";
                $db = new database();
				$db->query($sql);
				if ($db->sql_query->rowCount() > 0) {
					$result = $db->sql_query->fetchALL(PDO::FETCH_ASSOC);
					if ($otpc!=$result[0]["otp"]) {
						//echo "wrong otp";
						//ob_clean();
						$otperr="Invalid otp";
						
					}
					else
					{
						header('location:newpass.php');
					}
				}
			$db->close_connection();
		}



		

	?>
	<dev class="otp-match">
  <h3>Please Enter the OTP sent to Your email id </h3>
		<form action= '<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="POST">
		<label for="otp" class="heading">Enter Your OTP : </label>
		<br>
			<input class="textbook" type="text" placeholder="OTP" id="otp" name="otp" value="" required=" ">
			
			<br>
            <input class="btn" type="submit" name="submit2" value="submit">
           
        </form>
        <span class="error"> <?php echo $otperr;?></span>
    </dev>
    
	
</body>
</html>