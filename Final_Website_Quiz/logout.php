<?php
session_start();
include('inc/connection.php');

//this hook is used for deleting users particular data for a session so they can give test again ...
$delete="DELETE FROM answerd_category WHERE userID='".$_SESSION['id']."'";
$res=mysqli_query($conn,$delete);
if($res!=true){
	die('failed');
}
else{
	//session_unset();
//header("location:index.php");

}
$delete="DELETE FROM graph WHERE user_id='".$_SESSION['id']."'";
$res=mysqli_query($conn,$delete);
if($res!=true){
	die('failed');
}
else{
	session_destroy();
header("location:index.php");

}
?>
