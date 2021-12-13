$(document).ready(function(){
    $('body').append('<link rel="stylesheet" href="CSS/style.css">')
    $("head")
    $(".close-button").click(function(){
        $(".first-banner").hide();
    });
    $(".close-button-2").click(function(){
        $(".spinning-wdget").hide();
    });


    $.get("https://www.breakingbadapi.com/api/characters?limit=4&offset=0", function(data, status){
        

        
       var html = ' <div class="first-banner position-absolute" style=" height: 400px;width: 400px;height: 400px;"><div class="paragraph d-flex justify-content-between"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, vel?</p><button class="btn btn-primary close-button" style="background:none !important;border: none !important	;padding: 0;margin: 0;"><i class="fas fa-times" style="color: black;"></i></button></div><div class="image-holder w-100 h-100"><img  id="image-holder-image" src='+data[0]['img']+' class="w-100 h-100" alt=""></div></div> ';

        $('.image-banner').append(html);


        var html2 = ('\
        <div class="spinning-wdget">\
        <div class="elemts">\
            <button class="btn btn-primary close-button-2 position-relative" style="top: 0; left: 60%; background:none !important;border: none !important	;padding: 0;margin: 0;"><i class="fas fa-times"style="color: black;"></i></button>\
            <div class="actucal-widget-section">\
              <div class="rotating-box" style="height: 100px; width: 200px;margin: 10px auto;perspective: 2600px;">\
                <div class="single-rb" style="height: 100px; width: 200px;animation: rotate 15s linear infinite;transform-style: preserve-3d;">\
                  <div class="front-side bg-info position-absolute" style="height: 100px; width: 200px;">\
                    <section>\
                        <h3 class="titlefront">'+data[0]['name']+'</h3>\
                        <p class="contentfront" id = "contentfront">'+data[0]['birthday']+'</p></section></div>\
                  <div class="back-side bg-info position-absolute" style="height: 100px; width: 200px;transform: rotateY(180deg) translateZ(180px);">\
                    <section>\
                      <h3 class="titleback"> '+data[1]['name']+'</h3>\
                      <p class="contentback">'+data[1]['birthday']+'</p>\
                    </section>\
                      </div>\
                  <div class="left-side bg-info position-absolute" style="height: 100px; width: 200px; transform: rotateY(-90deg) translateX(-180px);transform-origin: left;">\
                    <section>\
                      <h3 class="titleleft">'+data[2]['name']+'</h3>\
                      <p class="contentleft">'+data[2]['birthday']+'</p>\
                  </section>\
                </div>\
                  <div class="right-side bg-info position-absolute" style="height: 100px; width: 200px;transform: rotateY(90deg) translateX(200px);transform-origin: right;">\
                    <section><h3 class="titleright">'+data[3]['name']+'</h3>\
                      <p class="contentright">'+data[3]['birthday']+'</p>\
                  </section>\
                  </div>\
                </div>\
              </div>\
            </div>\
          </div>\
    </div>  \
    ');

    $('.widget-show').append(html2);


      });



});
