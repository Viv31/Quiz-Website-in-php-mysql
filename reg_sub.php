<?php
include('inc/connection.php');

if(isset($_POST['submit']))

{
	extract($_POST);

//echo $folder;
$imageFileType = strtolower(pathinfo($_FILES["upload_img"]["name"],PATHINFO_EXTENSION));
$fname=date('Ymd').time();
$filename=$fname.".".$imageFileType;

$tempname=$_FILES['upload_img']['tmp_name'];
$folder="upload/".$filename;
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    //echo "<p style='color:red'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
	
	
}
else{

move_uploaded_file($tempname,$folder);








	$firstname= ucfirst($_POST['fname']);
	if (!preg_match("/^[a-zA-Z ]*$/",$firstname))
	 {
  $nameErr = "Only letters and white space allowed"; 
  echo $nameErr;
  echo "<br>";
}

	$lastname=ucfirst($_POST['lname']);
	if (!preg_match("/^[a-zA-Z ]*$/",$lastname))
	 {
  $nameErr = "Only letters and white space allowed"; 
  echo $nameErr;
}

	$email= strtolower($_POST['email']);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
  echo $emailErr;
}

	$password=$_POST['pass'];
if(empty($password)){

	die('password can not be empty');
}

	$cpassword=$_POST['cpass'];

	if(empty($cpassword)){

		die('can not be empty');
	}

	else{
echo  $select_query="SELECT email FROM register WHERE email='".$email."'";
	$res1=mysqli_query($conn,$select_query);
	if(mysqli_num_rows($res1)>0)
	{
		echo "email is already exixst";
		header('location:register.php?status=emailexist');
		
	}
	else{

echo $insert="INSERT INTO register(fname,lname,email,pass,cpass,upload_img) VALUES('$firstname','$lastname','$email','$password','$cpassword','$folder')";

$res=mysqli_query($conn,$insert);

if($res!=true){
	die('failed to insert ');
}
else{

	header('location:index.php?status=success');
}

	}



	}





}

}
?>