<?
     
?>

<div class="container-fluid">
    <section class="row">
        <div class="col-12 row-devider row ">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-9 mr-3 recently-added-view">

                <header class="mb-3 mt-3">
                    <h4 class="head-title">
                         Recently Added Items
                    </h4>
                </header>
                <section class="recently-added-items d-flex flex-lg-row flex-xl-row flex-column pt-3 mb-3">
                
                    <?php
                       
                       
                        $sql = "SELECT * from movie_details order by id DESC limit 5";
                        

                        $db_obj = new database();

                        



                        $db_obj->query($sql);
                       

                        

                        if($db_obj->sql_query->rowCount() > 0){
                            $result = $db_obj->sql_query->fetchAll(PDO::FETCH_ASSOC);
                            $db_obj->close_connection();
                        for ($i=0; $i < 5; $i++) { 
                           ?>

                    <div class="item1 d-flex flex-column mr-3 ml-3">
                        <section class="section1">
                                <img src=<?php echo $result[$i]['path'] ;?> alt="Recent Item Image">
                        </section>

                        <section class="section2 mt-2">
                                <h6 class="ml-3">
                                <?php 
                                if($result[$i]['title'])
                                echo $result[$i]['title'] ;
                                else
                                echo  "N/A";
                                ?>
                                </h6>
                                <p class="ml-3">
                                <?php 
                                if($result[$i]['type'])
                                echo $result[$i]['type'] ;
                                else
                                    echo "N/A";
                                
                                ?>
                                </p>
                                <div class="d-flex flex-row">
                                    <p class="mr-3 ml-3">
                                    
                                    <?php 
                                    if($result[$i]['avg_vote']){
                                        echo $result[$i]['avg_vote']."/10";
                                    }
                                        else{
                                            echo "N/A";
                                        }
                                    ?>
                                    </p>
                                    <p>
                                    <?php 
                                    if($result[$i]['year']) 
                                    echo $result[$i]['year'] ;
                                    else
                                    echo "N/A";
                                    ?>
                                    </p>
                                </div>
                        </section>
                    </div>


                        <?php 
                        }

                        }else{
                            echo "OOPS! NO SOMETHING WENT WRONG";
                            $db_obj->close_connection();
                            
                        }

                    ?>
                    
                   



                </section>

            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 total-page-view">
            
            <header class="mb-3 mt-3">
                    <h4 class="head-title">
                    Total page View 
                    </h4>
            </header>

            <section class="total-view-page-section d-flex flex-column pt-4">

            <?php

                 $sql2 = "SELECT sum(total_searched) as view_no from  RegistrationTable where 1";
                 $sql3 = "SELECT * FROM RegistrationTable where 1";
                 $db_obj2 = new database();

                 $db_obj3 = new database();

                 $db_obj2->query($sql2);
                 $db_obj3->query($sql3);

                 if($db_obj2->sql_query->rowCount() > 0 ){
                    $result1 = $db_obj2->sql_query->fetchAll(PDO::FETCH_ASSOC);
                    $result2 = $db_obj3->sql_query->rowCount();
                    $db_obj2->close_connection();
                    $db_obj3->close_connection();

                ?>
                
                        <div class="total-page-item mb-3"> 
                        
                            <p><i class="fas fa-eye ml-2 mr-2"></i> Total  Searched  <?php echo " ".$result1[0]['view_no'];?></p>    
                        </div>
                        <div class="total-page-item">
    
                            
                            <p><i class="fas fa-users ml-2 mr-2"></i> Total Subscribers <?php echo " ".$result2;?></p>
    
                        </div>
                

            <?php
                 }else{
                    echo "OOPS! NO OF USERs AND VIEW TO THE PAGE NOT SELECTED \n SOMETHING WENT WRONG";
                    
                    $db_obj2->close_connection();
                    $db_obj3->close_connection();
                 }
            ?>

                    
            </section>



            </div>
        </div>
            <div class="col-12 total-movies mt-3">
            <header>
                    <h4 class="head-title">
                    Movie List
                    </h4>
            </header>
            
            <section class="no-of-movies pb-3">

                 <div class="list-search">
                    <input class="form-control mr-sm-2 movie-search-input" type="search" placeholder="Search" aria-label="Search">
                       
                 </div>
                 <div class="">
                 
                    <section class="">
                        <table>
                            <thead class="movie-table">

                                <tr role=row>
                                    <th>
                                        Thumbnail
                                    </th>
                                    <th>
                                        Title
                                    </th>
                                    <th>
                                        Rating
                                    </th>
                                    <th>
                                        Cateogory
                                    </th>
                                    <th>
                                        R.Date
                                    </th>
                                    <th>
                                        Type
                                    </th>
                                </tr>

                            </thead>
                            <tbody class="movie-tables">

                                <?php
                                
                                // $limit = 10;
                                // $page_no=1;
                                // $max_no_of_pages=10;
                                // $no_of_pages = 10;

                               

                                

                                $limit = 10;
                                $page_no=1;
                                $max_no_of_pages=10;
                                $no_of_pages = 10;
                                
                                    $db = new database();

                                    if(isset($_GET['page'])){
                                        $page_no = $_GET['page'];
                                      
                                    }
                                    
                                $offset = ($page_no-1) *($limit);
                               
                                $sql = "SELECT * FROM movie_details ORDER BY id  DESC limit $offset,$limit";

                                $db->query($sql);

                                $count = $db->sql_query->rowCount();

                                $result4 = $db->sql_query->fetchAll(PDO::FETCH_ASSOC);

                                if(!$result4){
                                    echo "<h1 class='warning'>No  More list to show </h1>";
                                    $db->close_connection();
                                }
                                else{
                                    for ($i=0; $i < $count ; $i++) { 
                                        
                                        
                                        ?>
                                <tr class="odd">
                                    <td>
                                        <img class="avatar-50" src=<?php echo $result4[$i]['path'];?> alt="thumbnail">
                                    </td>
                                    <td>
                                    <?php 
                                    
                                    if($result4[$i]['title'])
                                    echo $result4[$i]['title'];
                                    else
                                        echo "N/A";
                                    
                                    ?>
                                    </td>
                                    <td>
                                    <?php 
                                    if($result4[$i]['avg_vote'])
                                    echo $result4[$i]['avg_vote'];
                                    else
                                        echo "N/A";?>
                                    </td>
                                    <td>
                                    <?php 
                                        if($result4[$i]['rated'])
                                        echo $result4[$i]['rated'];
                                        else
                                            echo "N/A";

                                    ?>
                                    </td>
                                    <td>
                                    <?php 
                                    
                                    if($result4[$i]['year'])
                                    echo $result4[$i]['year'];
                                    else
                                        echo "N/A";
                                    
                                    ?>
                                    </td>
                                    <td>
                                    <?php 
                                    
                                    if($result4[$i]['type'])
                                    echo $result4[$i]['type'];
                                    else
                                        echo "N/A";

                                    ?>
                                    </td>
                                </tr>


                                    <?php    
                                    }
                                }

                                $db->close_connection();

                               
 



                                ?>
                                

                            </tbody>
                        </table>

                        <div class="pagination-div-test d-flex justify-content-end">
                                
                                <nav aria-label="Movie List navigation">

                                <ul class="pagination">

                                     <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous"><span aria-hidden="true" >&laquo;</span> Previous</a>
                            </li>
                            <?php

                                for($j=1;$j<=$no_of_pages && $j < $max_no_of_pages;$j++){

                                                 if($page_no == $j){
                                 $active = 'active';
                                 }

                                else
                                    $active = '';   
                            ?>
                        <li class="page-item <?php echo $active ?>">
                <a href="admin.php?category=home&page=<?php echo $j;?>" class="page-link "><?php echo $j?></a>
             </li>
                        <?php
                        }
                        ?>
                        <li class="page-item">
                <a href="#" class="page-link" aria-label="Next">Next<span aria-hidden="true" >&raquo;</span></a>
             </li>

        </nav>

                       
                        </div>

                     </section>
                 

                 </div>

            </section>
             
             </div>
       
    </section>
</div>