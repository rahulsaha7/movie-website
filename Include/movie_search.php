<?php

require_once 'database.php';

  

    

    class top_featured{
        private $result;
        protected $limit;
        protected $year1;
        protected $year2;
        protected $sql;
        public $title;
        public $page_no;
        public $no_of_pages;
        public $max_no_of_pages;
        public $name;

        function __construct(){


          if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $this->name = $_GET['mname'];
        

          }
         

            $this->limit = 10;
            $this->page_no=1;
            $this->max_no_of_pages=7;

          
          

            $this->row_count();
          
            $this->top_featured_list();
           
          
           
        }


        function row_count(){

           
            $db1 = new database();
            
           
           
          
            
            $this->sql = "SELECT id FROM movie_details WHERE title = ? ";
            $values = array($this->name);
            $db1->query_value($this->sql,$values);


           
            $this->no_of_pages = $db1->sql_query->rowCount();

          

            
            $this->no_of_pages = ceil($this->no_of_pages / $this->limit);

           

            $db1->close_connection();


        }

        function top_featured_list(){

            $db = new database();
            
           
           
          
         
           
            $offset = ($this->page_no-1) *($this->limit);


            $this->sql = "SELECT * FROM movie_details WHERE title = ? LIMIT $offset,$this->limit";

            $values = array($this->name);
          
            $db->query_value($this->sql,$values);

            
            $count = $db->sql_query->rowCount();
          
            $this->result = $db->sql_query->fetchAll(PDO::FETCH_ASSOC);
          
            if($db->sql_query->rowCount() == 0){
              
            }
            else {
                ?>
                <h4 class="general-tittle ">
                    Search Results
                </h4>
                <div class="testing-a-section">
                <?php
                for($j=0;$j<$count;$j++){
                    ?>
                   
                    <div class="fst-movie play-button featured-list">
                            <img src=<?php echo $this->result[$j]['path'];?> alt="image" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle top-featured-middle middle-add-button-test"><i class="fa fa-play" aria-hidden="true"></i>
    
                            </button>
                            <div class="movie-tittle-year">
                            <h6 class="movie-tittle"><?php echo $this->result[$j]['title'] ;?></h6><span style="font-size: small ;"></span>
                            <h6><?php echo $this->result[$j]['year'] ;?></h6>
                            <span class="rating" style="display: inline; font-size: 96%;"><?php echo $this->result[$j]['avg_vote'] ;?></span>
                            </div>
                         </div>

                        <?php
                }
                ?>
               </div>
                <?php
                $this->pagination();
            }

           
            $db->close_connection();
        }

       

        function pagination(){

            ?>

            <div class="pagination-div">


           
            <nav aria-label="top featured navigation">

           <ul class="pagination">

            <li class="page-item">
                    <a href="#" class="page-link" aria-label="Previous"><span aria-hidden="true" >&laquo;</span> Previous</a>
                  </li>
                <?php
              for($i=1;$i<=$this->no_of_pages && $i < $this->max_no_of_pages;$i++){

                     if($this->page_no == $i){
                         $active = 'active';
                    }
                
                 else
                    $active = '';
             ?>       
           <li class="page-item <?php echo $active ?>">
                    <a href="movie_site_second.php?page=<?php echo $i ?>" class="page-link "><?php echo $i ?></a>
                 </li>

                 <?php   
    
}
?>
            
            <li class="page-item">
                    <a href="#" class="page-link" aria-label="Next">Next<span aria-hidden="true" >&raquo;</span></a>
                 </li>

            </nav>

            </div>

        <?php            
               

           

    }
};

    $obj = new top_featured();



?>



              