<?php
 session_start();
 if (isset($_SESSION["Username"])) {
    $usern = $_SESSION["Username"];
    $user_set = 1;
}
else {
    $user_set = 0;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/Css/style.css">
    <link rel="stylesheet" type="text/css" href="Assets/Vendor/bootstrap/bootstrap-4.5.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"> 
  
    <script
			  src="//code.jquery.com/jquery-3.5.1.min.js"
			  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
			  crossorigin="anonymous"></script>
    <!--<script src="jquery-3.5.1.js"></script>-->
    <script src="Assets/Jquery/movie_site_sec_jquery.js"></script>
    <script src="Assets/Jquery/reg_valid.js"></script>
    <title>Movie Mania</title>
    <!-- <style>
       


    </style> -->
</head>
<body id="top">


    <div class="widget-show position-sticky" style="height: 300px; width: 250px; top: 75%;left:9%;z-index:1">

    </div>


    <div class="contains">

      
            <div class="header">
                <div class="tittle">
                    <a href="index.php" class="put">
                   <h1 id="putp" >hello</h1>
                     </a> 
                </div>
                <div class="header-search">
                    <form class="name-search">
                    <input type="text" class="search-inbox mname" placeholder="movie name" ><input type="submit" class="btn-dark search-go" value="GO"></form>
                    <p class="change-h" style="color: red; display: none;"></p>
                </div>
                <div class="log-btns">
                    <a href="Include/contacts.html" class="contact">
                    <button class="btn-info log  phone"><i class="fa fa-phone" aria-hidden="true"></i>
                    </button></a>
                    <a class="log-link">
                    <button class="btn-info log login" id="login-button">Login</button></a>
                    <button class="btn-info log reg" >Register</button>
                    <!-- <div class="reg-box-div">
                        <div class="reg-show box">
                            <div class="log-events">
                                <button class="menu-buttons  btn btn-outline-danger">✖
                                    <span class="close-msg">Close</span>
                                </button>
                                </div>
             
       <form class="reg-details">
		<font color="red">* Required field</font>
		<br>
		
		Username : 
		<input class="name" type="Text" name="Name" placeholder="Username">
		<span class="name-error error">* </span>
		<br>
		
		password : 
		<input class="passw" type="password" name="Password" placeholder="password" >
		<span class="passw-error error">* </span>
		<br>
		Again Password
		<input class="passwmatch" type="password" name="Password-check" placeholder="Again type password" >
		<span class="passw-mismatch error">* </span>
		<br>
  		Mobile Number :
  		<input class="number" type="text" name="phone" placeholder="Contact Number" >
  		<span class="number-error error">* </span>
  		<br>
  		Email Id :
  		<input class="email" type="text" name="email" placeholder="Email ID">
  		<span class=" email-error error">* </span>
  		<br>
        <input class="submit reg-details-submit" type="submit" name="submit" value="Submit">
    </form>
 

		<p class="show"></p>
                           
     </div>
     </div> -->
            </div>
        </div>
        <div class="navs">
            <button id="pull" class="toggle-menu">menu </button>
        </div>
        <div class="sidebar"><header style="color: black;"><button class="menu" id="menu-after">Menu</button></header>
            <nav ><a href="index.php">home</a></nav>
            <nav class="web-series-button"><a class="web-series"> web series  ▾</a>
                <div class="web-series-list">
                <nav><a href="show.php?category=webseries&value=all" target="">All</a></nav>
                <nav><a href="show.php?category=webseries&value=hindi" target="">hindi dubbed</a></nav>
                <nav><a href="show.php?category=webseries&value=action_series" target="">action series</a></nav>
                <nav><a href="show.php?category=webseries&value=prime" target="">amazon prime</a></nav>
                <nav><a href="show.php?category=webseries&value=netflix" target="">netflix series</a></nav>
                <nav><a href="show.php?category=webseries&value=disney" target="">MARVEL STUDIOS</a></nav>
                <nav><a href="show.php?category=webseries&value=hbo" target="">hbo series</a></nav>
    </div>
            </nav>
            <nav><a class="genere"> genere  ▾</a>
            <div class="genere-list">
                <nav><a href="show.php?category=genre&value=action" target="" >action</a></nav>
                 <nav><a href="show.php?category=genre&value=adventure" target="">adventure</a></nav>
                <nav><a href="show.php?category=genre&value=aliens" target="">aliens</a></nav>
                <nav><a href="show.php?category=genre&value=animation" target="">animation</a></nav>
                <nav><a href="show.php?category=genre&value=biography" target="">biography</a></nav>
                <nav><a href="show.php?category=genre&value=bollywood" target="">bollywood</a></nav>
                <nav><a href="show.php?category=genre&value=cartoon" target="">cartoon</a></nav>
                <nav><a href="show.php?category=genre&value=comedy" target="">comedy</a></nav>
                <nav><a href="show.php?category=genre&value=documentary" target="">documentary</a></nav>
                <nav><a href="show.php?category=genre&value=drama" target="">drama</a></nav>
                <nav><a href="show.php?category=genre&value=family" target="">family</a></nav>
                <nav><a href="show.php?category=genre&value=horror" target="">horror</a></nav>
                <nav><a href="show.php?category=genre&value=history" target="">history</a></nav>
                <nav><a href="show.php?category=genre&value=fantasy" target="">fantasy</a></nav>
                <nav><a href="show.php?category=genre&value=mystery" target="">mystery</a></nav>
                <nav><a href="show.php?category=genre&value=sci-fi" target="">sci-fi</a></nav>
                <nav><a href="show.php?category=genre&value=soldiers" target="">soldiers</a></nav>
                <nav><a href="show.php?category=genre&value=space" target="">space</a></nav>
                <nav><a href="show.php?category=genre&value=romance" target="">romance</a></nav>
                <nav><a href="show.php?category=genre&value=thriller" target="">thriller</a></nav>
                <nav><a href="show.php?category=genre&value=war" target="">war</a></nav>
            </div>
        </nav>
            <nav ><a href="show.php?category=dualaudio&value=dual_audio" target="">dual audio</a></nav>
            <!-- <nav><a class = "quality">quality ▾</a>
                <div class="quality-list">
                    <nav><a href="show.php?category=genre&value=/480p/" target="">480 p</a></nav>
                    <nav><a href="show.php?category=genre&value=/720p/" target="">720 p</a></nav>
                    <nav><a href="show.php?category=genre&value=/1080p/" target="">1080 p</a></nav>
                    <nav><a href="show.php?category=genre&value=/300mb-movies/" target="">300 mb movies</a></nav>
                    <nav><a href="show.php?category=genre&value=/400mb-movies/" target=""> 400 mb movies</a></nav>
                    
                
                </div> 
            </nav> -->
    </div>
        <div class="main-content">
         
            <div class="slideshow-container">
                <!-- <div class="slides effect">
                    <img src="Assets/images/1.jpeg" alt="" width="100%">
                    <div class="caption-text">
                        <p class="tittle">Birds of Prey: Harley Quinn</p>
                        <p class="description">After being thrown out in the streets by Joker, Harley struggles to pick herself up. However, Harley teams up with Huntress, Black Canary and Renee Montoya to defeat a gangster and protect a girl.</p>
                        <span class="slidy-progress"></span>
                     </div>
                   
                </div>
                <div class="slides effect">
                    <img src="Assets/images/2.jpeg" alt="" width=100%>
                    <div class="caption-text">
                        <p class="tittle">Black Widow</p>
                        <p class="description">At birth the Black Widow (aka Natasha Romanova) is given to the KGB, which grooms her to become its ultimate operative   </p>
                        <span class="slidy-progress"></span>
                    </div>
                </div>
                <div class="slides effect">
                    <img src="Assets/images/3.jpeg" alt="" width="100%">
                    <div class="caption-text">
                        <p class="tittle">Soul</p>
                        <p class="description">A jazz musician, stuck in a mediocre job, finally gets his big break. However, when a wrong step takes him to the Great Before, he tries to help an infant soul in order to return to reality.</p>
                        <span class="slidy-progress"></span>
                    </div>
                </div>
                
                <div class="name-slideshow">
                     <nav class="thmbnail">
                     <div >
                     <img src="Assets/images/1.jpeg" alt="" >
                     <a href="#" class="thubnai-a">Harley Quinn</a>
                 </div>
                     </nav>
                     <nav class="thmbnail">
                  <div>
                     <img src="Assets/images/2.jpeg" alt="" >
                     <a href="#" class="thubnai-a">Black Widow</a>
                 </div>
                 </nav>
                 <nav class="thmbnail">
                     <div>
                     <img src="Assets/images/3.jpeg" alt="" >   
                     <a href="#" class="thubnai-a">Soul</a>
                 </div>
                 </nav>
                 </div>
                 <a class="prev" onclick="nextslide(-1)"><i class="fa fa-chevron-left" aria-hidden="true"></i>
                 </a>
                 <a class="next" onclick="nextslide(1)"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                 </a> -->

                 <?php include 'Include/slideshow.php' ;?>
                 
             </div>
             <br>
            
             <div class="dots-container">
                 <span class="dot"></span>
                 <span class="dot"></span>
                 <span class="dot"></span>
                 <span class="dot"></span>
                 <span class="dot"></span>
                 <span class="dot"></span>  
             </div>
             <br>
             <h4 class="msg-show" style = "display:none"></h4>
             <div class="search-show movies" style="display: none;">

            
                 <!-- <h4 class="general-tittle ">
                        Search Results
                </h4>
                       <a href="#">
                        <img class="search-image-show" src=" " alt="poster"></a>
                        <button class="middle"><i class="fa fa-play" aria-hidden="true"></i>

                        </button>
                        <div class="description-list">
                                    <p class="movie-tittle-fst">
                                        tittle
                                        <label>:</label>
                                        <span class="tittle-movie"></span>
                                    </p>
                                    <p class="movie-tittle-fst">
                                            <span>Story line</span>
                                            <label>:</label>
                                            <span class="storyline"></span>
                                    </p>
                                    <p class="movie-tittle-fst">
                                            <span>date of release</span>
                                            <label>:</label>
                                            <span class="dor"></span>
                                    </p>
                                    <p class="movie-tittle-fst">
                                            <span>generes</span>
                                            <label>:</label>
                                            <span class="generes"></span>
                                    </p>
                                    <p class="movie-tittle-fst">
                                            <span>rating</span>
                                            <label>:</label>
                                            <span class="rate"></span>
                                    </p>
                                    
                        </div> --> -->
            </div>

            <div class="image-banner" style="height: 400px;width: 400px;height: 400px;">

            </div>
        
            <div class="movie-list">
                <h4 class="general-tittle">
                    featured movies
                </h4>
                <div class="containers">
                    <ul class="my-list" >
                        <nav><a class="active-a featured">Feartured</a></nav><nav><a class="top-viewed" >Top viewed</a></nav><nav><a class="top-rating">Top Rating</a></nav><nav><a class="recently-added">Recently Added</a></nav>
                    </ul>
                </div>
            </div>
            <div class="for-margin">
           
            <div class="movies top-featured-movies">

            

                         <!--Top Featured List-->

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

                        <?php    include 'Include/top-featured.php';?>

                        
           
                                     <!--Top View List-->

                </div>                


                <div class="movies top-viewed-movies">
                        <!-- <div class="sith-movie play-button top-viewed-list">
                            <img src="Assets/images/resized.png" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
 <button class="middle top-viewed-middle"><i class="fa fa-play" aria-hidden="true"></i>
        
                            </button>
                            <div class="movie-tittle-year ">
                                <h6 class="movie-tittle">Independence Day</h6><span style="font-size: small ;"></span>
                                <h6>2016</h6>
                                <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div> -->

                        <?php  include 'Include/top_viewed.php';?>

                        
                   
                </div>

                                 <!--Top Rating List-->

                    <div class="movies top-rating-movies">    
                            <!-- <div class="sith-movie play-button top-rating-list">
                                <img src="Assets/images/endgame.jpeg" alt="" width="100%">
                                <div class="overlay-a" style="background-color: white;"></div>
                                <button class="middle top-rating-middle"><i class="fa fa-play" aria-hidden="true"></i>
            
                                </button>
                                <div class="movie-tittle-year ">
                                    <h6 class="movie-tittle">Avengers Endgame</h6><span style="font-size: small ;"></span>
                                    <h6>2016</h6>
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

                    <?php  include 'Include/top_rated.php';?>


                    </div>
                               <!--Recentyly Added-->
                    <div class="movies recently-added-movies">
                               <!-- <div class="sith-movie play-button recently-added-list">
                                <img src="Assets/images/endgame.jpeg" alt="" width="100%">
                                <div class="overlay-a" style="background-color: white;"></div>
                                <button class="middle recently-added-middle"><i class="fa fa-play" aria-hidden="true"></i>
            
                                </button>
                                <div class="movie-tittle-year ">
                                    <h6 class="movie-tittle">Avengers Endgame</h6><span style="font-size: small ;"></span>
                                    <h6>2016</h6>
                                    <span class="rating" style="display: inline; font-size: 96%;"></span>
                                </div>
                            </div> -->
                  
                            <?php  include 'Include/recently_added.php';?>


                </div>
             </div>
             <div class="most-viewed">
                <h4 class="general-tittle">
                    most popular movies
                </h4>
            </div>


            <div class="video-play-button">
                <div class="for-margin">
                <div class="most-viewed-list">
                    <div class="popular-slide">
                        <div class="imge-show">
                            <img src="Assets/images/1.jpeg" alt="" width="100%" height="45%">
                            <div class="description-list">
                                <p class="movie-tittle-fst">
                                    tittle
                                    <label>:</label>
                                  <span class="movie-tittle-label">  Harley Quinn </span>
                                </p>
                                <p class="movie-tittle-fst">
                                        <span>Story line</span>
                                        <label>:</label>
                                        Harley Quinn is a fictional character appearing in media published by DC Entertainment. Created by Paul Dini and Bruce Timm to serve as a new supervillainess and a romantic interest for the Joker in ...
                                </p>
                                <p class="movie-tittle-fst">
                                        <span>date of release</span>
                                        <label>:</label>
                                        29 November 2019
                                </p>
                                <p class="movie-tittle-fst">
                                        <span>rating</span>
                                        <label>:</label>
                                        8.5/10 · IMDb
                                </p>
                            </div>
                                    
                        </div>
                    </div>
                    <div class="popular-list">
                        <div class="fst-movie play-button">
                            <img src="Assets/images/1.jpeg" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle play-button-middle"><i class="fa fa-play" aria-hidden="true"></i>
                            </button>
                            <div class="movie-tittle-year">
                            <h6 class="movie-tittle">Harley Quinn</h6><span style="font-size: small ;"></span>
                            <h6>2019</h6>
                            <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div>
                       
                        <div class="snd-movie play-button">
                            <img src="Assets/images/2.jpeg" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle play-button-middle"><i class="fa fa-play" aria-hidden="true"></i>
    
                            </button>
                            <div class="movie-tittle-year">
                                <h6 class="movie-tittle">Black Widow</h6><span style="font-size: small ;"></span>
                                <h6>2021</h6>
                                <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div>
                        
                        <div class="trd-movie play-button">
                            <img src="Assets/images/r5.jpg" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle play-button-middle"><i class="fa fa-play" aria-hidden="true"></i>
                            </button>
                            <div class="movie-tittle-year play-button">
                                <h6 class="movie-tittle">Khuda Hafiz</h6><span style="font-size: small ;"></span>
                                <h6>2020</h6>
                                <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div>
                      
                        <div class="fth-movie play-button">
                            <img src="Assets/images/r2.png" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle play-button-middle"><i class="fa fa-play" aria-hidden="true"></i>
                            </button>
                            <div class="movie-tittle-year">
                                <h6 class="movie-tittle" >Ica Age <span style="font-size: small ;">Meltdown</span></h6>
                                <h6>2006</h6>
                                <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div>
                       
                        <div class="fith-movie play-button">
                            <img src="Assets/images/r3.png" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle play-button-middle"><i class="fa fa-play" aria-hidden="true"></i>
                            </button>
                            <div class="movie-tittle-year">
                                <h6 class="movie-tittle">Lootcase</h6><span style="font-size: small ;"></span>
                                <h6>2020</h6>
                                <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div>
                      
                        <div class="sith-movie play-button">
                            <img src="Assets/images/resized.png" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle play-button-middle"><i class="fa fa-play" aria-hidden="true"></i>
                            </button>
                            <div class="movie-tittle-year ">
                                <h6 class="movie-tittle">Independence Day</h6><span style="font-size: small ;"></span>
                                <h6>2016</h6>
                                <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="most-viewed-list">
                    <div class="popular-slide">
                        <div class="imge-show">
                            <img src="Assets/images/2.jpeg" alt="" width="100%" height="45%">
                            <div class="description-list">
                                <p class="movie-tittle-fst">
                                    tittle
                                    <label >:</label>
                                    <span class="movie-tittle-label"> Black Widow </span>
                                </p>
                                <p class="movie-tittle-fst">
                                        <span>Story line</span>
                                        <label>:</label>
                                        At birth the Black Widow (aka Natasha Romanova) is given to the KGB, which grooms her to become its ultimate operative. When the U.S.S.R. breaks up, the government tries to kill her...
                                </p>
                                <p class="movie-tittle-fst">
                                        <span>date of release</span>
                                        <label>:</label>
                                        July 9, 2021
                                </p>
                                <p class="movie-tittle-fst">
                                        <span>rating</span>
                                        <label>:</label>
                                        N/A · IMDb
                                </p>
                            </div>
                        
                        </div>
                    </div>
                    <div class="popular-list">
                        <div class="fst-movie play-button">
                            <img src="Assets/images/endgame.jpeg" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle play-button-middle"><i class="fa fa-play" aria-hidden="true"></i>                        </button>
                            <div class="movie-tittle-year">
                            <h6 class="movie-tittle">Avengers Endgame</h6><span style="font-size: small ;"></span>
                            <h6>2019</h6>
                            <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div>
                       
                        <div class="snd-movie play-button">
                            <img src="Assets/images/tumbad.jpg" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle play-button-middle"><i class="fa fa-play" aria-hidden="true"></i>
                            </button>
                            <div class="movie-tittle-year">
                                <h6 class="movie-tittle">Tumbad</h6><span style="font-size: small ;"></span>
                                <h6>2020</h6>
                                <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div>
                        
                        <div class="trd-movie play-button">
                            <img src="Assets/images/dora.jpg" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle play-button-middle"><i class="fa fa-play" aria-hidden="true"></i>
                            </button>
                            <div class="movie-tittle-year play-button">
                                <h6 class="movie-tittle">Dora</h6><span style="font-size: small ;"></span>
                                <h6>2020</h6>
                                <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div>
                      
                        <div class="fth-movie play-button">
                            <img src="Assets/images/scooby_doo.jpg" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle play-button-middle"><i class="fa fa-play" aria-hidden="true"></i>
                            </button>
                            <div class="movie-tittle-year">
                                <h6 class="movie-tittle" >Scooby Doo<span style="font-size: small ;"> The movie</span></h6>
                                <h6>2006</h6>
                                <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div>
                       
                        <div class="fith-movie play-button">
                            <img src="Assets/images/joker.jpg" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle play-button-middle"><i class="fa fa-play" aria-hidden="true"></i>
                            </button>
                            <div class="movie-tittle-year">
                                <h6 class="movie-tittle">Joker</h6><span style="font-size: small ;"></span>
                                <h6>2020</h6>
                                <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div>
                      
                        <div class="sith-movie play-button">
                            <img src="Assets/images/harry_potter.jpg" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle play-button-middle"><i class="fa fa-play" aria-hidden="true"></i>
                            </button>
                            <div class="movie-tittle-year ">
                                <h6 class="movie-tittle">Harry Potter</h6><span style="font-size: small ;"></span>
                                <h6>2016</h6>
                                <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="most-viewed-list">
                    <div class="popular-slide">
                        <div class="imge-show">
                            <img src="Assets/images/3.jpeg" alt="" width="100%" height="45%">
                            <div class="description-list">
                                <p class="movie-tittle-fst">
                                    tittle
                                    <label >:</label>
                                    <span class="movie-tittle-label">  Soul </span>
                                </p>
                                <p class="movie-tittle-fst">
                                        <span>Story line</span>
                                        <label>:</label>
                                        A jazz musician, stuck in a mediocre job, finally gets his big break. However, when a wrong step takes him to the Great Before...
                                </p>
                                <p class="movie-tittle-fst">
                                        <span>date of release</span>
                                        <label>:</label>
                                        25 December 2020
                                </p>
                                <p class="movie-tittle-fst">
                                        <span>rating</span>
                                        <label>:</label>
                                        8.1/10IMDb
                                </p>
                            </div>
                        
                        </div>
                    </div>
                    <div class="popular-list">
                        <div class="fst-movie play-button">
                            <img src="Assets/images/thor_ragnarok.jpg" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle play-button-middle"><i class="fa fa-play" aria-hidden="true"></i>
                            </button>
                            <div class="movie-tittle-year">
                            <h6 class="movie-tittle">Thor Ragnarok</h6><span style="font-size: small ;"></span>
                            <h6>2020</h6>
                            <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div>
                       
                        <div class="snd-movie play-button">
                            <img src="Assets/images/spiderman_h.jpg" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle play-button-middle"><i class="fa fa-play" aria-hidden="true"></i>
                            </button>
                            <div class="movie-tittle-year">
                                <h6 class="movie-tittle">Spiderman Homecoming</h6><span style="font-size: small ;"></span>
                                <h6>2020</h6>
                                <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div>
                        
                        <div class="trd-movie play-button">
                            <img src="Assets/images/academy.jpg" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle play-button-middle"><i class="fa fa-play" aria-hidden="true"></i>
                            </button>
                            <div class="movie-tittle-year play-button">
                                <h6 class="movie-tittle">Umbrella Academy</span></h6><span style="font-size: small ;">
                                <h6>2020</h6>
                                <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div>
                      
                        <div class="fth-movie play-button">
                            <img src="Assets/images/dark.jpeg" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle play-button-middle"><i class="fa fa-play" aria-hidden="true"></i>
                            </button>
                            <div class="movie-tittle-year">
                                <h6 class="movie-tittle" >DARK</h6><span style="font-size: small ;"></span>
                                <h6>2006</h6>
                                <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div>
                       
                        <div class="fith-movie play-button">
                            <img src="Assets/images/3.jpeg" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle play-button-middle"><i class="fa fa-play" aria-hidden="true"></i>
                            </button>
                            <div class="movie-tittle-year">
                                <h6 class="movie-tittle">Darbar</h6><span style="font-size: small ;"></span>
                                <h6>2020</h6>
                                <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div>
                      
                        <div class="sith-movie play-button">
                            <img src="Assets/images/spiderman_f.jpg" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle play-button-middle"><i class="fa fa-play" aria-hidden="true"></i>
                            </button>
                            <div class="movie-tittle-year ">
                                <h6 class="movie-tittle">Spiderman far from home</h6><span style="font-size: small ;"></span>
                                <h6>2016</h6>
                                <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div>
                    </div>
                </div>


                <!--Adding new one-->

                <div class="most-viewed-list">
                    <div class="popular-slide">
                        <div class="imge-show">
                            <img src="Assets/images/academy.jpg" alt="" width="100%" height="45%">
                            <div class="description-list">
                                <p class="movie-tittle-fst">
                                    tittle
                                    <label>:</label>
                                    <span class="movie-tittle-label">   Umbrella Academy </span>
                                </p>
                                <p class="movie-tittle-fst">
                                        <span>Story line</span>
                                        <label>:</label>
                                        It revolves around a dysfunctional family of adopted sibling superheroes who reunite to solve the mystery of their father's death and the threat of an impending apocalypse.
                                </p>
                                <p class="movie-tittle-fst">
                                        <span>date of release</span>
                                        <label>:</label>
                                        15 February 2019
                                </p>
                               
                                <p class="movie-tittle-fst">
                                        <span>rating</span>
                                        <label>:</label>
                                        8/10 IMDb
                                </p>
                            </div>
                        
                        </div>
                    </div>
                    <div class="popular-list">
                        <div class="fst-movie play-button">
                            <img src="Assets/images/Friends-with-benefit.jpg" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle play-button-middle"><i class="fa fa-play" aria-hidden="true"></i>
                            </button>
                            <div class="movie-tittle-year">
                            <h6 class="movie-tittle">Friends with Benefit</h6><span style="font-size: small ;"></span>
                            <h6>2020</h6>
                            <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div>
                       
                        <div class="snd-movie play-button">
                            <img src="Assets/images/originals.jpg" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle play-button-middle"><i class="fa fa-play" aria-hidden="true"></i>
                            </button>
                            <div class="movie-tittle-year">
                                <h6 class="movie-tittle">Originals</h6><span style="font-size: small ;"></span>
                                <h6>2020</h6>
                                <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div>
                        
                        <div class="trd-movie play-button">
                            <img src="Assets/images/cave.jpg" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle play-button-middle"><i class="fa fa-play" aria-hidden="true"></i>
                            </button>
                            <div class="movie-tittle-year play-button">
                                <h6 class="movie-tittle">Cave</h6><span style="font-size: small ;"></span>
                                <h6>2020</h6>
                                <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div>
                      
                        <div class="fth-movie play-button">
                            <img src="Assets/images/transformers.jpg" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle play-middle-button"><i class="fa fa-play" aria-hidden="true"></i>
                            </button>
                            <div class="movie-tittle-year">
                                <h6 class="movie-tittle" >Transformers<span style="font-size: small ;"></span></h6>
                                <h6>2006</h6>
                                <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div>
                       
                        <div class="fith-movie play-button">
                            <img src="Assets/images/yaara.jpg" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle play-middle-button"><i class="fa fa-play" aria-hidden="true"></i>
                            </button>
                            <div class="movie-tittle-year">
                                <h6 class="movie-tittle">Yarra</h6><span style="font-size: small ;"></span>
                                <h6>2020</h6>
                                <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div>
                      
                        <div class="sith-movie play-button">
                            <img src="Assets/images/shakuntala-devi.jpg" alt="" width="100%">
                            <div class="overlay-a" style="background-color: white;"></div>
                            <button class="middle play-middle-button"><i class="fa fa-play" aria-hidden="true"></i>
                            </button>
                            <div class="movie-tittle-year ">
                                <h6 class="movie-tittle">Shakuntala Devi</h6><span style="font-size: small ;"></span>
                                <h6>2016</h6>
                                <span class="rating" style="display: inline; font-size: 96%;"></span>
                            </div>
                        </div>
                    </div>
                </div>




                <button class="video-play"><i class="fa fa-play-circle" aria-hidden="true"></i>
                </button>
                <!-- <a class="prevtwo" onclick="nextslides(-1)"><i class="fa fa-chevron-left" aria-hidden="true"></i>
                </a>
                <a class="nexttwo" onclick="nextslides(1)"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                </a> -->
              <!--  <button class="closes" style="z-index: 1;">✖</button>-->
                <div class="video-plays">
                    
                  
                </div>
    
                </div>
                </div>

                <!-- <a href="#top" class="top">Top</a> -->


        </div>
       
        <div class="footer">
            <div class="for-margin">
            <div class="footer-tittle d-flex justify-content-between">
                <h2>subscribe to us</h2>
                <!-- <a href="#top" class="top">Top</a> -->
            </div>
            <div class="subscribe">
                <form  class="sub-go" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" action="post">
                <input  type="text" class="search-inbox email-value" placeholder="Your email" required=" ">
                <input type="submit" class="btn-dark send" value="send" >
                </form>
                <p class="change" style="color: red; display: none;"></p>
                <div class="d-flex justify-content-between">
                <a href="index.php" class="putf" style="text-decoration:none;">
                    <h1 id="putp">Movie Mania</h1>
                </a>
                <a href="#top" class="top">Top</a>
                </div>
            </div>
            
                
            
            <div class="copyright-details">
                <p>© 2020 Movie Mania Movies. All rights reserved | Design by <span><a href="www.linkedin.com/in/rahul-saha7" style="font-size: medium;text-decoration:none;">Rahul Saha</a></span></p>
            </div>
            <div class="i-links">
                <nav><a href="index.php">Movies</a></nav>
                <!-- <nav><a href="#">Faq</a></nav> -->
                <nav><a href="show.php?category=genre&value=action" target="">Action</a></nav>
                <nav><a href="show.php?category=genre&value=adventure" target="">Adventure</a></nav>
                <nav><a href="show.php?category=genre&value=comedy" target="">comedy</a></nav>
                <nav><a href="show.php?category=genre&value=dual-audio-series" target="">Dual_audio</a></nav>
                <nav><a href="contacts.php" target="">Contact Us</a></nav>
            </div>

        </div>
        </div>
    </div>


        <div class="user-show">
                <button class="user-show-close">X</button>

                    <div class="user-details-show">

                    <table class="table table-hover table-dark">

                    <?php 
                             include_once 'Include/database.php';
                             $db = new database();
                             $sql = "SELECT * from RegistrationTable where Username = '$usern'";
                             $db->query($sql);
                             $resultx = $db->sql_query->fetchALL(PDO::FETCH_ASSOC);
                             $db->close_connection();
                            

                    ?>

                      <tr>
                          <th>Username :</th>
                          <td><?php echo $resultx[0]['Username'];?></td>
                      </tr>
                      <tr>
                          <th>Password:</th>
                          <td><?php  echo $resultx[0]['Pass'];?></td>
                      </tr>

                      <tr>
                          <th>Total Movie Searched</th>
                          <td><?php  echo $resultx[0]['total_searched'];?></td>
                      </tr>

                    </table>

                    </div>

        </div>



        <div class="reg-box-div">
            <div class="reg-show box">
                <div class="log-events">
                    <button class="menu-buttons  btn btn-outline-danger">✖
                        <span class="close-msg">Close</span>
                    </button>
                    </div>
 
<form class="reg-details">
<font color="red">* Required field</font>
<br>

Username : 
<input class="name" type="Text" name="Name" placeholder="Username">
<span class="name-error error">* </span>
<br>

password : 
<input class="passw" type="password" name="Password" placeholder="password" >
<span class="passw-error error">* </span>
<br>
Again Password
<input class="passwmatch" type="password" name="Password-check" placeholder="Again type password" >
<span class="passw-mismatch error">* </span>
<br>
Mobile Number :
<input class="number" type="text" name="phone" placeholder="Contact Number" >
<span class="number-error error">* </span>
<br>
Email Id :
<input class="email" type="text" name="email" placeholder="Email ID">
<span class=" email-error error">* </span>
<br>
<input class="submit reg-details-submit" type="submit" name="submit" value="Submit">
</form>


<p class="show"></p>
               
</div>
</div>







    <script>
                         $("document").ready(function(){
                                var user = <?php echo "'$user_set'" ?>;
                                var user_name = <?php echo "'$usern'"?>;
                                if(user == 1){
                                $(".login").html(user_name);
                                $(".reg").html("log out");
                        }

                            
                            
                                    

          });
          
    </script>
   
    <script src="Assets/JS/movie_site_js_sec.js"></script>
</body>
</html>