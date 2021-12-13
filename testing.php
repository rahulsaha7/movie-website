<?php
 session_start();
 if (isset($_SESSION["Username"])) {
    $usern = $_SESSION["Username"];

  
}

if(isset($_GET['name'])){
    extract($_GET);
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
    <!-- <script src="Include/Jquery/only_for_show.js"></script> -->
    <title>Movie Mania</title>
    <!-- <style>
       


    </style> -->
</head>
<body id="top">




    <div class="contains">

      
            <div class="header">
                <div class="tittle">
                    <a href="#" class="put">
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
                    <button class="btn-info log login">Login</button></a>
                    <button class="btn-info log reg" >Register</button>
                        <div class="reg-show container box">
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
            
           
             <br>
             <h4 class="msg-show" style = "display:none"></h4>
             <div class="search-show" style="display: none;">
             <h4 class="general-tittle ">
                    Search Results
            </h4>
                    <a href="#">
                    <img class="search-image-show" src=" " alt="poster"></a>
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
                                
                     </div>
            </div>
            <div class="trailer-show" style = "display:none">
                <h4 class="general-tittle ">
                   Trailer
                </h4>
                <div class="embed-responsive embed-responsive-16by9 mt-3 mb-5 pl-5" >
           
                    <iframe class="embed-responsive-item" src="" allowfullscreen></iframe>
                </div>
            </div>
            <div class="screenshots mb-5" style = "display:none;">
            <h4 class="general-tittle ">
                    screenshots
            </h4>
            <div id="ss" >
            <!--     -->
            </div>
            </div>
           
                

                <a href="#top" class="top">Top</a>


        </div>
       
        <div class="footer">
            <div class="for-margin">
            <div class="footer-tittle">
                <h2>subscribe to us</h2>
            </div>
            <div class="subscribe">
                <form  class="sub-go">
                <input  type="text" class="search-inbox email-value" placeholder="Your email">
                <input type="submit" class="btn-dark send" value="send" >
                </form>
                <p class="change" style="color: red; display: none;"></p>
                <a href="index.php" class="putf" style="text-decoration:none;">
                    <h1 id="putp">Movie Mania</h1>
                </a>
            </div>
            
                
            
            <div class="copyright-details">
                <p>© 2020 Movie Mania Movies. All rights reserved | Design by <span><a href="testing_download.docx" style="font-size: medium;text-decoration:none;" download>Rahul Saha</a></span></p>
            </div>
            <div class="i-links">
                <nav><a href="index.php">Movies</a></nav>
                <nav><a href="#">Faq</a></nav>
                <nav><a href="show.php?category=genre&value=/action-series/" target="">Action</a></nav>
                <nav><a href="show.php?category=genre&value=/adventure/" target="">Adventure</a></nav>
                <nav><a href="show.php?category=genre&value=/comedy/" target="">comedy</a></nav>
                <nav><a href="show.php?category=genre&value=/dual-audio-series/" target="">icons</a></nav>
                <nav><a href="contacts.html" target="">contact us</a></nav>
            </div>

        </div>
        </div>
    </div>

    <script>
                         $("document").ready(function(){
                            var user = <?php echo "'$usern'" ?>;
                            $(".login").html(user);
                            $(".reg").html("log out");

                           
                            
                            show();
                            function show(){
                            var urli = 'https://www.omdbapi.com/?apikey=fad376c5&t=';

                            var youtube_key = "AIzaSyBgDX-xJP7qfbZWsdokESphn7pZW2yG2G8";

                            
                            var title = <?php echo "'$name'" ?>;

                            var search = title + "+trailer";

                            

                            
                            if(title!=" "){
                                urli = urli + title;

                                console.log(urli);
                               
                                $.ajax({
                                    url:urli,
                                    type:"GET",
                                    success:function(data){
                                              if(data.Response == "False"){
                                                   $(".msg-show").html(data.Error);
                                                   $(".msg-show").css("display","block");
                                              }
                                              else{
                                              var title = data.Title;
                                              var path = data.Poster;
                                              
                                              var generi = data.Genre;
                                              var ploti = data.Plot;
                                              var rate = data.imdbRating;
                                              var ry = data.Year;
                                            //  console.log(path);
                                              $(".search-image-show").attr("src",path);
                                              $(".dor").html(ry);
                                              $(".tittle-movie").html(title);
                                              $(".storyline").html(ploti);
                                              $(".generes").html(generi);
                                              $(".rate").html(rate);
                                              $(".search-show").css("display","block");
                                              $(".msg-show").css("display",'none');
                                              //IF this part is shown then we will call our youtube api to show our trailer ;
                                            
                                            trailer_search(youtube_key,search,3);

                                         }
                                        
                                    },
                                    error: function(xhr, status, error) {
                                         $(".msg-show").html(status);
                                         $(".msg-show").css("display","block");
                                       }
                                   
                                });
                            }
                            else{
                                $(".msg-show").html("oops somethig Went wrong");
                                $(".msg-show").css("display","block");
                            }
                        }

                        function trailer_search(youtube_key,search,maxResults){
                            $.get("https://www.googleapis.com/youtube/v3/search?part=snippet&key="+youtube_key+"&type=video&maxResults="+maxResults+"&q="+search,function(data,status){
                                    if(status == 'false'){
                                        console.log(status);

                                    }
                                    else
                                        // data = JSON.parse(JSON.stringify(data));

                                    //    console.log(data.items[0].id['videoId']);

                                        var video = '';

                                        $(".trailer-show").css("display","block");
                                        $(".embed-responsive-item").attr("src","https://www.youtube.com/embed/"+data.items[0].id['videoId']);
                                      
                                        $(".screenshots").css("display","block");
                                       
                                        for ( i = 0; i < 3; i++) {
                                            
                                             var thumbnail = data.items[i].snippet.thumbnails.high['url'];
                                            
                                            video = `
                                            <img src="${thumbnail}" class="img-fluid" alt="Responsive image">
                                            `
                                        $("#ss").append(video);
                                       

                                            
                                        
                                        }
                                        

                            });
                        }

          });
          
    </script>

   
    <script src="Assets/JS/movie_site_js_sec.js"></script>
</body>
</html>