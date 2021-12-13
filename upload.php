<?php
    error_reporting(0);
?>

<form action= '<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="POST" enctype="multipart/form-data">
    <input type="text" name="movie" placeholder="movie name" value>
    <br><br>
    <input type="file" name="file" value="choose file" accept=".png,.jpg,.jpeg">
    <br><br>
    <input type="submit" value="upload file">
</form>

<?php
    if(isset($_FILES['file'])){
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
        if($_FILES['file']['type'] != 'png')
            echo "error";
        $filename = $_FILES['file']['name'];
        $filetemp = $_FILES['file']['tmp_name'];
        $folder = "movie-images/".$filename;
        move_uploaded_file($filetemp,$folder);
        $usern="root";
        $password="";
        $servername="localhost";
        $dbname="movie_site";
        $connect= new mysqli($servername,$usern,$password);
        if (!$connect){
	        die("connection unsuccessfull".$conn->connect_error());
    }

    $connect->close();
    $connect= new mysqli($servername,$usern,$password,$dbname);
        if (!$connect){
            die("something went wrong".$conn->connect_error());
    }
    else{
        $sql ="INSERT INTO `movie_details` (MOVIE_NAME,MOVIE_IMAGES) VALUES (?,?)"; 
        if ($stmt = $connect->prepare($sql)) {
            $stmt->bind_param("ss",$movie,$folder_n);
            $movie=$_POST['movie'];
            $folder_n = $folder;
            if($stmt->execute()){
                echo "Registration successfull";
            }
            else
                    echo $stmt->error;
        }
        else{
            echo "<br>";
            echo "can't prepare $sql";
            $stmt->close();
        
        } 
    }
 $connect->close();

    }


?>