<?php
session_start();
//script for sving screen shot
$data=$_REQUEST['base64data'];
$image=explode('base64,',$data);
$user=$_SESSION['fname'];
$category=$_SESSION['My_Category_name'];
$rand = rand(1,100000);
file_put_contents('ScreenShot/'.$user.$rand.$category.'.jpg',base64_decode($image[1]));
?>
