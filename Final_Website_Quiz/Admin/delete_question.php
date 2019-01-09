<?php
include('inc/connection.php');
$QuestionID=$_GET['id'];
//echo $QuestionID;
?>
<?php
$delete_question="DELETE FROM questions WHERE id='".$QuestionID."'";
$query_result=mysqli_query($conn,$delete_question);

if($query_result!=true){

	die('failed to delete question');
}
else{

	//echo"Deleted";
	header('location:Questions.php?status=deleteque');
}



?>