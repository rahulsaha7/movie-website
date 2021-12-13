<?php
session_start();
if (isset($_SESSION["admin-user"])) {
    // $_SESSION['admin_user'] = "";
    unset($_SESSION['admin-user']);
	
}


?>