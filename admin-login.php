<?php


   


   require_once 'Include/database.php';
   $Err = "";

   session_start();
   if(isset($_SESSION['admin-user']))
   header("Location: http://localhost/Movie-site/admin.php");
else

   if($_SERVER['REQUEST_METHOD']=='POST'){
         extract($_POST);
   

   
   $db = new database();

   $sql = "SELECT  * from admin where user_id = '$username'";

   $db->query($sql);

   if($db->sql_query->rowCount() > 0 ){
      // if(!empty($_POST['remember'])){
         
      // }

      $result = $db->sql_query->fetchAll(PDO::FETCH_ASSOC);
      if($result[0]['password'] == sha1($passw)){
      
      

      $user = $result[0]['user_id'];
      $img = $result[0]['image'];
      $dev = $result[0]['if_dev'];

      $det = array("user_id"=>"'$user'","img"=>"'$img'","dev"=>"'$dev'");

      $_SESSION['admin-user']=$det;


      if(isset($_SESSION['admin-user']))
         header("Location: http://localhost/Movie-site/admin.php");
      else
         $Err = "Something Went wrong";
      }
      else
         $Err = "Wrong Password";

   }
   else{
      $Err = "User Id is not valid";
   }

   $db->close_connection();

   }








   

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="Assets/Vendor/bootstrap/bootstrap-4.5.0-dist/css/bootstrap.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
      <script
         src="//code.jquery.com/jquery-3.5.1.min.js"
         integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
         crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <!--<script src="jquery-3.5.1.js"></script>-->
      <title>Movie Mania Admin Login</title>
      <style>
         .site-title{
         width:100vw;
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
         }
         .admin-title h2{
         font-size:1.8rem;
         text-transform:uppercase;
         lettr-spacing:1px;
         }
        .form-group  input{
            border:2px solid black;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .error{
           color:red;
        }
      </style>
   </head>
   <body>
      <div class="container-fluid" style="height:100vh;">
         <div class="row">
            <div class="row-12">
               <div class="site-title">
                  <nav class="navbar navbar-expand-lg" style = "width:100%">
                     <a href="#" class="navbar-brand">
                     logo 
                     </a>
                  </nav>
               </div>
            </div>
            <div class="col-12">
               <div class="admin-title d-flex justify-content-center align-items-center mt-4 mb-5">
                  <h2 class="text-center">
                     admin login
                  </h2>
               </div>
            </div>
            <div class="col-12">
               <div class="login-details d-flex justify-content-center align-items-center">
                  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                     <div class="form-group d-flex">
                        <label for="loginemail"><i class="fas fa-envelope-square"></i></label>
                        <input type="email" class="form-control" placeholder = "Enter Email" id="loginemail" name="username" required="" >
                     </div>
                     <div class="form-group d-flex">
                        <label for="exampleInputPassword1"><i class="fas fa-lock"></i></label>
                        <input type="password" class="form-control" placeholder = "Password" id="loginpassword" name="passw" required="">
                     </div>
                     


                     <div class="form-group form-check ml-5">
                        <p class="error text-justify"><span class="error"> <?php echo $Err;?></span></p>
                        <input type="checkbox" name="remember" class="form-check-input" id="rememberme">
                        <label class="form-check-label" for="exampleCheck1">Rmember me</label>
                     </div>
                     <div class="submit-button d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-12">
               <div class="footer">
               </div>
            </div>
         </div>
      </div>
   </body>
</html>

