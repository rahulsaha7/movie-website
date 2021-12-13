<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once 'database.php';

    $email = $_POST["name"];
    // $server = "localhost";
    // $user = "root";
    // $pass = "";
    // $db = "movie_site";
    // $conn = new mysqli($server,$user,$pass,$db);
    // if(!$conn)
    //     die($conn->connect_error());
    // else{
        $email = test_input($email);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "<h3>Invalid format</h3>";
            die();
        }
    $sql = "INSERT INTO `email_check` (email)  VALUES (?)";
    $values = array($email);

    // print_r($values);

    $db=new database();

    $db->query_value($sql,$values);
    if($db->sql_query->rowCount() > 0){
        $subject="Email form movie mania";
        $message=  "Thanks for Subscribing <h1>Movie Mania</h1>\nWe will send you name of latest movies\nThank you \n Team Movie Mania";

        $headers = "From:rsahagdrive@gmail.com";
        if(mail($email,$subject,$message,$headers)){
            echo "<h3> Thanks for Subscribing</h3>";
        }else{
            echo "can't send mail";
        }
    }

    // if($stmt = $conn->prepare($sql)){
    //     $stmt->bind_param("s",$email_n);
    //     $email_n = $email;
    //     if($stmt->execute()){
            // $subject="Email form movie mania";
            // $message="Thanks for Subscribing <h1>Movie Mania</h1><br>We will send you name of latest movies<br>Thank you <br> Team Movie Mania";
            // $headers = "From:rsahagdrive@gmail.com";
            // if(mail($email,$subject,$message,$headers)){
            //     echo "<h3> Thanks for Subscribing</h3>";
            // }
        
    //     }
    //     else
    //         echo $stmt->error;
    //     $stmt->close();
    // }

   
    // $conn->close();
    // }
    }
    function test_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
?>