<?php
session_start();
require_once 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	extract($_POST);	
	$db = new database();


	
$sql = "SELECT * FROM `RegistrationTable` WHERE Username= '".$Username."' ";

// $values = array($Username);

$db->query($sql);

	if($db->sql_query->rowCount() > 0){
		$result = $db->sql_query->fetchAll(PDO::FETCH_ASSOC);
 	 	
 	 	if($Password == $result[0]["Pass"]){
 	 		$_SESSION["Username"]=$Username;
		  //	echo "<script>location.href='mysql_add.php'</script>";
		  echo "Login sccuessfull";
		  echo "<form><input type='button' value='go back!' onclick='history.go(-1)'></form>";

 	 	}
 	 	else{
 	 		echo "Password missmatch";
 	 		echo "<form><input type='button' value='go back' onclick='history.go(-1)'></form>";
 	 	}
 	 }else{
 	 	echo "username doesn't exist ";
 	 	echo "<form><input type='button' value='go back!' onclick='history.go(-1)'></form>";
 	 }
		  }

	else {
		echo "oops, Something went wrong";
	}
	$db->close_connection();

?> 