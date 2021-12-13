<?php

error_reporting(0);

include 'simple_html_dom.php';

require_once 'Include/database.php';

echo "hello world<br>";


$db = new database();
$sql =  "SELECT * from movie_details where title like '%:%' ";
    $db->query($sql);
    if($db->sql_query->rowCount() > 0 ){

        echo "yes";

        

        // $result = $db->sql_query->fetchAll(PDO::ASSOC);
        $result = $db->sql_query->fetchAll(PDO::FETCH_ASSOC);

        for($i=0;$i< sizeof($result);$i++){
            $result[$i]['title'] = str_replace(':','',$result[$i]['title']);
            $sql = "UPDATE movie_details SET title = ? where id = ?";
            $values = array($result[$i]['title'],$result[$i]['id']);
            $db->query_value($sql,$values);
              if($db->sql_query->rowCount() > 0){
                echo "done With".$result[$i]['id']."<br>";
              }
              else{
                  echo "<br><br> Not done With".$result[$i]['id']."<br>";
              }
            
        }



       


   


    }


    $db->close_connection();



    
    // return $all_data;

    
?>
