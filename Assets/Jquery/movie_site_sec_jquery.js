$(document).ready(function () {
                  $.post('add.php',
                      function(data,status){
                              console.log(data);

                      });

     var text = ($('title').text());
     $('#putp').text(text);
     $(".search-inbox").mouseover(function () {
          $(".search-inbox").css("border", "2px solid red");

     });
     $(".search-inbox").on("tap", function () {
          $(".search-inbox").css("border", "2px solid red");

     });
     $(".search-inbox").mouseleave(function () {
          $(".search-inbox").css("border", "1px solid black");

     });


     $(".toggle-menu").click(function () {
          $(".sidebar").fadeToggle(300);
     });
     $(".menu").click(function () {
          $(".sidebar").hide(2000);
     });


     $(".sub-go").on({

          submit: function (e) {
               subscribe(e);
          }
     });

     $(".top-viewed-movies").css("display", "none");
     $(".top-rating-movies").css("display", "none");
     $(".recently-added-movies").css("display", "none");

     $(".featured").click(function () {
          $(".recently-added-movies").css("display", "none");
          $(".top-rating-movies").css("display", "none");
          $(".top-viewed-movies").css("display", "none");
          $(".top-featured-movies").css("display", "grid");
     });



     $(".top-viewed").click(function () {
          $(".recently-added-movies").css("display", "none");
          $(".top-rating-movies").css("display", "none");
          $(".top-featured-movies").css("display", "none");
          $(".top-viewed-movies").css("display", "grid");
     });




     $(".top-rating").click(function () {
          $(".recently-added-movies").css("display", "none");
          $(".top-featured-movies").css("display", "none");
          $(".top-viewed-movies").css("display", "none");
          $(".top-rating-movies").css("display", "grid");
     });



     $(".recently-added").click(function () {
          $(".top-featured-movies").css("display", "none");
          $(".top-viewed-movies").css("display", "none");
          $(".top-rating-movies").css("display", "none");
          $(".recently-added-movies").css("display", "grid");
     });






     $(window).scroll(function () {    // this will work when your window scrolled.
          var height = $(window).scrollTop(); //getting the scrolling height of window
          if (height > 100) {
               $(".header-search").css({ "position": "fixed" });
          }
          else {
               if (window.matchMedia("(max-width: 680px)").matches) {

                    $(".header-search").css({ "text-align": "center", "position": "static" });
               }
               else if (window.matchMedia("(min-width: 1025px)").matches) {
                    $(".header-search").css({ "position": "static" });
               }
               else
                    $(".header-search").css({ "position": "absolute" });
          }



          if (height > height / 2) {
               $(".top").css("display", "block");
          }
          else {
               $(".top").css("display", "none");
          }

     });

     $(".search-go").click(function (e) {
          search(e);
     });
     $(".send").click(function (e) {
          subscribe(e);
     });

     $(".name-search").on({

          submit: function (e) {
               search(e);
          }

     });



     $(".reg").click(function () {

          var test = $(".reg").html();
          if (test == "Register") {
               $(".reg-show").fadeToggle(300);
          }
          else if (test == "log out") {
               if (confirm("Are you sure !")) {
                    $.get('Include/logout.php', {
                         function(data, status) {
                              if (status = "success") {
                                   alert("logout successfull");
                                   $(".login").html("Login");
                                   $(".reg").html("Register");
                              } else
                                   alert("Oops,something went wrong");

                         }

                    });

               }

          }
     });

     $(".login").click(function (e) {
          var testl = $(".login").html();
          if (testl != "Login") {
              $(".user-show").show();
          }
          else if (testl == "Login") {
               $(".log-link").attr("href", "Include/index_login.php");
          }

     });

     $(".user-show-close").click(function(){
          $(".user-show").hide();
     });

     function IsEmail(email) {
          var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if (!regex.test(email)) {
               return false;
          } else {
               return true;
          }
     }

     function search(e) {
          e.preventDefault();

          $(".search-show").css("display", "block");

          var mname = $(".mname").val();
          var urli = 'https://www.omdbapi.com/?apikey=fad376c5&s=';
          if (mname) {
               mname2 = mname;
               mname = mname.replace(' ', "+");
               $.get("Include/movie_search.php",
                    {
                         mname: mname2
                    },
                    function (data, status) {
                         // console.log(data); 
                         if (status == "false" || data.trim() == '') {
                              
                              urli = urli + mname;

                              console.log(urli);
                              $.ajax({
                                   url: urli,
                                   type: "GET",
                                   dataType:"json",
                                   success: function (data) {
                                        if (data.Response == "False") {
                                             alert(data.Error);
                                            
                                        }
                                        else {
                                             $(".slideshow-container").css("display", "none");
                                             $(".dots-container").css("display", "none");
                                            

                                       var html;
                                       html =  $("<h4 class=\"general-tittle\">Search Reasults</h4>");
                                       $(".search-show").html(html[0]);

                                       html = '<div class="movie-show-testing-a-section"></div>';

                                       $(".search-show").append(html);


                                   
                                        var index;
                                       
                                        for (index = 0; index < 10; index++) {
                                             
                                           html =  ' <div class="fst-movie play-button featured-list"><img src="'+data.Search[index].Poster+'"alt="Movie Thumbnail" width="100%"><div class="overlay-a" style="background-color: white;"></div><button class="middle top-featured-middle middle-add-button-test"><i class="fa fa-play" aria-hidden="true"></i></button><div class="movie-tittle-year"><h6 class="movie-tittle">'+data.Search[index].Title+'</h6> <h6>'+data.Search[index].Year+'</h6> <span class="rating" style="display: inline; font-size: 96%;">'+data.Search[index].Type+'</span> </div></div>';
                                           
                                        $(".movie-show-testing-a-section").append(html);
                                       
                                        }

                                        

                                        }

                                   },
                                   error: function (xhr, status, error) {
                                        alert("movie not found");
                                        //  $(".msg-show").html(status);
                                        //  $(".msg-show").css("display","block");
                                   }

                              });
                         }
                         else {

                              
                              $(".slideshow-container").css("display", "none");
                              $(".dots-container").css("display", "none");
                             
                              $(".search-show").html(data);

                              
                              $(".msg-show").css("display", 'none');


                         }


                    });

               /* 
              // console.log(mname);
               urli = urli + mname;

              // console.log(urli);
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
                         }
                        
                    },
                    error: function(xhr, status, error) {
                         $(".msg-show").html(status);
                         $(".msg-show").css("display","block");
                       }
                   
                });*/



          }
          else if (!mname) {
               $(".mname").css("display", "none");
               $(".search-go").css("display", "none");
               $(".change-h").css("display", "block");
               $(".change-h").html("Field can't be blanked")
          }

          var callp = "movie_searched_by_admin";
          $.post('Include/update.php',{
               call:callp
          },function(data){
          });
     }



     function subscribe(e) {
          e.preventDefault();
          var email = $(".email-value").val();
          if (IsEmail(email) == true) {
               $.post('Include/email_entry.php',
                    {
                         name: email
                    },
                    function (data, status) {
                         $(".subscribe").html(data);
                         if (status == "success") {
                              $(".email-value").val(' ');
                         }
                    });
          }
          else if (!email || IsEmail(email) == false) {
               $(".change").css("display", "block");
               $(".change").html("Field can't be blanked");
          }
     }

     // alert("gi");

     $(".top-viewed-middle").click(function () {
          var trave = $(".fa-play").parentsUntil();



          var tittlep = $(event.target).closest('.top-viewed-list').find('.movie-tittle').html();

          tittlep = tittlep.replace(' ', "+");



          var url = "testing.php?name=" + encodeURIComponent(tittlep);


          window.location.href = url;

     });

     $(".top-featured-middle").click(function () {
        //  console.log("hello world");
          var trave = $(".fa-play").parentsUntil();
          var tittlet = $(event.target).closest('.featured-list').find('.movie-tittle').html();
          tittlet = tittlet.replace(' ', "+");
          if ($(".login").html() != "Login") {
               var url = "testing.php?name=" + encodeURIComponent(tittlet);
               window.location.href = url;
          }
          else {
               alert("please Login first");
          }
     });

 


     $(".top-rating-middle").click(function () {
          var trave = $(".fa-play").parentsUntil();
          var tittler = $(event.target).closest('.top-rating-list').find('.movie-tittle').html();
          //  alert(tittler);
          tittler = tittler.replace(' ', "+");
          if ($(".login").html() != "Login") {
               var url = "testing.php?name=" + encodeURIComponent(tittlet);
               window.location.href = url;
          }
          else {
               alert("please Login first");
          }
     });

     $(".recently-added-middle").click(function () {
          var trave = $(".fa-play").parentsUntil();
          var tittler = $(event.target).closest('.recently-added-list').find('.movie-tittle').html();
          tittler = tittler.replace(' ', "+");
          if ($(".login").html() != "Login") {
               var url = "testing.php?name=" + encodeURIComponent(tittlet);
               window.location.href = url;
          }
          else {
               alert("please Login first");
          }
     });



     $(".play-button-middle").click(function () {
          var trave = $(".fa-play").parentsUntil();
          //     console.log(trave);

          var tittles = $(event.target).closest('.play-button').find('.movie-tittle').html();
          tittles = tittles.replace(' ', "+");
          //     alert(tittles);
          if ($(".login").html() != "Login") {
               var url = "testing.php?name=" + encodeURIComponent(tittles);
               window.location.href = url;
          }
          else {
               alert("please Login first");
          }

     })

    


     $(".web-series").click(function () {
          $(".quality-list").hide(300);
          $(".genere-list").hide(300);
          $(".web-series-list").fadeToggle(300);
     });

     $(".genere").click(function () {
          $(".web-series-list").hide(300);
          $(".quality-list").hide(300);
          $(".genere-list").fadeToggle(300);

     });

     $(".quality").click(function () {
          $(".web-series-list").hide(300);
          $(".genere-list").hide(300);
          $(".quality-list").fadeToggle(300);

     });

     /*$(".video-play").click(function(){
         $(".video-play-div").css("display","block");
     });

     $(".close-video").click(function(){
         $(".video-play-div").css("display","block");
     });*/


     // $(".active-s").click(function(){
     //      // $(".thubnai-a").preventDefault();
     //      var value_title = $(".active-s").html();
     //      console.log(value_title);
     // });

// $(".middle-add-button-test").click(function(){
//      console.log("hello world");
// });

$(document).on('click', '.middle-add-button-test', function(e) {
    
     var trave = $(".fa-play").parentsUntil();
     var tittlet = $(event.target).closest('.featured-list').find('.movie-tittle').html();
     tittlet = tittlet.replace(' ', "+");
     if ($(".login").html() != "Login") {
          var url = "testing.php?name=" + encodeURIComponent(tittlet);
          window.location.href = url;
     }
     else {
          alert("please Login first");
     }
    
   });
   


});