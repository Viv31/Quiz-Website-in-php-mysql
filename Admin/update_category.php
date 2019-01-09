<?php include('inc/header.php');?>
<?php include('inc/connection.php');
$cat_id=$_GET['id'];
//echo $cat_id;
?>
<style>
	.err{
		text-align: center;
   			height: 20px;
	}
    .mybtn a{
        text-decoration: none;
        color:white;
        
    }
    body{
background: #34495e;
  color: #ecf0f1;
  margin: 0;
  padding: 0;
}
</style>
 <script src="js/validation.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<div class="container">
                   
                        <h4>
                            Update Category
                        </h4>
                        <?php
                        $select_cat="SELECT * FROM category WHERE id ='".$cat_id."'";
                        $res=mysqli_query($conn,$select_cat);
                        if(mysqli_num_rows($res)>0)
                        {
                        	while($rs=mysqli_fetch_assoc($res)){
                        	?>

<form action="Process.php" method="POST" onsubmit="return catValidation();">
                        		<div class="err">
                        	<div id="Catchk" class="popup_error"></div>
                        </div>
                        	<div class="form-group">
                        		<label>Category Name:</label>
                        		<input type="text" name="category_name" class="form-control" id="category_name" value="<?php echo $rs['category_name']; ?>">


                        	</div>

				<div class="form-group">
				<input type="hidden" class="form-control"  name="id" value="<?php echo $rs['id'];?>">
				</div>

                        	<center><input type="submit" name="Update" value="Update" class="btn btn-primary">
                                &nbsp;<a class="btn btn-primary" onClick="javascript:history.go(-1);">Back</a></center>




                        </form>




                        	<?php
                        	}
                        }

                        ?>





</div>
                   





<?php include('inc/footer.php') ?>