<?php
include('inc/connection.php');
$cat_id=$_GET['id'];
//echo $cat_id;
?>
<?php
$select_subcategory="SELECT * FROM subcategory WHERE cat_id='".$cat_id."'";
$result=mysqli_query($conn,$select_subcategory);
if(mysqli_num_rows($result)>0){

	//echo "Can not delete category directly";
	header("location:category.php?status=chksubcategory");

}
else{



$delete_id="DELETE FROM category WHERE id ='".$cat_id."'";
$res=mysqli_query($conn,$delete_id);
if($res!=true){
	die('unable to delete').mysqli_error();
}
else{
	header("location:category.php?status=delete");
}
}
?>