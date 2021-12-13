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


        function __construct(){
            $this->limit = 10;

            $this->year1 = date('Y');
            
            $this->year2 = date('Y')-2;
            
           

          
          
            $this->row_count();
            $this->pagination();
            // if(isset($_GET['page'])){
            //     $this->page_no = $_GET['page'];
               
            // }
            // $this->top_featured_list();
        }


        function row_count(){

            $db1 = new database();
            
          
            // $sql = "SELECT * FROM movies WHERE year BETWEEN '".$this->year2."' AND '".$this->year1."'";
            
            $this->sql = "SELECT * FROM movies WHERE year BETWEEN '1918' AND '1919'";
          
            $db1->query($this->sql);

            $this->no_of_pages = $db1->sql_query->rowCount();

            echo "<script>console.log($this->no_of_pages);</script>";

            $this->no_of_pages = ceil($this->no_of_pages / $this->limit);

           

            $db1->close_connection();


        }

        function top_featured_list(){

            $db = new database();
            
            if(isset($_GET['page'])){
                $this->page_no = $_GET['page'];
            }
          
            // $sql = "SELECT * FROM movies WHERE year BETWEEN '".$this->year2."' AND '".$this->year1."'";
            
           

            $offset = ($this->page_no-1) *($this->limit);


            $this->sql = "SELECT * FROM movies WHERE year BETWEEN '1918' AND '1919' LIMIT $offset,$this->limit";

            
          
            $db->query($this->sql);

            $count = $db->sql_query->rowCount();
          
            $this->result = $db->sql_query->fetchAll(PDO::FETCH_ASSOC);
          
            if(!$this->result){
                echo "<h1>Something went wrong , please connect to the administrator</h1>";
            }
            else {
                for($j=0;$j<$count;$j++){
                    echo '<div class="fst-movie play-button featured-list">
                            <img src="Assets/images/Marvel-Iron-Fist-Season-2-720p-hindi-200x300.jpg" alt="image" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle top-featured-middle"><i class="fa fa-play" aria-hidden="true"></i>
    
                            </button>
                            <div class="movie-tittle-year">
                            <h6 class="movie-tittle">'.$this->result[$j]['title'].'</h6><span style="font-size: small ;"></span>
                            <h6>2020</h6>
                            <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                         </div>';
                }
            }

            $db->close_connection();
        }

       

        function pagination(){

            echo "<div>";
           
            echo '<ul class="pagination">';

            echo '<li class="page-item">
                    <a href="#" class="page-link" aria-label="Previous"><span aria-hidden="true" >&laquo;</span> Previous</a>
                  </li>';
            for($i=1;$i<=$this->no_of_pages;$i++){
                //  if(isset($this->page_no)){
                //     echo "<script>console.log($this->page_no)</script>";
                //      if($this->page_no == $i){
                //          $active = 'active';
                //     }
                // }
                //  else
                    $active = '';

            echo '<li class="page-item '.$active.'">
                    <a href="movie_site_second.php?page='.$i.'" class="page-link ">'.$i.'</a>
                 </li>';
            }
            echo '<li class="page-item">
                    <a href="#" class="page-link" aria-label="Next">Next<span aria-hidden="true" >&raquo;</span></a>
                 </li>';

             echo "</div>";   
    
         }

    };

    $obj = new top_featured();




?>



                <!-- <div class="fst-movie play-button featured-list">
                    <img src="Assets/images/Marvel-Iron-Fist-Season-2-720p-hindi-200x300.jpg" alt="" width="100%">
                    <div class="overlay-a" style="background-color: white;"></div>
                    <button class="middle top-featured-middle"><i class="fa fa-play" aria-hidden="true"></i>

                    </button>
                    <div class="movie-tittle-year">
                    <h6 class="movie-tittle">Iron Fist</h6><span style="font-size: small ;"></span>
                    <h6>2020</h6>
                    <span class="rating" style="display: inline; font-size: 96%;"></span>
                    </div>
                </div>
               
                <div class="snd-movie play-button featured-list">
                    <img src="Assets/images/Flash.jpg" alt="" width="100%">
                    <div class="overlay-a" style="background-color: white;"></div>
                    <button class="middle top-featured-middle"><i class="fa fa-play" aria-hidden="true"></i>

                    </button>
                    <div class="movie-tittle-year">
                        <h6 class="movie-tittle">Flash</h6><span style="font-size: small ;"></span>
                        <h6>2020</h6>
                        <span class="rating" style="display: inline; font-size: 96%;"></span>
                    </div>
                </div>
                
                <div class="trd-movie play-button featured-list">
                    <img src="Assets/images/r5.jpg" alt="" width="100%">
                    <div class="overlay-a" style="background-color: white;"></div>
                    <button class="middle top-featured-middle"><i class="fa fa-play" aria-hidden="true"></i>

                    </button>
                    <div class="movie-tittle-year play-button">
                        <h6 class="movie-tittle">Khuda Hafiz</h6><span style="font-size: small ;"></span>
                        <h6>2020</h6>
                        <span class="rating" style="display: inline; font-size: 96%;"></span>
                    </div>
                </div>
              
                <div class="fth-movie play-button featured-list">
                    <img src="Assets/images/r2.png" alt="" width="100%">
                    <div class="overlay-a" style="background-color: white;"></div>
                    <button class="middle top-featured-middle"><i class="fa fa-play" aria-hidden="true"></i>

                    </button>
                    <div class="movie-tittle-year">
                        <h6 class="movie-tittle" >Ice Age </h6><span style="font-size: small ;">Meltdown</span>
                        <h6>2006</h6>
                        <span class="rating" style="display: inline; font-size: 96%;"></span>
                    </div>
                </div>
               
                <div class="fith-movie play-button featured-list">
                    <img src="Assets/images/r3.png" alt="" width="100%">
                    <div class="overlay-a" style="background-color: white;"></div>
                    <button class="middle top-featured-middle"><i class="fa fa-play" aria-hidden="true"></i>

                    </button>
                    <div class="movie-tittle-year">
                        <h6 class="movie-tittle">Lootcase</h6><span style="font-size: small ;"></span>
                        <h6>2020</h6>
                        <span class="rating" style="display: inline; font-size: 96%;"></span>
                    </div>
                </div>
              
                <div class="sith-movie play-button featured-list">
                    <img src="Assets/images/resized.png" alt="" width="100%">
                    <div class="overlay-a" style="background-color: white;"></div>
                    <button class="middle top-featured-middle"><i class="fa fa-play" aria-hidden="true"></i>

                    </button>
                    <div class="movie-tittle-year ">
                        <h6 class="movie-tittle">Independence Day</h6><span style="font-size: small ;"></span>
                        <h6>2016</h6>
                        <span class="rating" style="display: inline; font-size: 96%;"></span>
                    </div>
                    </div> -->