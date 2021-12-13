$(document).ready(function(){

    

    $(".sidemenu-button").click(function(){

      var el = $('.sidemenu-button');

     

      var p = el.attr("class");

     

      if(  p!="navbar-toggler nav-button sidemenu-button"){
          $(".sidemenu").css("display","none");
          $(".main-content").css("left","0px");
          var ep = $('.sidemenu-close-button');
          ep.addClass('sidemenu-button');
          ep.removeClass('sidemenu-close-button');
    }


      else if(p=="navbar-toggler nav-button sidemenu-button"){

        $(".sidemenu").css("display","block");
        $(".main-content").css("left","200px");
       
        el.removeClass('sidemenu-button');
        el.addClass('sidemenu-close-button');
      }

     
       

    });


$(".signout").on('click',function(event){
    event.preventDefault();
    // console.log("testing how many time loeads");
    
    if (!confirm("Are you sure !"))
        return;
    
    $.ajax({
              url:"Include/admin-logout.php",
              type:"POST",
              cache: false,
              contentType: false,
              processData: false,
              success:function(data){
                alert("Log Out Succuess");
                window.location.reload();
              },
              error: function(status,error){
                  alert(status);
              }
    
          });
    
    });
    

   

    $(".movie-add").on({

  submit: function(e){
    movie_add(e);
}
});

function movie_add(e){
    // e.prevenetDefault();
    e.preventDefault();
   
    let myForm = document.getElementById('my-form');

    
    let formData = new FormData(myForm);

    

    
      $.ajax({
          url:"Include/add.php",
          type:"POST",
          cache: false,
          contentType: false,
          processData: false,
          data: formData,
          success:function(data){
            alert(data);
          },
          error: function(status,error){
              alert(status);
          }

      });

  
  }

$(".series-add").on({

submit: function(e){
  series_add(e);
}
});






  

function series_add(e){
e.preventDefault();
// console.log("hello world2");
// var val = $(".movie-add").serializeArray();


let myForm = document.getElementById('my-form');

    
let formData = new FormData(myForm);

    $.ajax({
          url:"Include/add.php",
          type:"POST",
          cache: false,
          contentType: false,
          processData: false,
          data: formData,
          success:function(data){
            alert(data);
          },
          error: function(status,error){
              alert(status);
          }

      });


}

// // add_user();




$(".movie-search-input").keyup(function(){


var movie_name_show = $(".movie-search-input").val();

//  

$.get('Include/movie_list_search.php',
{
  call:movie_name_show
},function(data,status){
    console.log(data);
  $(".movie-tables").html(data); 
}
);
});



$(".series-test-button").click(function(){
    confirm("are you sure");
});

$(".edit-profile").click(function(){
  $(".add-user").css("display","none");
    $(".edit-profile-section").css("display","block");
});

$(".dev-profile").click(function(){
  $(".add-user").css("display","block");
  $(".edit-profile-section").css("display","none");

});

$(".edit-profile-close").click(function(){
  $(".edit-profile-section").css("display","none");
});

$(".add-user-close").click(function(){
  $(".add-user").css("display","none");
});


$(".read-all-Notification").click(function(){

  var update1= "Update Registration";
 

  $.post('Include/update.php',
  {
    call:update1
  },
  function(data,status){
      window.location.reload();
  }
  );

});


$(".read-all-messages").click(function(){

  var update1= "Update feedback";
 

  $.post('Include/update.php',
  {
    call:update1
  },
  function(data,status){
      window.location.reload();
  }
  );

});





$(".add-user-from").on({

  submit: function(e){
    add_user(e);
  }
  });
  
  
  
  
  
  
    
  
  function add_user(e){
  e.preventDefault();

  
  
  let myForm = document.getElementById('add-user-form');
  
      
  let formData = new FormData(myForm);

  let call = "insert_admin";

  // console.log(formData);
  
      $.ajax({
            url:"Include/update.php",
            type:"POST",
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success:function(data){
                $(".success-meesage-show").html(data);
            },
            error: function(status,error){
                alert(status);
            }
  
        });

 
  
  
  }


  $(".edit-profile-form").on({

    submit: function(e){
      update_user(e);
    }
    });
    
    
    
    
    
    
      
    
    function update_user(e){
    e.preventDefault();
  
    
    
    let myForm = document.getElementById('update-user-form');
    
        
    let formData = new FormData(myForm);
  
    let call = "insert_admin";
  
    // console.log(formData);
    
        $.ajax({
              url:"Include/update.php",
              type:"POST",
              cache: false,
              contentType: false,
              processData: false,
              data: formData,
              success:function(data){
                  $(".success-meesage-show").html(data);
              },
              error: function(status,error){
                  alert(status);
              }
    
          });
  
   
    
    
    }
  









  });