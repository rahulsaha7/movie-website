<?php

require_once 'database.php';
      if($_SERVER['REQUEST_METHOD'] == 'GET'){

        

        

        $p = $_GET['call'];

        $sql = "SELECT * from movie_details where title like '%$p%' limit 10";

        // echo  "console.log($sql);";

        $db = new database();

        $db->query($sql);

        if($db->sql_query->rowCount() > 0){
            $count = $db->sql_query->rowCount();

            $result5 = $db->sql_query->fetchAll(PDO::FETCH_ASSOC);

                                if(!$result5){
                                    echo "<h1>Something went wrong , please connect to the administrator</h1>";
                                    $db->close_connection();
                                }

            for ($i=0; $i < $count; $i++) { 
                                        
                                        
              ?>
      <tr class="odd">
          <td>
              <img class="avatar-50" src=
              
              <?php 
              if($result5[$i]['path'])
              echo $result5[$i]['path'];
              else
              echo "";
              ?> alt="thumbnail">
          </td>
          <td>
          <?php 
          
          if($result5[$i]['title'])
          echo $result5[$i]['title'];
          else
              echo "N/A";
          
          ?>
          </td>
          <td>
          <?php 
          if($result5[$i]['avg_vote'])
          echo $result5[$i]['avg_vote'];
          else
              echo "N/A";?>
          </td>
          <td>
          <?php 
              if($result5[$i]['rated'])
              echo $result5[$i]['rated'];
              else
                  echo "N/A";

          ?>
          </td>
          <td>
          <?php 
          
          if($result5[$i]['year'])
          echo $result5[$i]['year'];
          else
              echo "N/A";
          
          ?>
          </td>
          <td>
          <?php 
          
          if($result5[$i]['type'])
          echo $result5[$i]['type'];
          else
              echo "N/A";

          ?>
          </td>
      </tr>


          <?php    
          }
         
        }else{
          echo "Oops no movie is found";
        }
        $db->close_connection();


    }else{

        }
?>