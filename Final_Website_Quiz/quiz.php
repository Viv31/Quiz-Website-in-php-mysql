<?php
session_start();
if(!isset($_SESSION['email']))
{
	header("location:index.php");
}
if(isset($_POST['logout'])){
	
	header("location:index.php");
}
include('inc/connection.php');

$category=$_POST['cat'];
//echo $category;
$_SESSION['cat']=$category;
$test = $_SESSION['cat'];
/*
==============================================================================

*/
 $sql = "SELECT count(id) as Que_id FROM questions WHERE category_id='".$_SESSION['cat']."'";
$max = mysqli_query($conn, $sql);
if(mysqli_num_rows($max)>0){
$Total_value=mysqli_fetch_assoc($max);


// $Total_value['Que_id'].'<br>';
$random = rand(1, $Total_value['Que_id']);
//echo $random;


}


//die;



/*
==============================================================================
*/
?>
<head><link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="js/backtotop.js"></script>


  


<style type="text/css">
	body {
	background: #34495e;
	color: #ecf0f1;
	margin: 0;
	padding: 0;
}
td{
	color:black;
	cursor: pointer;

}

.box{
background-color: black;
height:50px;
width: 100%;
text-align: center;
padding: 5px;
position: fixed;

}
.uname{
	float: left;
	margin-left: 30px;
}
.catname{
	float: right;
	color: white;
	margin-right: 30px;
}
#timer{
	position: fixed;
	margin-left: 30px;
}
.sel{
	color: blue;
}



</style>
<?php
$select_category="SELECT category_name FROM category WHERE id='".$_SESSION['cat']."'";

$catres=mysqli_query($conn,$select_category);
if(mysqli_num_rows($catres)>0){

	$YourCATEGORY=mysqli_fetch_assoc($catres);	

	$YourCATEGORY['category_name'];
	$_SESSION['selected_cat']=$YourCATEGORY['category_name'];

}


?>	
			
		</head>
		 <link rel="stylesheet" type="text/css" href="css/style.css">
		<div class="container-fluid">
			
				<div class="box">
					<div id="timer"></div><br>
					<p class="uname">Username:<span class="username"> <?php echo $_SESSION['fname']; ?></span></p>
				<p class="catname">Selected Category:<span class="sel"><?php echo $YourCATEGORY['category_name'];?></span></p>
	
				</div>
				<br><br>
		
		


			<div class="container">
				<!--Start of Container-->

				<br>
<?php

//Fetching Questions In Random Manner 
 $select_que="SELECT * FROM questions WHERE category_id='".$test."' order by  rand()";
$res=mysqli_query($conn,$select_que);
$i=1;
if(mysqli_num_rows($res)>0){
	while($rs=mysqli_fetch_assoc($res)){
		$quest['question']=$rs;
		//print_r($rs);
//die;
		?>
		<!--
==============================================================================
		-->
		
		<form action="answer.php" method="post" id="quiz">
<!--Form Starts Here-->
<!--
Fetching Questions in Table 

-->

			<table class="table table-bordered table-responsive" id="mytable">
				<!--Table Starts Here-->
		<thead>
			<!--Start of Table Header-->
		  <tr class="primary">
			<th>

			<?php echo $i;?>&nbsp;)&nbsp;<?php echo $rs['question'];?>
				
			</th>
			<!--
				       ECHOING QUESTION ON TABLE HEADER
==============================================================================
			-->				
		  </tr>
		</thead>
							<!--END OF TABLE HEAD-->
<!--
=============================================================================
-->							
		<tbody>
			<!--START OF TABLE BODY-->
			<?php if (isset($rs['ans1'])) {?>
		  <tr class="info">
			<td>&nbsp;A) &nbsp;<input type="radio" value="<?php echo $rs['ans1'];?>" name="<?php echo $rs['id'];?>"  />&nbsp<?php echo $rs['ans1'];?></td>
		</tr >
		<?php } ?>
		<!--
			                    ECHOING FIRST ANSWER
