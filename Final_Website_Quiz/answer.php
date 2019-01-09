<?php
include('inc/header.php');
$_SESSION['userans']= rand(100,10000);
/*
$_SESSION['userans']= rand(10,10000)
This code will generate a random value for users ans for particular category so we can easyly retrive users value for particular session
it genrates random value of seeion in DB when we want to retrive data so we will call this session varabile so we can reteive data for particular session.

*/
//print_r($_POST); 
//die;


foreach ($_POST as $que => $answers)
{
	/*echo "<br>";
	echo $que;
	echo "<br>";
	echo $answers;


	echo "<pre>";
	 
print_r($que);
	echo"-->";
	print_r($answers);
	echo "</pre>";
	*/
	/*
	==============================================================
	Query for storeing users answer in our table so we can further retrive or match with ans with users ans
 


================================================================	*/
//print_r($que);
//print_r($answers);

//die;


	 $insert_ans="INSERT INTO user_ans_details(name,question_id,answer,category_id,session,date)VALUES('".$_SESSION['fname']."','$que','$answers','".$_SESSION['cat']."','".$_SESSION['userans']."',CURRENT_TIMESTAMP)";
	$user_result=mysqli_query($conn,$insert_ans);

	if($user_result!=true){
		die('failed to insert');
	}
	else{
		//echo"inserted";
	}
	

}
//print_r($_POST);
//die;
//die;



include('inc/connection.php');
$category=$_SESSION['cat'];

/*
echo"<pre>";
print_r($_POST);
echo"</pre>";

*/



					$right=0;
				echo "<br>";
					$wrong=0;
				echo "<br>";
					$no_answer=0;
				//die;
 $chk_ans="select id,ans from  questions where category_id='".$_SESSION['cat']."' ";
$res=mysqli_query($conn,$chk_ans);

if(mysqli_num_rows($res)>0){
	while($rs=mysqli_fetch_assoc($res))
	{
						/*print_r($rs['ans']);
						echo "<br>";
						echo"<pre>";
						print_r($_POST[$rs['id']]);
			
						echo"</pre>";
						*/
						

		if($rs['ans']==$_POST[$rs['id']])
								{
										echo "<br>";
										 $right++;

										
								}

								elseif($_POST[$rs['id']]=="no_answer")
									{
										
										 $no_answer++;

									}
									else
								{
									 $wrong++;
									
								}
								//die;
								

	}
	$array=array();


							$array['right']=$right;
							$array['wrong']=$wrong;
							$array['no_answer']=$no_answer;
							echo"<br>";
							/*echo "<pre>";
							
							print_r($array['right']);
							echo "</pre><br>===========================";
							
							echo "<pre>";
							print_r($array['wrong']);
							echo "</pre><br>===========================";
							
							print_r($array['no_answer']);
							*/
							$_SESSION['Right']=$array['right'];
							$_SESSION['Wrong']=$array['wrong'];
							$_SESSION['NoANS']=$array['no_answer'];
							//print_r($_SESSION['Right']);
							//print_r($_SESSION['Wrong']);
							//print_r($_SESSION['NoANS']);
	

	  $total =	$right + $wrong + $no_answer;

	  $per=($right*100)/($total);
		 $per."%";	
			
							/*
echo  'RightAns'. "  ".$right;

echo '<br>'.$wrong;

echo  '<br>'.$no_answer;

*/

}

if (!isset($_SERVER['HTTP_REFERER'])){

	
 // echo "<script>alert('hii')</script>";
	header("location:home.php");
}





?>
<style type="text/css">
	body {
	background: #34495e;
	/*color: #ecf0f1;*/
	margin: 0;
	padding: 0;
}
td,h3{
	color: #ecf0f1;
}
</style>
<div class="container">
<center><h3><?php echo $_SESSION['fname']; ?></h3>
	<hr>


<table border="1" class="table table-striped">
	<tr>
	<th>sno<?php $counter=1;?></th>
	<th>Total</th>
	<th>Right</th>
	<th>Wrong</th>
	<th>Not Attempt</th>
	<th>PERCENTAGE</th>
	<th>STATUS</th>
		
	</tr>
	<tr>
		<td><?php echo $counter++ ;?></td>
		<td><?php echo $total;?></td>
		<td><?php echo $right; ?></td>
		<td><?php echo $wrong; ?></td>
		<td><?php echo $no_answer; ?></td>
		<td><?php echo $per."%";?></td>
		<td>
			<?php 
			if($per<33){

				echo"FAIL";

			} 
			else{
				echo"PASS";
			}

		

		?></td>

		


	</tr>
</table>
</center>
<?php
   $insert_res="INSERT INTO  result(name,category,total_questions,right_ans,wrong_ans,not_attempt,percentage,
status,date) VALUES('".$_SESSION['fname']."','$category','$total','$right','$wrong','$no_answer','$per','status',CURDATE())";
$result=mysqli_query($conn,$insert_res);
if($result!=true){
	die('failed to insert');
}
else{
	  //echo "INSERTED SUCCESSFULLY";
}

?>

<center><a href="user_answer.php" class="btn btn-primary">Check Your Answers</a></center>

</div>

