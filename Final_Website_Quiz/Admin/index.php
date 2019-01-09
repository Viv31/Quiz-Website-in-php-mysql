<?php
session_start();
include("inc/connection.php");
  if(isset($_SESSION['username']));
  {
    session_unset();
  }
  
  
?>

<!DOCTYPE html>
<html>
<head><!--Start of head-->
  <title>Admin Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <!--Adding JS file For Validating Email and Password-->
   <script src="js/validation.js"></script>

</head>
<!--End of Head-->
<body>
  <div class="container-fluid bg">

    <div class="modal fade" id="Login" role="dialog">
    <div class="modal-dialog">
    
      <!-- Showing message when user login fields are wrong-->
      <div class="modal-content">
        
        <div class="modal-body">
          <p class="text-danger text-center">Invalid Username/Password!!!</p>
        </div>
        
      </div>
      
    </div>
  </div>
  <?php 
//this code generates error message when user insert there data for login if data is wrong it generates a message for that

                        if(isset($_GET['status']) AND $_GET['status']=="error"){?>
                          <script>
                            //this script calls model when or show model and hide automatically after 4 seconds
$( document ).ready(function() {
    $('#Login').modal('show') 
    setTimeout("$('#Login').modal('hide'); ", 4000); 

});
</script>
                           

                            <?php

                        }

                        ?>
   

    <div class="row">
      <!--Start of Row-->
      <div class="col-md-4 col-sm-4 col-xs-12">
        
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <!--Form Starts Here-->
        <form class="form-container" action="admin_login_sub.php" method="POST" onsubmit="return validation();">
          <!--This function logvalid() is used for checking validation on Client Side-->

          <h1 class="text-center">Admin Login</h1>
          <hr>
          <div class="err">
<div id="emailChk" class="popup_error"></div>
<div id="PassChk" class="popup_error "></div>
</div>
          <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="username" type="email" class="form-control" name="username" placeholder="Please Enter Username" pattern="[aA-zZ0-9._%+-]+@[aA-zZ0-9.-]+\.[aA-zZ]{2,3}$">
    
  </div><br>
           <!--End of Email Field-->

           <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="password" placeholder="Please Enter  Password">
    </div>
    <br>
           <!--End of Password Field-->

            <input type="submit" class="btn btn-success btn-block" name="login" value="Login" ><br>
            <!--This class btn-block is used for showing button full width -->
           
                    
        </form>
        <!--End of Form-->

        
      </div>
      
    </div><!--End of Row-->

    
    
  </div>
  <!--End of Container-fluid-->

</body>
<!--End of Body-->
</html>