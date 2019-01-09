<?php include('inc/header.php'); ?>
<?php error_reporting(0); ?>
<?php
 $ANS_CAT="SELECT * FROM answerd_category WHERE userID='".$_SESSION['id']."'";
$RESULT=mysqli_query($conn,$ANS_CAT);
if(mysqli_num_rows($RESULT)>0){

	while($Answered=mysqli_fetch_assoc($RESULT)){

		
		$USER_GIVEN_ANS[] = $Answered['categoryID'];
		/*
			the above code create an arry of Category which is already Traversed by user so they will not see same category twice

			for this create another table answerd_category Which stores users UserId and CategoryID so we can check for this What category is Selected Before


		*/


	}


}

?>
<style type="text/css">
	.banner {
	display: block;
	min-height: 50px;
	width: 100%;
	position: relative;
}
.typed_wrap {
	display: block;
	
	padding: 20px;
	
	/*centers it in the .banner*/
	position: absolute;
	top: 50%;
	left: 43%;
	-webkit-transform: translate(-50%,-50%);
	-moz-transform: translate(-50%,-50%);
	-ms-transform: translate(-50%,-50%);
	-o-transform: translate(-50%,-50%);
	transform: translate(-50%,-50%);
}

.typed_wrap h2 {
	display: inline;
	color:white;
}

/*Add custom cursor so it auto inherits font styles*/
.typed::after {
	content: '|';
	display: inline;
	-webkit-animation: blink 0.7s infinite;
	-moz-animation: blink 0.7s infinite;
	animation: blink 0.7s infinite;
}

/*Removes cursor that comes with typed.js*/
.typed-cursor{
   opacity: 0;
	display: none;
}
/*Custom cursor animation*/
@keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-webkit-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-moz-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
/*
==============================================================================
                   CSS FOR MEDIA QUERY MOBILE SCREEN
==============================================================================


*/

@media only screen and (max-width: 600px) 
{
  .text-center 
	{
	    font-size: 18px;
	}
	.typed_wrap h2 
	{
	    display: inline;
	    font-size: 18px;
	}

}

</style>
<!--
==============================================================================
			END OF MEDIA QUERY CSS
==============================================================================
-->
<script type="text/javascript">
	
$(function(){
	$(".typed").typed({
		strings: ["<?php echo $_SESSION['fname']; ?>","To Knowledge Adda"],
		// Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
		stringsElement: null,
		// typing speed
		typeSpeed: 100,
		// time before typing starts
		startDelay: 1600,
		// backspacing speed
		backSpeed: 100,
		// time before backspacing
		backDelay: 900,
		// loop
		loop: true,
		// false = infinite
		loopCount: 15,
		// show cursor
		showCursor: false,
		// character for cursor
		cursorChar: "|",
		// attribute to type (null == text)
		attr: null,
		// either html or text
		contentType: 'html',
		// call when done callback function
		callback: function() {},
		// starting callback function before each string
		preStringTyped: function() {},
		//callback for every typed string
		onStringTyped: function() {},
		// callback for reset
		resetCallback: function() {}
	});
});


</script>
<div class="container homebg">
	<p style="text-align:center;"><img src="<?php echo  $_SESSION['upload_img']; ?>" height="160" width="200" style="margin-top: 5px; "></p>
	<!--Showing Image on Home page-->

	<!--<h2 class="text-center">Welcome,<span class="username"><?php //echo $_SESSION['fname']; ?></span>-->
</h2>
<!--
=============================================================================
						DIV FOR GENERATING TYING EFFECT
-->
<div id="page_wrap">
	
	<div class="banner">
		<div class="typed_wrap">
			<h2>Welcome, <span class="typed"></span></h2>
		</div>
	</div>
</div>
<!--
==============================================================================
-->
	<hr>
<?php //echo $_SESSION['upload_img']; ?>
	
	<!--Start of container-->
	<center>
		<button type="button" class="btn btn-primary" data-toggle="tab" href="#select">
					Start Quiz
		</button>
		<!--End of Button-->
	</center><br>
	 <div class="col-md-4"></div>
  <div class="col-md-4">
	 <div id="select" class="tab-pane fade">
	 	<!--this form is used for submitting category-->
	 	<!--Form Starts Here-->
	 <form method ="post" action ="quiz.php">
	 	
	 	<select class="form-control" id="" name="cat" required>
	 		<!--Select Box for Showing Options-->
	<option value="">select category</option>
	<?php
$select_category="SELECT * FROM category";
$res=mysqli_query($conn,$select_category);
if(mysqli_num_rows($res)>0){
	while($rs=mysqli_fetch_assoc($res)){
		//$cat[]=$rs;
		

		//$category=$_POST['cat'];
		

		if (!in_array($rs['id'], $USER_GIVEN_ANS))
			/*
				Passing above array Which is containing user's already answerd category so user will not see same category becase of above function
			*/
  {
                 
 
		
		?>

		<option value='<?php echo $rs['id'];?>' id=""><?php echo $rs['category_name'];?>
		<!--Showing Category in Select Box-->
			
		</option>
<?php
	}


}


}



	?>
</select>
<!--End of Select box-->
<br>
	<input type="submit" name="submit" class="btn btn-primary">
	
	 </form>
	 <!--End of Form-->
	</div>
	<!--End of Select box-->
	</div>
	<!--End of Column-->
</div>
<!--End of Container-->
<?php
//include('inc/footer.php');
?>