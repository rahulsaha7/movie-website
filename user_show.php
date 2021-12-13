<?php
        session_start();
        if (isset($_SESSION["Username"])) {
            echo "Welcome :".$_SESSION["Username"];
        	echo "<br><a href='logout.php'><input type='button' value='log out'></a>";
        }
?>
