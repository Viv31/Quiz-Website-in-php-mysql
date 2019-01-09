<?php
session_start();
include('inc/connection.php');
if(isset($_POST['login'])){
	//extract($_POST);

	 $email=$_POST['email'];
	  $pass=$_POST['pass'];



	 $select_query="SELECT * FROM register WHERE email='$email' and pass='$pass'";
	$res=mysqli_query($conn,$select_query);
	$row=mysqli_fetch_array($res);
	echo $username=$row['fname'];
	$ID=$row['id'];
	$img=$row['upload_img'];
	//Streing image on session
	//echo $img;
	

	if(mysqli_num_rows($res)>0){
		$_SESSION['email']=$email;
		$_SESSION['fname']=$username;
		$_SESSION['id']=$ID;
	 	$_SESSION['upload_img']=$img;

		
		header('location:home.php');
	}


	
	else{

			header('location:index.php?status=failed');

	}

}
?>

