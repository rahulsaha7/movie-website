<!DOCTYPE html>
<html>
<head>
	<title>Password Change</title>
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
.new-pass{
    width: 300px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: #191919;
  text-align: center;   
}
.heading{
    color: white;
  text-transform: uppercase;
  font-weight: 500;
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

input[type = "password"]{
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

	</style>
</head>
<body>
        <?php
        require_once 'database.php';
			session_start();
				$pass1err=$pass2err="";
                $pass1=$pass2="";
                $pass3err = "";
			if (isset($_POST['submit'])) {
					if (empty($_POST['pass1'])) {
						$pass1err="Requried Field";
					}
					else{
						$pass1=$_POST['pass1'];
					}
					if (empty($_POST['pass2'])) {
						$pass2err="Required Field";
					}
					else{
						$pass2=$_POST['pass2'];
						//echo "$pass2";
					}
					if ($pass1 != $pass2) {
						//echo "$pass2";
						$pass2err="Password Missmatch";
					}
					else if ($pass1 == $pass2){
							$email=$_SESSION['email'];
                        //	echo "$email";
                        $db = new database();
                            $sql="UPDATE  RegistrationTable SET Pass='$pass1' WHERE email_id='".$email."'";
                            $db->query($sql);
							if ($db->sql_query->rowCount() > 0) {
									echo "<p>Password is changes successfully<p>";
									session_destroy();
									$success=true;
                                    ?>
                                        <a href="../index.php">Go Back</a>
                                    <?php
							}
							else
							{
                                $pass3err = "Something Went Wrong";
							}
							$db->close_connection();
					}
			}


			if (!isset($_POST['submit']) || empty($_POST['pass1'])|| empty($_POST['pass2']) || $success=false) {
		?>

		<div class="new-pass">
			<form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'  method="POST" >
				<!-- <span><p class="error"> * Required Field</p></span> -->
				<label for="" class="heading">New Password:</label>
				<br>
				
				<input class="textbook" type="Password" placeholder="New Password" name="pass1" value="" required="">
				<span class="error"><?php echo $pass1err ; ?> </span>
				<br>
				<br>
				<label for="" class="heading">Again Type Password:</label>
				<br>
				
				<input class="textbook" type="Password" placeholder="Match new Password" name="pass2" value="" required=" ">
				<span class="error"><?php echo $pass2err ; ?> </span>
				<br>
				<input class="btn" type="submit" name="submit" value="submit">
            </form>
            <span class="error"><?php echo $pass3err ; ?> </span>
		</div>
		<?php } ?>
</body>
</html>