<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $movie_name = $_POST["name"];
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "movie_site";
    $conn = new mysqli($server,$user,$pass,$db);
    if(!$conn)
        die($conn->connect_error());
    else{
            $sql = "SELECT MOVIE_IMAGES FROM `movie_details` WHERE MOVIE_NAME ='".$movie_name."'";
          //  echo $sql;
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                $result = $result->fetch_assoc();
                $folder = $result["MOVIE_IMAGES"];
            //    echo $folder;
                echo "<img src='$folder' height = '40%'  width='40%' alt='image'/>";
            }
            else{
                echo "No Entry";
            }
        $conn->close();
    }

}
?>        