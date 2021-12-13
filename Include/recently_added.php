                   
<?php


require_once 'database.php';

class recently_added{
    private $result;
    protected $limit;
    protected $sql;
    protected $year1;
    public $title;
    public $page_no;
    public $no_of_pages;
    public $max_no_of_pages;





        
    function __construct(){


        $this->limit = 10;
        
        $this->year1 = date('Y');

      $this->page_no=1;
      $this->max_no_of_pages=7;

        $this->row_count();

        
        $this->top_featured_list();
        
        $this->pagination();
        
       
    }
        
       
    


    function row_count(){

        //This code is for database connection 
        $db1 = new database();
        
        //Getting the page no. from  url using gate 
       
      
        // $this->sql = "SELECT * FROM movies WHERE year BETWEEN '".$this->year1."'";

                      
         $this->sql = "SELECT id FROM movie_details WHERE year = '".$this->year1."' ";

        //Sql query for calculating no of rows
       // $this->sql = "SELECT (imdb_title_id) FROM movies WHERE avg_vote > 8";
      
        $db1->query($this->sql);


        //Using the rowCount() function to get the no of returned row 
        $this->no_of_pages = $db1->sql_query->rowCount();

    
        //Setting the no of pages for  the pagination
        $this->no_of_pages = ceil($this->no_of_pages / $this->limit);

       

        $db1->close_connection();


    }

    function top_featured_list(){

        $db = new database();
        
       
      
        // $this->sql = "SELECT * FROM movies WHERE year BETWEEN '".$this->year1."'";
        
         if(isset($_GET['page'])){
            $this->page_no = $_GET['page'];
          
        }

       
        //Setting the offset for limit clause in sql query 
        $offset = ($this->page_no-1) *($this->limit);


        $this->sql = "SELECT * FROM movie_details WHERE year = '".$this->year1."' limit $offset,$this->limit";

        
      
        $db->query($this->sql);

        //Count for viewing the no. of result usinng a for loop 
        $count = $db->sql_query->rowCount();
      
        $this->result = $db->sql_query->fetchAll(PDO::FETCH_ASSOC);
      
        if(!$this->result){
            echo "<h1>Something went wrong , please connect to the administrator</h1>";
        }
        else {
            echo '<div class="testing-a-section">';
            for($j=0;$j<$count;$j++){
                ?>
               
               <div class="sith-movie play-button recently-added-list">
                                <img src=<?php echo $this->result[$j]['path'] ;?> alt="" width="100%">
                                <div class="overlay-a" style="background-color: white;"></div>
                                <button class="middle recently-added-middle"><i class="fa fa-play" aria-hidden="true"></i>
            
                                </button>
                                <div class="movie-tittle-year ">
                                    <h6 class="movie-tittle"><?php echo $this->result[$j]['title'] ;?></h6><span style="font-size: small ;"></span>
                                    <h6>2016</h6>
                                    <span class="rating" style="display: inline; font-size: 96%;"><?php echo $this->result[$j]['avg_vote'] ;?></span>
                                </div>
                            </div>
                    <?php
            }
            echo "</div>";
        }

        $db->close_connection();
    }

   

    function pagination(){

        ?>

        <div class="pagination-div">


       
        <nav aria-label="top featured navigation">

       <ul class="pagination">

       <?php if($this->page_no > 1){
               ?>
            <li class="page-item">
                
                    <a href="<?php echo "index.php?page=".($this->page_no-1); ?>" class="page-link" aria-label="Previous"><span aria-hidden="true" >&laquo;</span></a>
                  </li>
            <?php
           }?>
            <?php
        for($i=1;$i<=$this->no_of_pages && $i < $this->max_no_of_pages;$i++){

                 if($this->page_no == $i){
                     $active = 'active';
                }
            
             else
                $active = '';
         ?>       
       <li class="page-item <?php echo $active ?>">
                <a href="index.php?page=<?php echo $i ?>" class="page-link "><?php echo $i ?></a>
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
        </nav>

        </div>

    <?php            
           

       

}
};

$obj = new recently_added();




?>



          

                  