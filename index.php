<?php
session_start();

	if(isset($_SESSION['email']));
	{
		session_unset();
	}
	
	include("inc/connection.php");
?>
<!DOCTYPE html>
<html>
<head><!--Start of head-->
	<title>Login Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="css/style.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <!--Adding JS file For Validating Email and Password-->
	 <script src="js/loginvalid.js"></script>
	 <!--End Of Validation Script-->
  <script src="js/emailpassvalid.js"></script>


</head>
<!--End of Head-->
<body>
	<!--Start of Body-->
	<div class="container-fluid bg">
		<!--Start of Container Fluid-->
		<!--bg class used for background image-->
<!--
==============================================================================
-->		

<!--Div Start for Generating Popup Error Message-->
	<div class="modal fade" id="Failed" role="dialog">
    <div class="modal-dialog">
    	<!--Start of Model Dialog-->
    
     
      <div class="modal-content">
      	<!--Start of Model content-->
        
        <div class="modal-body">
        	<!--Start of model body which shows error message-->
        	<!--Dynamic paragraph which takes value from php variable-->
          <p id="msg"  class="text-primary text-center">
          	<!--Make a pargaraph with id msg so it chacks condition and generates dynamic message-->
          	
          </p>
          <!--End of Paragraph-->
        </div>
        <!--End of model body-->
        
      </div>
      <!--End of model content-->
      
    </div>
    <!--End of Model Dialog-->
  </div>
  <!--End of Pop up Block-->
  <!--
==============================================================================
							PHP CODE FOR POPUP ERROR
  -->

  					<?php 
  					/*
						if condition for multiple status 
  					*/

                        if(isset($_GET['status']) AND $_GET['status']=="failed")
                        {
                          $message="Invalid Username/Password!!!";
                          /* Condition while inserting username/password if not valid/Authentic it shows this message*/
                             
                        }
                        if(isset($_GET['status']) AND $_GET['status']=="success")
                        {
                          $message="You are Registered Successfully!!!";
                             /* if register form gets this status it will show this message*/
                        }


                     ?>
<!--
	                          END OF PHP CODE FOR POPUP
==============================================================================
               Start OF POPUP CODE SCRIPT 
-->                    
<script>
	//This script generates the error message on diffrent conditions
$( document ).ready(function() {
	/*  id for message in paragraph */
    $("#msg").html("<?php echo $message; ?>");
    /*
id of status which is coming from header location in php 
    */
    $('#Failed').modal('show'); 
    setTimeout("$('#Failed').modal('hide'); ", 4000); 

});
</script>
<!--
==============================================================================
                END OF POPUP SCRIPT
-->

		<div class="row">
			<!--Start of Row-->
			<div class="col-md-4 col-sm-4 col-xs-12">
				
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<!--Form Starts Here-->
				<form class="form-container" action="login_sub.php" method="post" onsubmit=" return logvalid();">
					<!--This function logvalid() is used for checking validation on Client Side-->
					<h1 class="text-center">Login Form</h1>
					<hr>
					<div class="form-group">
					    <label for="email">Email:</label>
					    <input type="email" class="form-control" id="logemail" name="email" placeholder="Enter your Email">
					    <div id="logemailchk" class="popup_error">
					    	<!--Div For Showing Error Message-->
					    	
					    </div>
					    <!--End of Div Error Message-->
					 </div>
					 <!--End of Email Field-->

					 <div class="form-group">
					    <label for="pwd">Password:</label>
					    <input type="password" class="form-control" id="logpwd" name="pass" placeholder="Enter Your Password">
					     <div id="logpasschk" class="popup_error">
					     	<!--Start of Div Showing Error Message-->
					     </div>
					     <!--End of Div Showing Error Message-->
					  <input type="checkbox" onclick="ShowPasslog();">&nbsp; &nbsp;show password
					  <!--CheckBox Create For Showing/Hiding Password
						  This function ShowPasslog() is used for Showing password on login field while Clicking on Checkbox	
					  -->
					 </div>
					 <!--End of Password Field-->

					  <input type="submit" class="btn btn-success btn-block" name="login" value="Login" ><br>
					  <!--This class btn-block is used for showing button full width -->
					  <!--Start Of Showing Register Message-->
					  <span>Not Registered Yet &nbsp;<a href="register.php">Register here</a></span>
					  <!--End of Register Message-->
										
				</form>
				<!--End of Form-->

				
			</div>
			
		</div><!--End of Row-->

		
		
	</div>
	<!--End of Container-fluid-->

</body>
<!--End of Body-->
</html>