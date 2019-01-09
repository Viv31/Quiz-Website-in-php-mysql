<?php
session_start();
include('inc/connection.php');

if(isset($_POST['login'])){

$user=$_POST['username'];
$pwd=$_POST['password'];

$select_user="SELECT * FROM admin_login WHERE username='".$user."' and  password ='".$pwd."'";
$res=mysqli_query($conn,$select_user);
$row=mysqli_fetch_assoc($res);

$admin=$row['username'];

	if(mysqli_num_rows($res)>0){

		$_SESSION['username']=$admin;

		header('location:dashboard.php');
	}
	else
	{
		header("location:index.php?status=error");
		
	}


}

?>
