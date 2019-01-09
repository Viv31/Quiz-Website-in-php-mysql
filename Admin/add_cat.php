<?php

include('inc/connection.php');

if(isset($_POST['addcategory'])){
	$category_name=ucfirst($_POST['category_name']);

	if(empty($category_name))
	{
		echo"category can not be blank";
	}
else{
$select_category="SELECT * FROM category WHERE category_name='".$category_name."'";
$result=mysqli_query($conn,$select_category);
if(mysqli_num_rows($result)>0){

	header("location:category.php?status=chkcategory");
	
}
else{

	$insert_cat="INSERT INTO category(category_name) VALUES('$category_name')";
	$res=mysqli_query($conn,$insert_cat);
	if($res!=true){
		die('failed to insert').mysqli_error();
	}
	else{
	
	header("location:category.php?status=success");
	}

}


}
}

?>
