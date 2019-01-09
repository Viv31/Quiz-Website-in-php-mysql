<?php include('inc/header.php');?>
 <script src="js/validation.js"></script>
<style>
	.err{
		text-align: center;
   			height: 20px;
	}
    body{
background: #34495e;
  color: #ecf0f1;
  margin: 0;
  padding: 0;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<div class="container">


                        <h4>
                            Add Category
                        </h4>
                        <form action="add_cat.php" method="POST" onsubmit="return catValidation();">
                        	<div class="err">
                        	<div id="Catchk" class="popup_error"></div>

                        </div>

                        	<div class="form-group">
                        		<label>Category Name:</label>
                        		<input type="text" name="category_name" id="category_name" class="form-control" placeholder="Insert Category" autocomplete="off">
							</div>

                        	<center><input type="submit" name="addcategory" value="Insert" class="btn btn-primary">
                                <a class="btn btn-primary" onClick="javascript:history.go(-1);">Back</a>
                            </center>



                        </form>


</div>

                   
<?php include('inc/footer.php');?>