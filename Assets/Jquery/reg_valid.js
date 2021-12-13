$(document).ready(function(){
    var flag=false;
    $(".name").mouseleave(function(){
    var name = $(".name").val();
    if(!name){
        $(".name-error").html("* required field");
    }
    else if(name){
        $(".name-error").html("*");
    }
});
$(".passw").mouseleave(function()
{
    var passw = $(".passw").val();
    if(!passw){
            $(".passw-error").html("* required field");
    }
    else if(passw){
        $(".passw-error").html("*");
    }
});

$(".passwmatch").mouseleave(function()
{
    var passw = $(".passw").val();
    var passwmatch = $(".passwmatch").val();
    if(!passwmatch){
            $(".passw-mismatch").html("* required field");
    }
    else if(passw != passwmatch){
            $(".passw-mismatch").html("* password mismatch");
    }
});



$(".number").mouseleave(function()
{
    var number = $(".number").val();
    if(!number){
            $(".number-error").html("* required field");
    }
/*else if(number.legth != 10){
    $(".number-error").html("* invalid format");
}*/
else if(number){
    $(".number-error").html("*");
}
});


$(".email").mouseleave(function()
{
    var email = $(".email").val();
    if(!email){
            $(".email-error").html("* required field");
    }
/*else if(number.legth != 10){
    $(".number-error").html("* invalid format");
}*/
else if(IsEmail(email) == false){

    $(".email-error").html("* invalid format");
}

else if(IsEmail(email) == true){
    flag=true;
    $(".email-error").html("*");
}
});


function IsEmail(email) {
var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
if(!regex.test(email)) {
return false;
}else{
return true;
}
}

$(".reg-details-submit").on("click",function(e) {
 
e.preventDefault();
var name = $(".name").val();
var passw = $(".passw").val();
var passwmatch = $(".passwmatch").val();
var number = $(".number").val();
var email = $(".email").val();
    if(name && passw && passwmatch && passw==passwmatch  && number && email && flag ){
    
        // console.log('hwll');

        $.post("Include/add_to_Database.php",
             {
                  Name : name,
                  Password:passw,
                  phone:number,
                  email:email
             },
         function(data,status){
              $(".show").html(data);
                  if (status != "success") {
                   $(".show").html(status);
  }
});

    }

});

    $(".btn-outline-danger").click(function(){
        $(".reg-show").fadeOut(300);
        $(".log-show").fadeOut(300);
    });
    $(".btn-outline-info").click(function(){
       /* $(".reg-show").load("login_portal.php", function(responseTxt, statusTxt, xhr){
            if(statusTxt == "error")
              $(".reg-show").html("not available");
          });*/
          $(".log-show").fadeToggle(300);
    });



    $(".box").on({
   
        submit: function(e){
             submit_login(e);
        }
   
        });


        function submit_login(e){
            
            e.preventDefault();
            var name = $(".username").val();
            var passw = $(".password").val();
            $.post('mysql_add.php',
            {
                 Username : name,
                 Password:passw
                 
            },
        function(data,status){
           
               $(".show").html(data);
            
            
            
                 if (status != "success") {
                  $(".show").html(status);
    }
    });
        }


});