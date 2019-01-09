<?php
include('inc/connection.php');
include('inc/header.php');

$QuestionID=$_GET['id'];
//echo $QuestionID;
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="js/validation.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
h4{

    text-align: center;
}
</style>
<div class="container">
                        <h4>
                            Update Question
                        </h4>
                        <hr>
                        <?php
                        $select_cat="SELECT * FROM questions WHERE id ='".$QuestionID."'";
                        $res=mysqli_query($conn,$select_cat);
                        if(mysqli_num_rows($res)>0)
                        {
                        	while($rs=mysqli_fetch_assoc($res)){

                        	?>
                            <?php  $categoryID=$rs['category_id']; ?>
                         <form action="process_QUESTION.php" method="POST" onsubmit="return QueValidation();">
                        		<div class="err">
                            <div id="Subcatchk" class="popup_error"></div>
                        </div>
                        

<div class="form-group">
                              <label>Category</label>
<select class="form-control" id="cat_id" name="cat_id">
                                <?php

$select_category="SELECT * FROM category WHERE id='".$rs['category_id']."'";
$result=mysqli_query($conn,$select_category);
while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $catid=$rs['cat_id'];
    $name=$row['category_name'];
    


    
    ?>
<option value="<?php echo $id ?>" 
    <?php
        if($id==$catid)
            { 
                echo 'selected';
            }?>>
    <?php
        
            echo $name;
        


     ?>
    </option>
    <?php
}

?>
</select>
                            </div>
                <div class="form-group">
                        		<label>Question:</label>
                        		<input type="text" name="question" class="form-control" id="question" value="<?php echo $rs['question']; ?>">
                                <div id="add_quechk" class="popup_error"></div>

                        	</div>

						<div class="form-group">
                        		<label>First Answer:</label>
                        		<input type="text" name="ans1" class="form-control" id="ans1" value="<?php echo $rs['ans1']; ?>">
                                 <div id="add_ans1chk" class="popup_error"></div>

                        	</div>

                        	<div class="form-group">
                        		<label>Second Answer:</label>
                        		<input type="text" name="ans2" class="form-control" id="ans2" value="<?php echo $rs['ans2']; ?>">
                                <div id="add_ans2chk" class="popup_error"></div>

                        	</div>

                        	<div class="form-group">
                        		<label>Third Answer:</label>
                        		<input type="text" name="ans3" class="form-control" id="ans3" value="<?php echo $rs['ans3']; ?>">
                                <div id="add_ans3chk" class="popup_error"></div>

                        	</div>

							<div class="form-group">
                        		<label>Fourth Answer:</label>
                        		<input type="text" name="ans4" class="form-control" id="ans4" value="<?php echo $rs['ans4']; ?>">
                                <div id="add_ans4chk" class="popup_error"></div>

                        	</div>

							<div class="form-group">
                        		<label>Right Answer:</label>
                        		<input type="text" name="ans" class="form-control" id="ans" value="<?php echo $rs['ans']; ?>">
                                <div id="add_anschk" class="popup_error"></div>

                        	</div>





<!--
//BELOW CODE IS STOREING QUESTION ID IN HIDDEN FIELD//

-->
			<div class="form-group">
				<input type="hidden" class="form-control"  name="id" value="<?php echo $rs['id'];?>">
				</div>

            



                        	<center><input type="submit" name="Update" value="Update" class="btn btn-primary">
<a class="btn btn-primary" onClick="javascript:history.go(-1);">Back</a>
                            </center>
</form>
<?php
                        	}
                        }

                        ?>
