<?php  

  require_once 'Include/database.php';

  session_start();
 
  if(isset($_SESSION['admin-user'])){
      $result = $_SESSION['admin-user'];
      $admin_user = $result['user_id'];
      $image = $result['img'];
      $dev = $result['dev'];
  }
  else
    header("Location: http://localhost/Movie-site/admin-login.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="Assets/Vendor/bootstrap/bootstrap-4.5.0-dist/css/bootstrap.css">
      <link rel="stylesheet" href="Assets/Css/admin_style.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
      <script
         src="//code.jquery.com/jquery-3.5.1.min.js"
         
         crossorigin="anonymous"></script>
      <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
      <!--<script src="jquery-3.5.1.js"></script>-->
    <title>Movie Mania  Admin panel</title>

    <style>
    /* *{
      box-sizing:border-box;
      margin:0px !important;
      padding:0px !important;
    }       */

    




    

       

    </style>
   
</head>
<body>
        
  <div class="container-fluid">
    <div class="row flex-lg-row flex-xl-row flex-md-column flex-sm-column">
    
      <div class="col-12 col-sm-12 col-md-12  col-lg-12 col-xl-2">
       <div class="sidemenu">
          <section class="menu-header">

          <nav class="navbar navbar-expand-lg navbar-red" >
              <a class="navbar-brand" >Menu</a>
          </nav>

          </section>
          <section class="menu mt-5 mb-5">
                <nav class="menu-items d-flex flex-row">
                
                  <ul class="menu-list ml-3" >
                  
                  <li>
                 
                    <a class="d-flex flex-row " href="index.php">
                    <i class="fas fa-arrow-right"></i>
                       <span class="ml-3" > visit site </span>
                    </a>
                  </li>

                  <li>
                    <a class="d-flex flex-row" href="admin.php">
                    <i class="fas fa-home"></i>
                      <span class="ml-3">  dashboard </span>
                    </a>
                  </li>

                  <li>
                    <a class="d-flex flex-row" href="admin.php?category=users">
                    <i class="fas fa-users"></i>
                    <span class="ml-3">   user </span>
                    </a>
                  </li>


                  <li>
                    <a class="d-flex flex-row" href="admin.php?category=movies">
                    <i class="fas fa-ticket-alt"></i>
                    <span class="ml-3">  movies </span>
                    </a>
                  </li>


                  <li>
                    <a  class="d-flex flex-row" href="admin.php?category=series">
                    <i class="fas fa-ticket-alt"></i>
                    <span class="ml-3">   series </span>
                    </a>
                  </li>


                 



                  </ul>

                </nav>
          </section>
       </div>
       
      </div>
      <div class="col-12 col-sm-12 col-md-12  col-lg-12 col-xl-10 main-content">

      <section class="header">
     


      <nav class="navbar navbar-expand-lg">
  <button class="navbar-toggler nav-button sidemenu-button" type="button" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
  </button>




      <a class="navbar-brand" >Movie Mania</a>
  
  
  <button class="navbar-toggler nav-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
  </button>

  <div class="collapse navbar-collapse d-xl-flex justify-content-end" id="navbarSupportedContent">
  <div class="d-flex justify-content-end">

  <form class="form-inline my-2  search my-lg-0 ">
      <input class="form-control mr-sm-2 search-box" type="search" placeholder="Search" aria-label="Search">
        <a class="test-input ml-2" href= ><i class="fas fa-search"></i></a>
    </form> 
  <section>
     <ul class="navbar-nav mr-auto notification-tab">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bell"></i>
        </a>
        <div class="dropdown-menu all">

        <?php

            $sql = "SELECT * from RegistrationTable where new_join = 1";

            $db = new database();

            $db->query($sql);

            if($db->sql_query->rowCount() > 0){
              
              $no_new = $db->sql_query->rowCount();
              $result_new = $db->sql_query->fetchAll(PDO::FETCH_ASSOC);
              $db->close_connection();
            }
              else{
                $no_new =  0;
                $db->close_connection();
            }



            

        ?>

          <section class="all-notice d-flex justify-content-between">
              <h1>
                All Notifications
              </h1>
              <span class="count">
                  <?php echo $no_new;?>
              </span>
          </section>

          <div class="notices new-notice">

               <?php 
               if($no_new <= 0){
                 ?>
                  <a class="dropdown-item" href="#">No New Notifications</a>
                <?php
               }
               else{
                  for ($l=0; $l < $no_new ; $l++) { 
                    ?>
                    <a class="dropdown-item" href="#"><p style="color:black;"><?php echo $result_new[$l]['Username'];?>  New User</p></a>
                  <?php 
                  }

               } 
               
               ?> 

<button class="button-class read-all-Notification ml-3"><p>Read All</p></button>

          </div>

         

        </div>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-envelope-open-text"></i>
        </a>
        <div class="dropdown-menu all" aria-labelledby="navbarDropdown">
         

          <?php

$sql = "SELECT * from feedback where new_join = 1";

$db_feedback = new database();

$db_feedback->query($sql);

if($db_feedback->sql_query->rowCount() > 0){
  
  $no_new2 = $db_feedback->sql_query->rowCount();
  $result_new2 = $db_feedback->sql_query->fetchAll(PDO::FETCH_ASSOC);
  $db->close_connection();
}
  else{
    $no_new2 =  0;
    $db_feedback->close_connection();
}





?>

          <section class="all-notice  feedback-notices d-flex justify-content-between">
              <h1>
                All Messages
              </h1>
              <span class="count count-feedback">
              <?php echo $no_new2;?>
              </span>
          </section>

          <div class="notices feedback-notices">

              
<?php 
       if($no_new2 <= 0){
         ?>
          <a class="dropdown-item" href="#">No New Messages</a>
        <?php
       }
       else{
          for ($s=0; $s < $no_new2 ; $s++) { 
            ?>
          <div class="message-show">
           <p class="dropdown-item" style="color:black;">Message From <?php echo $result_new2[$s]['name'];?> </p>
           <p class="dropdown-item" style="color:black;">Email : <?php echo $result_new2[$s]['email'];?> </p>
           <p class="dropdown-item" style="color:black;">Message : <?php echo $result_new2[$s]['message'];?> </p>
          </div>
          <?php 
          }

       } 
       
       ?> 

  <button class="button-class read-all-messages ml-3"><p>Read All</p></button>


  </div>

        </div>


      


      </li>

      <li class="nav-item dropdown admin-image">
        <a class="nav-link dropdown-toggle admin-profile" href="#" id="navbarDropdown"  data-toggle="dropdown"  aria-expanded="false">
          <img class="admin-id-show" src=<?php echo $image;?> alt=<?php echo $admin_user;?> >
        </a>
        <div class="dropdown-menu admin-options" aria-labelledby="navbarDropdown">
        <div class="profile-card">
          <div class="iq-card">
              <div class="bg-primary">
                <h5 class="mb-0 text-white line-height">Hello Barry Tech</h5>
              </div>
             <button class="edit-profile button-class ml-3" ><p>Edit Profile</p></button>
             <br><button  class="signout button-class ml-3"><p>Sign Out</p></button>
             <br><button class="dev-profile button-class   ml-3"><p>Add User</p></button>
          </div>  
        </div>  
         
      </li>


      </ul> 
      </section>
    
   

    </div>
  </div>
</nav>





      </section>
      <section>

        <?php 
        if(isset($_GET['category'])){
          $page2=$_GET['category'];
          $php = ".php";

          $page2 = $page2."".$php;
         
          include_once 'Include/'.$page2;
        }
        else{
          include_once 'Include/home.php';
        }

        ?>



      </section>
      <section>
        
        <div class="copyright-details mt-3">
                  <p>© 2020 Movie Mania Movies. All rights reserved | Design by <span><a href="testing_download.docx" style="font-size: medium;text-decoration:none;" download>Rahul Saha</a></span></p>
        </div>

      </section>
      
    </div>

    </div>
  </div>

  <div class="edit-profile-section" >
        
  <button class="btn btn-parimary  close-button edit-profile-close">X</button>

        <div class="position-edit-profile">

          <form class="form-group edit-profile-form form-inline d-flex flex-column" id="update-user-form" action="" method="post" enctype="multipart/form-data">
          <label for="old-admin-user">OLD USER ID</label>
            <input class="form-control" type="email" placeholder="Old User Id" name="old_admin_user"required="">
          <label for="admin-user">EDIT USERNAME</label>
            <input class="form-control" type="email" placeholder="Edit User Name" name='admin_user' required>
          <label  for="admin-pass">EDIT PASSWORD</label>
            <input class="form-control" type="password" placeholder="Edit Password" name="admin_pass" required>
          <label for="admin-image">EDIT IMAGE</label>
            <input class="form-control" type="file" placeholder="Edit Image" name="admin_image" accept=".png, .jpg, .jpeg" required="">
            <input type="hidden" value="update_admin" name="call">
          <button type="submit" class="btn btn-primary">Submit</button>
          </form>

        </div>

        <h6 class="success-meesage-show"></h6>
        

  </div>

  <section class="add-user">
  <button class="btn btn-parimary close-button add-user-close">X</button>
  <div class="position-edit-profile">

<form class="form-group add-user-from form-inline d-flex flex-column" id="add-user-form" action="" method="post" enctype="multipart/form-data">
<label for="admin-user">EDIT USERNAME</label>
  <input class="form-control" type="email" placeholder="Edit User Name" name='admin_user' required>
<label  for="admin-pass">EDIT PASSWORD</label>
  <input class="form-control" type="password" placeholder="Edit Password" name="admin_pass" required>
<label for="admin-image">EDIT IMAGE</label>
  <input class="form-control" type="file" placeholder="Edit Image" name="admin_image" accept=".png, .jpg, .jpeg" required="">
<label for="new join">NEw JOIN</label>
<input class="form-control" type="number" placeholder="New Join" name="new_join" min="0" max="1" required="">
<input type="hidden" value="insert_admin" name="call">
<button type="submit" class="btn btn-primary">Submit</button>
</form>

<h6 class="success-meesage-show"></h6>

  </section>

  <script src="Assets/Jquery/admin_jquery.js" crossorigin="anonymous"></script>
 
  <script>

      $(document).ready(function(){
          var dev = <?php echo $dev ;?>

          if(dev == 1){
            $(".dev-profile").css("display","block");
          }

        var no_new = <?php echo $no_new ;?>

        var no_new2 = <?php echo $no_new2 ;?>

        if(no_new == 0){
          $(".read-all-Notification").css("display","none");
        }else{
          $(".read-all-Notification").css("display","block");
        }

        if(no_new2 == 0){
          $(".read-all-messages").css("display","none");
        }else{
          $(".read-all-messages").css("display","block");
        }



          console.log(dev);
      });

  </script>

        

</body>
</html>