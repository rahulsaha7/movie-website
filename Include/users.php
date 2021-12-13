

<div class="container-fluid mt-3">
    <div class="row">
        <section class="col-12">

        <header>
                    <h4 class="head-title">
                    Users List
                    </h4>
            </header>
            
            <section class="no-of-users pb-3">

                 <div class="list-search">
                    <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
                       
                 </div>
                 <div class="">
                 
                    <section class="">
                        <table>
                            <thead class="movie-table">

                                <tr role=row>
                                    <th>
                                        Username
                                    </th>
                                    <th>
                                        Mobile_no
                                    </th>
                                    <th>
                                        Email Id
                                    </th>

                                </tr>

                            </thead>
                            <tbody class="movie-table">

                            <?php 

                        

                                $limit = 10;
                                $page_no=1;
                                $max_no_of_pages=10;
                                $no_of_pages = 10;

                                $db = new database();

                                if(isset($_GET['page'])){
                                    $page_no = $_GET['page'];
      
                                }
    
                                $offset = ($page_no-1) *($limit);

                                $sql = "SELECT * FROM RegistrationTable ORDER BY Username  DESC limit $offset,$limit";

                                $db->query($sql);

                                $count = $db->sql_query->rowCount();
                                $result4 = $db->sql_query->fetchAll(PDO::FETCH_ASSOC);

                                if(!$result4){
                                    echo "<h1 class='warning mt-3 mb-3' >No  More list to show </h1>";
                                    $db->close_connection();
                                }
                                else{
                                    for ($i=0; $i < $count ; $i++) { 
                                        
                                        
                                        ?>
                                <tr class="odd">
                                   
                                    <td>
                                    <?php 
                                    
                                    if($result4[$i]['Username'])
                                    echo $result4[$i]['Username'];
                                    else
                                        echo "N/A";
                                    
                                    ?>
                                    </td>
                                    <td>
                                    <?php 
                                    if($result4[$i]['mobile'])
                                    echo $result4[$i]['mobile'];
                                    else
                                        echo "N/A";?>
                                    </td>
                                    <td>
                                    <?php 
                                        if($result4[$i]['email_id'])
                                        echo $result4[$i]['email_id'];
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
                <a href="admin.php?category=users&page=<?php echo $j;?>" class="page-link "><?php echo $j?></a>
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
                
        
        </section>

    </div>

</div>