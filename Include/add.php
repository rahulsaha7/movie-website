<?php
    require_once 'database.php';
    if($_SERVER['REQUEST_METHOD']=='POST') {
        extract($_POST);
        if(!isset($_POST['noe'])){
            $noe = "N/A";
            // $nos= "N/A";
        }
        if(!isset($_POST['nos'])){
            $nos= "N/A";
        }
        if(isset($_FILES['image'])){
            $file_size = $_FILES['image']['size'];
            $file_type = $_FILES['image']['type'];
            if($file_size <= 2097152 && $file_type == 'image/jpg' || $file_type =='image/png' || $file_type=='image/jpeg' ){
                $file_name = $_FILES['image']['name'];
                $temp_name = $_FILES['image']['tmp_name'];
                $folder = "../Assets/images/movie_image/".$file_name;
                
                // move_uploaded_file($temp_name,$folder);
                if(move_uploaded_file($temp_name,$folder)){
                //    $title =  str_replace(" ","+",$title);
                $folder = "Assets/images/movie_image/".$file_name;
                   $sql = "INSERT INTO movie_details values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                   $values = array(null,$title,$year,$genre,$duration,$country,$language,$director,$writer,$production_company,$cast,$description,$avg_vote,$budget,$income,$folder,$age_rating,$rated,$noe,$nos,$type);
                
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

            }
            else 
                echo "keep the size below 2MB or type should png or jpg or jpeg";
               
        }
        else {
            echo "no image is selected";
        }
    }

    


?>