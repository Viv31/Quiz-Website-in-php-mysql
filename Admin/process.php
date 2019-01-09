<?php
include('inc/connection.php');
$cat_id=$_POST['id'];
//echo $cat_id;
if(isset($_POST['Update'])){

$category_name=$_POST['category_name'];

if(empty($category_name)){
	echo "category name can not be blank ";
}
else{
$select_category="SELECT * FROM category WHERE category_name='".$category_name."'";
$result=mysqli_query($conn,$select_category);
if(mysqli_num_rows($result)>0){

	
	header("location:category.php?status=Chking");
}






else{


$update_category="UPDATE category SET category_name='".$category_name."' WHERE id='".$cat_id."'";
$res=mysqli_query($conn,$update_category);
if($res!=true){
	die('failed to update ').mysqli_error();
}
else{
	header("location:category.php?state=update");
}



}

}

}


?>
