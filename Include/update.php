<?php 

require_once 'database.php';
session_start();


//Function for updating Registration table

function reg_update(){
    $db1 = new database();

    $sql = "UPDATE RegistrationTable set new_join = 0";

    $db1->query($sql);

    if($db1->sql_query->rowCount() >= 0)
     echo "done";
     else 
    echo "not done";
    $db1->close_connection();
}

//Function for updateing feedback table

function feed_update(){
    $db1 = new database();

    $sql = "UPDATE feedback set new_join = 0";

    $db1->query($sql);

    if($db1->sql_query->rowCount() >= 0)
     echo "done";
     else 
    echo "not done";
    $db1->close_connection();
}

//Function for inserting value into  admin table

function insert_admin(){

    extract($_POST);
    // echo "hello world";

    if(isset($_FILES['admin_image'])){

        $file_size = $_FILES['admin_image']['size'];
        $file_type = $_FILES['admin_image']['type'];
        if($file_size <= 2097152 && $file_type == 'image/jpg' || $file_type =='image/png' || $file_type=='image/jpeg' ){

                $file_name = $_FILES['admin_image']['name'];
                $temp_name = $_FILES['admin_image']['tmp_name'];
                $folder = "../Assets/images/admin_image/".$file_name;
                if(move_uploaded_file($temp_name,$folder)){
                    $folder = "Assets/images/admin_image/".$file_name;
                    $admin_pass = sha1($admin_pass);   
                    $sql = "INSERT INTO admin values (?,?,?,?)";
                    $values = array($admin_user,$admin_pass,$folder,$new_join);
                    $db = new database();
                   $db->query_value($sql,$values);
                   if($db->sql_query->rowCount() > 0){
                    echo "Successfully added to the list ";

                }
                else{
                    echo "something Went Wrong";
                }
                $db->close_connection();
                }

        }else 
        echo "keep the size below 2MB or type should png or jpg or jpeg";

    }
    else {
        echo "no image is selected";
    }
}

//Function for updating admin table

function update_admin(){

    extract($_POST);
    if(isset($_FILES['admin_image'])){

        $file_size = $_FILES['admin_image']['size'];
        $file_type = $_FILES['admin_image']['type'];
        if($file_size <= 2097152 && $file_type == 'image/jpg' || $file_type =='image/png' || $file_type=='image/jpeg' ){

                $file_name = $_FILES['admin_image']['name'];
                $temp_name = $_FILES['admin_image']['tmp_name'];
                $folder = "../Assets/images/admin_image/".$file_name;
                if(move_uploaded_file($temp_name,$folder)){
                    $folder = "Assets/images/admin_image/".$file_name;
                    $admin_pass = sha1($admin_pass);   
                    $sql = "UPDATE admin SET user_id = '".$admin_user."',password = '".$admin_pass."',image = '".$folder."'  where user_id = '".$old_admin_user."' " ;
                    // $values = array($admin_user,$admin_pass,$folder,$new_join);
                    $db = new database();
                   $db->query($sql);
                   if($db->sql_query->rowCount() > 0){
                    echo "Successfully added to the list"."Try to sign in again by Signout ";

                }
                else{
                    echo "User Id not exists";
                }
                $db->close_connection();
                }

        }else 
        echo "keep the size below 2MB or type should png or jpg or jpeg";

    }
    else {
        echo "no image is selected";
    }

    // $sql = "UPDATE admin SET user_id = '".$admin_user."'  where id = '".$ids."' " ;




}

function add_to_user_table(){
    if(isset($_SESSION['Username'])){
            $username = $_SESSION['Username'];
            $db = new database();
            $sql = "UPDATE RegistrationTable set total_searched = total_searched+1 where Username = '$username'";
            $db->query($sql);
            if($db->sql_query->rowCount() > 0)
                echo "Successfull";
            else
                echo "Successfull";

            $db->close_connection();
    }else{
        echo "unsuccessfull";
    }
    // echo "test";
}

if($_SERVER['REQUEST_METHOD']== 'POST'){
    extract ($_POST);
    

   

    // echo $_POST['data'];

    if($call == "Update Registration")
        reg_update();

    if($call == "insert_admin")
        insert_admin();
        
    if($call == "update_admin")
        update_admin();
    if($call == 'movie_searched_by_admin')
        add_to_user_table();
    else
        feed_update();


   
    

}

?>