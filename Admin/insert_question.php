<?php
include('inc/connection.php');
$question=addslashes($_POST['question']);
$ans1= $_POST['ans1'];
$ans2= $_POST['ans2'];
$ans3= $_POST['ans3'];
$ans4= $_POST['ans4'];
$ans=  $_POST['ans'];

//extract($_POST);
$que=ucfirst($_POST['question']);
$categoryid=$_POST['categoryid'];
//echo $categoryid;
/*
this is our category id like php(1), html(2) css js(3) and bootstrap(4) 

*/
if(empty($categoryid)){
	echo"can not be blank";
}
else{

 $select_que="SELECT * FROM questions WHERE question='".$que."'";
$quesres=mysqli_query($conn,$select_que);
if(mysqli_num_rows($quesres)>0){

	header('location:Questions.php?status=chkavailque');
}
else{
 echo $insert_question="INSERT INTO questions(question,ans1,ans2,ans3,ans4,ans,category_id) VALUES('$question','$ans1','$ans2','$ans3','$ans4','$ans','$categoryid')";
$result=mysqli_query($conn,$insert_question);

if($result!=true)
{

	die('failed to insert');

}
else{
	//echo"INSERTED";
	header('location:Questions.php?status=Inserted');
}


}



}
?>