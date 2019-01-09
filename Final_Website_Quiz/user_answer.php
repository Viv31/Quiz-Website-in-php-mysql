<?php
include('inc/header.php');
if (!isset($_SERVER['HTTP_REFERER'])){

	/*
		this code is preventing direct access of this page on URL if user insert user_answer.php so it will redirect to home page becaue of this function.

	*/


 // echo "<script>alert('hii')</script>";
	header("location:home.php");
}


?>




<?php

							//print_r($_SESSION['Right']);
							//print_r($_SESSION['Wrong']);
							//print_r($_SESSION['NoANS']);
							$TOTAL=$_SESSION['Right']+$_SESSION['Wrong']+$_SESSION['NoANS'];

							$per=($_SESSION['Right']*100)/($TOTAL);
		 					$per."%";
		 					$_SESSION['percent']=$per;

		 					//echo $_SESSION['percent'];
		 					//die;

	//die;


?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<div class="container">
<img src="<?php echo  $_SESSION['upload_img']; ?>" height="60" width="60" style="float:right; margin-top: 5px; ">

<center><h1><?php echo $_SESSION['fname']; ?></h1></center><hr>
<center><h4>Selected Category:<span>
<?php
$select_category="SELECT category_name FROM category WHERE id='".$_SESSION['cat']."'";

$catres=mysqli_query($conn,$select_category);
if(mysqli_num_rows($catres)>0){

	$YourCATEGORY=mysqli_fetch_assoc($catres);	

	echo $YourCATEGORY['category_name'];
	$_SESSION['selected_cat']=$YourCATEGORY['category_name'];
	$_SESSION['My_Category_name']=$YourCATEGORY['category_name'];

}


?>	
</span>

</h4>
<h4>Marks:<span>
<?php
$final_res="SELECT * FROM result WHERE category='".$_SESSION['cat']."'";
$finalRES=mysqli_query($conn,$final_res);
if(mysqli_num_rows($finalRES)>0){

	$marks=mysqli_fetch_assoc($finalRES);
	echo   $_SESSION['Right'];
	echo "/";
	echo $TOTAL;
	echo "<br><br>";
	echo "Percentage :".$per.'%';
	
	

}
else{
	die('no record found');
}

?>	
</span>
</h4>
<hr>
<center>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>
				Sno
				<?php  $no=1;?>
			</th>
			<th>
				Question
			</th>
			
			<th>
				Your Answer
			</th>
			
			<th class="rans">
				Right Answer
			</th>
		</tr>
	</thead>
	<tbody>
<?php


$fetch_result="SELECT * FROM user_ans_details WHERE category_id='".$_SESSION['cat']."'and session='".$_SESSION['userans']."'";

/*
$_SESSION['userans'] this will store users ans for giving in this particular session

*/


$res=mysqli_query($conn,$fetch_result);

if(mysqli_num_rows($res)>0){
	while($rs=mysqli_fetch_assoc($res)){
		?>


	
	
		
		<tr>
			<td><?php echo $no++; ?></td>
			
			<td>

				<?php 
/*
the below query is used for retriving question value for particular question id.
*/
				$show_que="SELECT question FROM questions WHERE id='".$rs['question_id']."'";
				$RS=mysqli_query($conn,$show_que);
				if(mysqli_num_rows($RS)>0){
					while($RES=mysqli_fetch_assoc($RS)){
						echo $RES['question'];
					}

				}
			?>
					

				</td>
			
			<?php 
/*
the below query is used for retriving question value for particular question id.

*/

				$show_que="SELECT ans FROM questions WHERE id='".$rs['question_id']."'";
				$RS=mysqli_query($conn,$show_que);
				$vv ='';
				if(mysqli_num_rows($RS)>0){
					while($RES=mysqli_fetch_assoc($RS)){
						$Right_answer= $RES['ans'];

					 if($rs['answer']==$RES['ans'])
						{
							$answer_color = 'style="color:#98FB98;"';
							
						} 
						if($rs['answer']!==$RES['ans']) 
						{

							$answer_color = 'style="color:#FF6347;"';

						}
						
						
							
						
					}

				}
			?>
			<td <?php echo $answer_color; ?>><?php echo $rs['answer'];?></td>
			<td <?php //echo $answer_color; ?>style="color: Green;" >
			<?php echo $Right_answer; ?>
			
				
			</td>

		</tr>
	

		<?php

	}
?>

<?php
}


?>
</tbody>

</table>
</center><hr>
<style type="text/css">
	body {
	background: #34495e;
	color: #ecf0f1;
	margin: 0;
	padding: 0;
}
td{
	color: #ecf0f1;
}
a{
	color: #ecf0f1;
	text-align: center;
}
</style>


<a href="home.php" class="btn btn-primary">Back To Quiz</a>
<a href="graph.php" class="btn btn-primary">Graph</a>
</div>
<!--End of Container-->
<?php
 extract($_POST);

$graph_query="INSERT INTO graph(category_name,percentage,user_id) VALUES('".$_SESSION['selected_cat']."','".$_SESSION['percent']."','".$_SESSION['id']."')";

$graph_insert=mysqli_query($conn,$graph_query);
if($graph_insert!=true){

die('failed to generate graph');

}
else{
	//echo"Graph generated";
}

?>
<script>
ScreenShot();
    function ScreenShot(){
        
        var element =$('body');
        html2canvas(element,{
        background:'#ffffff',
        onrendered:function(canvas){
            var ImgData=canvas.toDataURL('image/jpeg');
            $.ajax({
                url:'save.php',
                type:'post',
                dataType:'text',
                data:{
                    base64data:ImgData
                }
                
                
                
            });
        }
            
        });
        
        
    }
</script>