<?php

require_once 'database.php';
if($_SERVER['REQUEST_METHOD']== 'POST'){
extract ($_POST);
}
$db = new database();

$sql = "SELECT COUNT(*) FROM information_schema.tables WHERE table_name = 'RegistrationTable' ";

$db->query($sql);


if($db->sql_query->rowCount() == 0){
$sql="CREATE TABLE RegistrationTable (
Username varchar(50) PRIMARY KEY,
Pass varchar(50) not null,
mobile varchar(12) NOT NULL,
email_id varchar(50) NOT NULL,
otp varchar(6)
)";


$db->query($sql);
}
 
$sql="SELECT Username FROM `RegistrationTable` WHERE Username='".$Name."'";
$db->query($sql);
if ($db->sql_query->rowCount() > 0) {
	echo "Username already exists";
//	echo "<form><input type='button' value='go back!' onclick='history.go(-1)'></form>";
}
elseif ($db->sql_query->rowCount() == 0) {
	$sql = "SELECT email_id from `RegistrationTable` where email_id = '".$email."'";
	$db->query($sql);
	if($db->sql_query->rowCount() <= 0){
$sql ="INSERT INTO `RegistrationTable` (Username,Pass ,mobile,email_id,new_join) VALUES (?,?,?,?,?)";

if($_SERVER['REQUEST_METHOD']== 'POST'){
	
	
	$values = array($Name,$Password,$phone,$email,1);
}

$db->query_value($sql,$values);
if($db->result)
	echo "Registration sucessfull";
else 
	echo "something went wrong";
}else{
	echo "email already exists";
}
}
else{
	echo "<br>";
	echo "ooops , something went wrong";


$db->close_connection();

}

 ?>