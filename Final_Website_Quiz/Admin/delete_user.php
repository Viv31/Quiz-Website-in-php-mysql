<?php
include('inc/connection.php');
$userID=$_GET['id'];

//echo $userID;
//die;

$Delete_User="DELETE FROM register WHERE id='".$userID."'";
$Query_res=mysqli_query($conn,$Delete_User);
if($Query_res!=true){

	die('failed to delete user');
}
else{

	//echo"Deleted successfully";

	header('location:dashboard.php?status=delete');
}



?>