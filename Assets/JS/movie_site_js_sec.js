index = 0;
showslides(index);

function showslides(){ 
    var s = document.getElementsByClassName("slides");
    var d = document.getElementsByClassName('dot');
    var t = document.getElementsByClassName('thmbnail');
    
    for ( i = 0; i<s.length;i++){
        s[i].style.display = " none";
    }

    

   

    // console.log(index);

    index = index+1;
    if ( index  >s.length){
        index = 1 ;
  
    }
    if (index < 1 ) {
    index = s.length;  
    }
    for ( i = 0; i<d.length;i++){
        d[i].className = d[i].className.replace(" active","");
    }
    for(i=0 ; i <t.length ; i++){
        t[i].className = t[i].className.replace(" active-a","");
        t[i].childNodes[1].childNodes[3].className = t[i].childNodes[1].childNodes[3].className.replace(" active-s","");
    }
    s[index-1].style.display = "block";
    d[index-1].className += " active";
    t[index-1].className += " active-a";
    t[index-1].childNodes[1].childNodes[3].className += " active-s"; 
    $("a.active-s").click(function(){
        var title_check = $(".active-s").html();
        if ($(".login").html() != "Login") {
            var url = "testing.php?name=" + encodeURIComponent(title_check);
            window.location.href = url;
       }
       else {
            alert("please Login first");
       }
    });
    
    setTimeout( showslides ,8000);
   
}




indexe = 0;
    var stop="notnull";
    showslidese(stop);
    
    function nextslides(p){
        clearTimeout(showslidese);
        indexe+=p;
        indexe-=1;
        showslidese();
    }

    //movie-tittle-label
    
    function showslidese(stop){
     //   document.getElementsByClassName("video-play-div").style.display="none";
        var i;
        var slide = document.getElementsByClassName("most-viewed-list");
        var k = document.getElementsByClassName('movie-tittle-label');
        for(i = 0;i<slide.length;i++){
            slide[i].style.display=" none";
        }

        for(i = 0;i<slide.length;i++){
            k[i].className = k[i].className.replace(" active-p","");
        }

       
        indexe +=1;
        if (indexe  >slide.length) {
            indexe = 1;
        }
        if (indexe < 1) {
            indexe=slide.length;
        }

        slide[indexe-1].style.display=" block";
        k[indexe-1].className += " active-p";

        $(".video-play").click(function(){
            var title_test = $(".active-p").html();
            
            if ($(".login").html() != "Login") {
                var url = "testing.php?name=" + encodeURIComponent(title_test);
                window.location.href = url;
           }
           else {
                alert("please Login first");
           }
        });

        setTimeout(showslidese,4000);
    }





// $(".video-play-div").click(function(){
//     console.log("hrllo");
//     clearTimeout(showslidese);

// });




  /*function goreg(){
    //  document.location.href = 'registration_form.php';
    window.open('registration_form.php','_blank');
  }*/

  function close(){
    document.getElementsByClassName("video-play-div").style.display="none";
  }

   
