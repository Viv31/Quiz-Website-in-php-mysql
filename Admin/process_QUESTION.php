<?php
include('inc/connection.php');
extract($_POST);
$que=ucfirst($_POST['question']);
$QuestionID=$_POST['id'];
$category_id=$_POST['cat_id'];
//echo $category_id;

//die;



if(empty($category_id)){
	echo"can not be blank";
}
if(empty($que)){
	echo"can not be blank";
}
if(empty($QuestionID)){
	echo"can not be blank";
}

	else{

		$update_question="UPDATE questions SET question='$question',ans1='$ans1',ans2='$ans2',ans3='$ans3',ans4='$ans4',ans='$ans',category_id='$category_id' WHERE id='".$QuestionID."' ";
		$update_result=mysqli_query($conn,$update_question);
		if($update_result!=true){
			die('failed to insert');
		}
		else{
			header('location:Questions.php?status=updated');
			//echo"Updated Successfully";
		}



	}













?>
