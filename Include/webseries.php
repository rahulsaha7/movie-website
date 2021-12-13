<?php

   require_once 'database.php'; 

    class webseries {
        private $result;
        protected $sql;
        protected $limit;
        public $category;
        public $page_no;
        public $no_of_pages;
        public $max_no_of_pages;
        public $offset;

        function __construct(){
           
            $this->limit = 10;
            $this->max_no_of_pages = 10 ;
            $this->page_no=1;
           
           
            if(isset($_GET['category'])){
               $this->category = $_GET['value'];
              
            }
        }

        function row_count(){
            $db = new database();
            $db->query($this->sql);
            $count = $db->sql_query->rowCount();

            $this->no_of_pages = ceil( $count / $this->limit ) ;
            $db->close_connection();
        }

        function run(){
            $db = new database();
           

            $db->query($this->sql);
            $count = $db->sql_query->rowCount();
            echo '<div class="testing-a-section">';
            $this->result = $db->sql_query->fetchAll(PDO::FETCH_ASSOC);
            if(!$this->result){
                ?>
                <h1>No result found</h1>
                <?php
                }
                else
                for($i = 0;$i<$count;$i++){
                    ?>
    
                            <div class="fst-movie play-button featured-list">
                                <img src=<?php echo $this->result[$i]['path'];?> alt="image" width="100%">
                                <div class="overlay-a" style="background-color: white;"></div>
                                <button class="middle top-featured-middle"><i class="fa fa-play" aria-hidden="true"></i>
        
                                </button>
                                <div class="movie-tittle-year">
                                <h6 class="movie-tittle"><?php echo $this->result[$i]['title'];?></h6><span style="font-size: small ;"></span>
                                <h6><?php echo $this->result[$i]['year'] ;?></h6>
                                <span class="rating" style="display: inline; font-size: 96%;"><?php echo $this->result[$i]['avg_vote'] ;?></span>
                                </div>
                             </div>
                    
    
                    <?php
                }
                echo "</div>";
            
            
            $db->close_connection();
        }




        function all(){


           
           $this->sql = "SELECT id FROM movie_details WHERE type = 'series' ";
            // $this->sql = "SELECT imdb_title_id FROM movies WHERE genre= 'drama'";
            
            
            $this->row_count();

            if(isset($_GET['page'])){
                $this->page_no = $_GET['page'];
            
            }

            

            $this->offset = ($this->page_no-1) * ($this->limit);            
              $this->sql = "SELECT * FROM movie_details WHERE type = 'series' LIMIT $this->offset,$this->limit ";
            // $this->sql = "SELECT * FROM movies WHERE genre='drama' LIMIT $this->offset,$this->limit";  


            $this->run();

          
            if($this->result)
                $this->pagination();

       

        }
        function hindi(){

           
           $this->sql = "SELECT id FROM movie_details WHERE type = 'series' and language = 'hindi'";
            // $this->sql = "SELECT imdb_title_id FROM movies WHERE genre= 'drama' and  language = 'hindi'";
            
            $this->row_count();

           


            if(isset($_GET['page'])){
                $this->page_no = $_GET['page'];
            
            }

            $this->offset = ($this->page_no-1) * ($this->limit);

            
            $this->sql = "SELECT * FROM movie_details WHERE type = 'series' and language = 'hindi' LIMIT $this->offset,$this->limit";
            // $this->sql = "SELECT * FROM movies WHERE genre='Drama' and language = 'hindi' LIMIT $this->offset,$this->limit";  
           
           $this->run();
          
           if($this->result)
            $this->pagination();

       
        }

        function amazon(){
           
             $this->sql = "SELECT id FROM movie_details WHERE type = 'series' and production_company like '%amazon%' ";
            //   $this->sql = "SELECT imdb_title_id FROM movies WHERE genre= 'Drama' and  production_company= 'amazon' ";
             
              $this->row_count();
  
  
              if(isset($_GET['page'])){
                  $this->page_no = $_GET['page'];
                //   echo "<script>console.log($this->page_no)</script>";
              }
  
              $this->offset = ($this->page_no-1) * ($this->limit);
  
              
              $this->sql = "SELECT * FROM movie_details WHERE type = 'series' and production_company like '%amazon%' LIMIT $this->offset,$this->limit ";
            //   $this->sql = "SELECT * FROM movies WHERE genre='drama' and  production_company= 'amazon' LIMIT $this->offset,$this->limit";  
             
             $this->run();  
  
          if($this->result)
            $this->pagination();
  
          
        }
        function netflix(){
           
              $this->sql = "SELECT id FROM movie_details WHERE type = 'series' and  production_company= 'netflix'";
            // $this->sql = "SELECT imdb_title_id FROM movies WHERE genre= 'drama' and  production_company= 'netflix' ";
              
               $this->row_count();
   
   
               if(isset($_GET['page'])){
                   $this->page_no = $_GET['page'];
                  
               }
   
               $this->offset = ($this->page_no-1) * ($this->limit);
   
               
               //   $this->sql = "SELECT * FROM movies WHERE category = 'webseries' and production_company= 'netflix' LIMIT $offset,$this->limit";
               $this->sql = "SELECT * FROM movies WHERE genre='drama' and  production_company= 'netflix' LIMIT $this->offset,$this->limit"; 
            //   echo $this->sql;
               $this->run();
             
               if($this->result)
                    $this->pagination();
   
          
    
        }
        function action_series(){

                $this->sql = "SELECT id FROM movie_details WHERE type = 'series' and  genre = 'action' ";
            // $this->sql = "SELECT imdb_title_id FROM movies WHERE genre= 'action' ";
              
            $this->row_count();


            if(isset($_GET['page'])){
                $this->page_no = $_GET['page'];
               
            }

            $this->offset = ($this->page_no-1) * ($this->limit);

            
              $this->sql = "SELECT * FROM movie_details WHERE type = 'series' and genre = 'action' LIMIT $this->offset,$this->limit";
            // $this->sql = "SELECT * FROM movies WHERE genre='action'  LIMIT $this->offset,$this->limit"; 
        //    echo $this->sql;
            $this->run();
          
            if($this->result)
                 $this->pagination();
        }
        function hbo(){
              $this->sql = "SELECT id FROM movie_details WHERE type = 'series' and  production_company like '%Warner Bros%' ";
            // $this->sql = "SELECT imdb_title_id FROM movies WHERE category = 'webseries' and  production_company= 'hbo' ";
            $this->row_count();


            if(isset($_GET['page'])){
                $this->page_no = $_GET['page'];
               
            }

            $this->offset = ($this->page_no-1) * ($this->limit);

            
            //   $this->sql = "SELECT * FROM movie_details WHERE type = 'series' and production_company like '%Warner Bros%' LIMIT $this->offset,$this->limit";
            $this->sql = "SELECT * FROM movie_details WHERE  production_company like '%Warner Bros%' LIMIT $this->offset,$this->limit";
            // $this->sql = "SELECT * FROM movies WHERE category = 'webseries' and  production_company= 'hbo' LIMIT $this->offset,$this->limit"; 
        //    echo $this->sql;
            $this->run();
          
            if($this->result)
                 $this->pagination();
        }



        function disney(){
           
            $this->sql = "SELECT id FROM movie_details WHERE type = 'series' and  production_company like '%Walt Disney Pictures%' or production_company like '%marvel entertainment%' ";
          // $this->sql = "SELECT imdb_title_id FROM movies WHERE category = 'webseries' and  production_company= 'hbo' ";
          $this->row_count();


          if(isset($_GET['page'])){
              $this->page_no = $_GET['page'];
             
          }

          $this->offset = ($this->page_no-1) * ($this->limit);

          
          //   $this->sql = "SELECT * FROM movie_details WHERE type = 'series' and production_company like '%Warner Bros%' LIMIT $this->offset,$this->limit";
          $this->sql = "SELECT * FROM movie_details WHERE  type = 'series' and production_company like '%Walt Disney Pictures%' or production_company like '%marvel entertainment%' LIMIT $this->offset,$this->limit";
          // $this->sql = "SELECT * FROM movies WHERE category = 'webseries' and  production_company= 'hbo' LIMIT $this->offset,$this->limit"; 
      //    echo $this->sql;
          $this->run();
        
          if($this->result)
               $this->pagination();
      }


       

        function pagination(){
            ?>
              <div class="pagination-div">
            <nav aria-label="web_series Result navigation">
                <ul class="pagination">
                    <li class="page-item">
                        <a href="#" class="page-link" aria-label = "Previous" ><span aria-hidden="false">&laquo;</span></a>
                    </li>
                    <?php
                        for($i=1;$i <= $this->no_of_pages && $i <= $this->max_no_of_pages ;$i++){
                    ?>
                        <li class="page-item">
                        <a href="show.php?category=<?php echo $_GET['category'];?>&value=<?php echo $this->category?>&page=<?php echo $i;?>" class="page-link" ><?php echo $i;?></a>
                    </li>
                    <?php 
                    }
                    ?>
                </ul>
            </nav>
            </div>
            <?php
        }
    };

    $obj = new webseries();

   switch ($obj->category) {
        case 'all':
           $obj->all();
           break;
        case 'hindi':
            $obj->hindi();
            break;
        case 'prime':
                $obj->amazon();
                break;
        case 'action_series':
                $obj->action_series();
                break;
        case 'netflix':
                    $obj->netflix();
                    break;
        case 'hbo':
                    $obj->hbo();
                    break;
        case 'disney':
                    $obj->disney();
                    break;
       default:
          echo "something went wrong";
           break;
   }
?>