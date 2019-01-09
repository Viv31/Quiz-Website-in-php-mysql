<?php
session_start(); 
include('inc/connection.php');

if(!isset($_SESSION['email']))
{
  header("location:index.php");
}
if(isset($_POST['logout'])){
  
  header("location:index.php");
}
?>

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
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quiz Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">QuizZone</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
       
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

  
