<?php
session_start();
if (isset($_SESSION["Username"])) {
	unset($_SESSION['Username']);;
	
	// 	
//	header("location:login_portal.php");
	
}
/*else{
	header("location:login_portal.php");
}*/
?>