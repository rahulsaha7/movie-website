<?php
    require_once 'database.php';
    class genre{
        private $result;
        protected $limit;
        protected $sql;
        public $page_no;
        public $offset;
        public $no_of_pages;
        public $max_no_of_pages;
        public $genre;

        function __construct(){
            $this->limit = 10;
            $this->page_no=1;
            $this->max_no_of_pages=7;
            if(isset($_GET['value'])){
                $this->genre = $_GET['value'];
                $this->view();
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

        function view(){
            $this->sql = "SELECT id FROM  movie_details where genre like '%$this->genre%' ";
           // echo $this->sql;

           
           
            $this->row_count();
           
            if(isset($_GET['page'])){
                $this->page_no = $_GET['page'];
            
            }
           
            $this->offset = ($this->page_no-1) * ($this->limit);  
        
            if($this->genre != 'bollywood')
                $this->sql = "SELECT * FROM movie_details WHERE genre like '%$this->genre%' LIMIT $this->offset,$this->limit";
            else if($this->genre == 'bollywood')
                $this->sql = "SELECT * FROM movie_details WHERE genre like '%$this->genre%' or country = 'india' LIMIT $this->offset,$this->limit";
     
            $this->run();

          
            if($this->result)
                $this->pagination();
        }

      
        function pagination(){
            ?>
              <div class="pagination-div">
            <nav aria-label="web_series Result navigation">
                <ul class="pagination">
                <?php if($this->page_no < $this->max_no_of_pages-1){
               ?>
            <li class="page-item">
                
                    <a href="<?php echo "index.php?page=".($this->page_no-1); ?>" class="page-link" aria-label="Next"><span aria-hidden="true" >&laquo;</span></a>
                  </li>
            <?php
           }?>
                    <?php
                        for($i=1;$i <= $this->no_of_pages && $i <= $this->max_no_of_pages ;$i++){
                    ?>
                        <li class="page-item">
                        <a href="show.php?category=<?php echo $_GET['category'];?>&value=<?php echo $this->genre?>&page=<?php echo $i;?>" class="page-link" ><?php echo $i;?></a>
                    </li>
                    <?php 
                    }
                    ?>

<?php if($this->page_no < $this->max_no_of_pages-1){
               ?>
            <li class="page-item">
                
                    <a href="<?php echo "index.php?page=".($this->page_no+1); ?>" class="page-link" aria-label="Next"><span aria-hidden="true" >&raquo;</span></a>
                  </li>
            <?php
           }?>

                </ul>
            </nav>
            </div>
            <?php
        }
    };

    $obj = new genre();

?>