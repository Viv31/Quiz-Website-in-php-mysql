<?php include('inc/header.php');?>
<?php include('inc/connection.php'); ?>
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

                    <div class="col-md-12">
                        <h4>
                            Add Question
                        </h4>
</div>

<form action="insert_question.php" method="POST" onsubmit="return QueValidation();">
                            <div class="err">
                            <div id="Subcatchk" class="popup_error"></div>
                        </div>
                        <div class="form-group">
                              <label>Select Category</label>
                              <select class="form-control" id="categoryid" name="categoryid">
                                <?php
                        $select_category="SELECT * FROM category";
                        $res=mysqli_query($conn,$select_category);
                        if(mysqli_num_rows($res)>0){

                        while ($rs=mysqli_fetch_assoc($res)) {
                            ?>
                            
                            <option value="<?php echo $rs['id']; ?>"><?php echo $rs['category_name']; ?></option>


                            <?php
    
}
}


?>
                                
                                
                              </select>
                            </div>

                            <div class="form-group">
                                <label>Question:</label>
                                <input type="text" name="question" id="question" class="form-control" placeholder="Insert question" autocomplete="off">
                                <div id="add_quechk" class="popup_error"></div>
                            </div>

                             <div class="form-group">
                                <label>First option:</label>
                                <input type="text" name="ans1" id="ans1" class="form-control" placeholder="Insert First option" autocomplete="off">
                                <div id="add_ans1chk" class="popup_error"></div>
                            </div>
                             <div class="form-group">
                                <label>Second option:</label>
                                <input type="text" name="ans2" id="ans2" class="form-control" placeholder="Insert Second option" autocomplete="off">
                                 <div id="add_ans2chk" class="popup_error"></div>
                            </div>
                             <div class="form-group">
                                <label>Third option:</label>
                                <input type="text" name="ans3" id="ans3" class="form-control" placeholder="Insert Third option" autocomplete="off">
                                <div id="add_ans3chk" class="popup_error"></div>
                            </div>
                             <div class="form-group">
                                <label>Fourth option:</label>
                                <input type="text" name="ans4" id="ans4" class="form-control" placeholder="Insert Fourth option" autocomplete="off">
                                <div id="add_ans4chk" class="popup_error"></div>
                            </div>
                             <div class="form-group">
                                <label>Right Answer:</label>
                                <input type="text" name="ans" id="ans" class="form-control" placeholder="Insert Right Answer" autocomplete="off">
                                <div id="add_anschk" class="popup_error"></div>
                            </div>


                            <center>
                                
                                <input type="submit" name="addque" value="Insert" class="btn btn-primary">
                                <a class="btn btn-primary" onClick="javascript:history.go(-1);">Back</a>
                            </center>
                        </form>
                        </div>

<?php include('inc/footer.php');?>