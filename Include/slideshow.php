<?php
    include 'database.php';

    $year1 = date('Y');

    $count = 0;


   
                        
                   
    


    $sql = "SELECT * FROM movie_details WHERE year = '".$year1."' LIMIT 6";
    $db = new database();
    $db->query($sql);
    if($db->sql_query->rowCount() > 0){
        $result = $db->sql_query->fetchAll(PDO::FETCH_ASSOC);
        // $json_obj = json_encode($result);
        $row =  $db->sql_query->rowCount();
    // for ($i=0; $i < $row ; $i++) { 
    ?>

<div class="slides effect">
                    <img src=<?php echo $result[0]['path'];?> alt="" width="100%">
                    <div class="caption-text">
                        <p class="tittle"><?php echo $result[0]['title'] ;?></p>
                        <p class="description"><?php echo $result[0]['description'] ;?></p>
                        <span class="slidy-progress"></span>
                     </div>
                   
                </div>
                <div class="slides effect">
                    <img src=<?php echo $result[1]['path'];?> alt="" width="100%">
                    <div class="caption-text">
                        <p class="tittle"><?php echo $result[1]['title'] ;?></p>
                        <p class="description"><?php echo $result[1]['description'] ;?></p>
                        <span class="slidy-progress"></span>
                     </div>
                   
                </div>
                <div class="slides effect">
                    <img src=<?php echo $result[2]['path'];?> alt="" width="100%">
                    <div class="caption-text">
                        <p class="tittle"><?php echo $result[2]['title'] ;?></p>
                        <p class="description"><?php echo $result[2]['description'] ;?></p>
                        <span class="slidy-progress"></span>
                     </div>
                   
                </div>
                <div class="slides effect">
                    <img src=<?php echo $result[3]['path'];?> alt="" width="100%">
                    <div class="caption-text">
                        <p class="tittle"><?php echo $result[3]['title'] ;?></p>
                        <p class="description"><?php echo $result[3]['description'] ;?></p>
                        <span class="slidy-progress"></span>
                     </div>
                   
                </div>
                <div class="slides effect">
                    <img src=<?php echo $result[4]['path'];?> alt="" width="100%">
                    <div class="caption-text">
                        <p class="tittle"><?php echo $result[4]['title'] ;?></p>
                        <p class="description"><?php echo $result[4]['description'] ;?></p>
                        <span class="slidy-progress"></span>
                     </div>
                   
                </div>
                <div class="slides effect">
                    <img src=<?php echo $result[5]['path'];?> alt="" width="100%">
                    <div class="caption-text">
                        <p class="tittle"><?php echo $result[5]['title'] ;?></p>
                        <p class="description"><?php echo $result[5]['description'] ;?></p>
                        <span class="slidy-progress"></span>
                     </div>
                   
                </div>
                
                <div class="name-slideshow">
                     <nav class="thmbnail">
                     <div >
                     <img src=<?php echo $result[0]['path'];?>  alt="" >
                     <a href="#" class="thubnai-a"><?php echo $result[0]['title'] ;?></a>
                 </div>
                     </nav>
                     <nav class="thmbnail">
                     <div >
                     <img src=<?php echo $result[1]['path'];?>  alt="" >
                     <a href="#" class="thubnai-a"><?php echo $result[1]['title'] ;?></a>
                 </div>
                     </nav>
                     <nav class="thmbnail">
                     <div >
                     <img src=<?php echo $result[2]['path'];?>  alt="" >
                     <a href="#" class="thubnai-a"><?php echo $result[2]['title'] ;?></a>
                 </div>
                     </nav>
                     <nav class="thmbnail">
                     <div >
                     <img src=<?php echo $result[3]['path'];?>  alt="" >
                     <a href="#" class="thubnai-a"><?php echo $result[3]['title'] ;?></a>
                 </div>
                     </nav>
                     <nav class="thmbnail">
                     <div >
                     <img src=<?php echo $result[4]['path'];?>  alt="" >
                     <a href="#" class="thubnai-a"><?php echo $result[4]['title'] ;?></a>
                 </div>
                     </nav>
                     <nav class="thmbnail">
                     <div >
                     <img src=<?php echo $result[5]['path'];?>  alt="" >
                     <a href="#" class="thubnai-a"><?php echo $result[5]['title'] ;?></a>
                 </div>
                     </nav>
                 </div>
                 <a class="prev" " style="display:none;"><i class="fa fa-chevron-left" aria-hidden="true"></i>
                 </a>
                 <a class="next" " style="display:none;"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                 </a> 

    <?php
    // }
   }else{
    echo "oops ! no movie selected \n looks like someting went wrong";
}

?>