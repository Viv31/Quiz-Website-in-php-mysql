<!DOCTYPE html>
<html>
<head><!--Start of head-->
	<title>Registration Form</title>
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
    <script src="js/formvalid.js"></script>
    <!--Script Used for Form Validation-->


</head>
<!--End of Head-->
<body>
	<!--Start of Body-->
	<div class="container-fluid rgbg">
		<!--Start of Container Fluid-->
		<!--rgbg class used for background image-->
		<div class="modal fade" id="Failed" role="dialog">
    <div class="modal-dialog">
    
     
      <div class="modal-content">
        
        <div class="modal-body">
        	<!--Dynamic paragraph which takes value from php variable-->
          <p id="msg"  class="text-primary text-center"></p>
        </div>
        
      </div>
      
    </div>
  </div>
<!--
===============================================================================
Php code for checking conditions user status for Registration
-->
<?php 
  					/*
						if condition for multiple status 
  					*/
                        if(isset($_GET['status']) AND $_GET['status']=="emailexist")
                        {
                          $message="This email is Taken by another user";
                             
                        }
                       


                     ?>
<script>
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
================================================================================
-->

	<div class="row">
			<!--Start of Row-->
			<div class="col-md-4 col-sm-4 col-xs-12">
				
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<!--Form Starts Here-->
				<form class="form-container_register" action="reg_sub.php" method="POST" onsubmit="return checkUser();" enctype="multipart/form-data">
					<!--This function logvalid() is used for checking validation on Client Side-->
					<h1 class="text-center">Registration Form</h1>
					<hr>
					<div class="form-group">
					      <label class="control-label" for="fname">First Name:</label>
					      
					        <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" pattern="^[a-zA-Z\s]*$" title="Only letters are required" autocomplete="off" minlength="3" />
					     
					      <div id="firstnamechk" class="popup_error"></div>	
    				</div>
					 <!--End of First Name Field-->
					  <div class="form-group">
					      <label class="control-label" for="lname">Last Name:</label>
					    
					        <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" pattern="^[a-zA-Z\s]*$" title="Only letters are required" autocomplete="off" minlength="3"/>
					      
					      <div id="lastnamechk" class="popup_error"></div>
    				</div>
    					 <!--End of Last Name Field-->

    					 <div class="form-group">
					      <label class="control-label" for="fname">Email:</label>
					      
					        <input type="email" class="form-control" id="email" placeholder="developerVaibhav@gmail.com" name="email" onkeyup="checkemail();" pattern="[aA-zZ0-9._%+-]+@[aA-zZ0-9.-]+\.[aA-zZ]{2,3}$" title="Email should like developerVaibhav@gmail.com" autocomplete="off">
					      
					      <div id="chkemail" class="popup_error"></div>
    					</div>
    					<!--End of Email Field-->
    					 <div class="form-group">
						      <label class="control-label" for="pass">Password:</label>
						      
						        <input type="password" class="form-control" id="pass" placeholder="Enter Password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
						      
						      <div id="chkpwd" class="popup_error"></div>
						      <input type="checkbox" onclick="ShowPass()">&nbsp; &nbsp;<span class="show_pass">show password</span>
    					</div>
    					<!--End of Password Field-->

    					<div class="form-group">
					      <label class="control-label" for="cpass">Confirm Password:</label>
					      
					        <input type="password" class="form-control" id="cpass" placeholder="Enter Confirm Password" name="cpass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" onkeyup="checkConfPass();">
					     
					      <div id="cpwd" class="popup_error"></div>
					      <input type="checkbox" onclick="ShowPassconf()">&nbsp; &nbsp;<span class="show_pass">show password</span>
    					</div>

    					<label for="upload_img" class="lab">Upolad image</label>
						<input type="file" name="upload_img" id="file" value="" onchange="return fileValidation()">
						 <div id="uploadIMG" class="popup_error"></div>
						<br>

					 

					  <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button> 					  <!--This class btn-block is used for showing button full width -->
					 
										
				</form>
				<!--End of Form-->

				
			</div>
			
		</div><!--End of Row-->

		
		
	</div>
	<!--End of Container-fluid-->

</body>
<!--End of Body-->
</html>	