==============================================================================
		-->

		<?php if (isset($rs['ans2'])) {?>
		  <tr class="info">
			<td>&nbsp;B) &nbsp;<input type="radio" value="<?php echo $rs['ans2'];?>" name="<?php echo $rs['id'];?>"  />&nbsp<?php echo $rs['ans2'];?></td>
			</tr >
		<?php } ?>

		<!--
			             ECHOING SECOND ANSWER
=============================================================================
		-->

		<?php if (isset($rs['ans3'])) {?>
		  <tr class="info">
			<td> &nbsp;C) &nbsp;<input type="radio" value="<?php echo $rs['ans3'];?>" name="<?php echo $rs['id'];?>"  />&nbsp<?php echo $rs['ans3'];?></td>
			</tr >
		<?php } ?>
<!--
	                       ECHOING THIRD ANSWER
==============================================================================
-->

				<?php if (isset($rs['ans4'])) {?>
		  <tr class="info">
			<td>&nbsp;D) &nbsp;<input type="radio" value="<?php echo $rs['ans4'];?>" name="<?php echo $rs['id'];?>"  />&nbsp<?php echo $rs['ans4'];?></td>
			</tr >
		<?php } ?>
		<!--
			               ECHOING FOURTH ANSWER
==============================================================================
		-->
		
		<input type="radio" value="<?php echo "no_answer";?>"checked="checked" style="display:none;" name="<?php echo $rs['id'];?>"  />
		
<!--
	Above code is used When user not attempt any answer so it takes NULL value from our table and count this at no answer varaible
==============================================================================
-->	
		

		
	  <?php 

	  $i++;
	  //i will iterat untill it will get questions
	}
	?>
	<?php }?>

	
		
</tbody>
<!--END OF TABLE BODY-->
	  </table>
	<!-- <ul class="pager">
  <li><a href="#" onclick="getData();">Previous</a></li>
  <li><a href="#">Next</a></li>
</ul>-->
	<center><input type="submit" value="submit Quiz" id="submit" class="btn btn-success"/></center>
	<!--End of Form-->
</form>
<a id="back2Top" title="Back to top" href="#" style="float: right;">&#10148;</a>
<script type="text/javascript">
/*
==============================================================================
Script For Timer

*/
</script>

<script>
var total_seconds =900;
var c_minutes=parseInt(total_seconds/60);
var c_seconds=parseInt(total_seconds%60);
function CheckTime()
{
document.getElementById('timer').innerHTML='TIME LEFT:'+' '+ c_minutes+'   ' + 'min'+' '+ c_seconds+'  ' + 'sec';
if(total_seconds<=30){
{
 	timer.style.color='#f90';
 	//
 }
}
if(total_seconds<=10){

 {
 	timer.style.color='red';
 	//
}
}
if(total_seconds<=0){

			//alert("Sorry your time is over!!!");
        $("#submit").click();
        //this code is used for submitting form it requires Jquery CDN 
        
        
        
        
    }
    else{
    total_seconds=total_seconds-1;
    c_minutes=parseInt(total_seconds/60);
    c_seconds=parseInt(total_seconds%60); 
     setTimeout("CheckTime()",1000);
	}
}
setTimeout("CheckTime()",1000);
   </script>
   <!--
==============================================================================
   -->
</div>
<!--End Of Container-->
</div>
<!--End Of Container-Fluid-->
<!--
=============================================================================
-->

<?php
if(isset($_POST['submit'])){
	
//This Query is Used for Storeing users answerd category for that particular session so once it answerd it stores in DB and not repeat again in select box	

 $Selected_cat="INSERT INTO answerd_category(categoryID,userID) VALUES('".$_SESSION['cat']."','".$_SESSION['id']."')";

$QUERY_RES=mysqli_query($conn,$Selected_cat);

}

?>

</body>
<!--

==============================================================================
				SCRIPT STARTS FOR MAKING TD CLICKABLE
-->
<script type="text/javascript">
  	/*
		this script is used for making whole td clickable  
  	*/
  	$('.table tbody tr td').click(function(event) {
  if(event.target.type !== 'radio') {
    $(':radio', this).trigger('click');
  }
});
  </script>
  <!--
==============================================================================
  -->
</html>
