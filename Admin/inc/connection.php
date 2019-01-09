<?php
$host="localhost";
$user="root";
$pass="";
$db="new_quiz";
$conn=mysqli_connect($host,$user,$pass,$db);
if($conn!=true){
	die("connection failed");
}
else{
	//echo"connected";
}


?>