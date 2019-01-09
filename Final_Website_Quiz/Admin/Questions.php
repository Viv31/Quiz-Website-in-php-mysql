<?php include('inc/header.php'); ?>
<?php include('inc/connection.php'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    body{
background: #34495e;
  color: #ecf0f1;
  margin: 0;
  padding: 0;
} 
    
  </style>
<div class="container">
  <a href="add_Questions.php"><button class="btn-primary pull-right">Add Question</button></a>
  <br><br>

<div class="modal fade" id="messages" role="dialog">
    <div class="modal-dialog">
    
      
      <div class="modal-content">
        
        <div class="modal-body">
          <p id ="msg" class="text-primary text-center"></p>
        </div>
        
      </div>
      
    </div>
  </div>

<?php 
                        if(isset($_GET['status']) AND $_GET['status']=="Inserted"){
                              /*
                            It will message you category added successfully.
                         */
                          $msg="Question Added Successfully!!!";
                        }
                        

                        elseif(isset($_GET['status']) AND $_GET['status']=="deleteque")
                          /*
                            It will delete subcategory 
                         */
                        {
                          $msg="Question Deleted Successfully!!!";
                        }

                        elseif(isset($_GET['status']) AND $_GET['status']=="chkavailque")
                          /*
                            checking availability of Subcategory on inserting  if it is already inserted so it will message you subcategory already exist otherwise it will insert 
                         */
                        {
                          $msg="Question Already Exist!!!";
                        }

                        elseif(isset($_GET['status']) AND $_GET['status']=="updated")
                          
                        {
                          $msg="Question Updated Successfully!!!";
                        }

                        

                          ?>
                          <script>
                    $( document ).ready(function() {
                      $('#msg').html("<?php echo $msg; ?>");
                        $('#messages').modal('show') 
                        setTimeout("$('#messages').modal('hide'); ", 3000); 

                    });
                    </script>

  
<table id="example" class="table table-bordered nowrap" style="width:100%">
        <thead>
                                        <tr>
                                            <th>Sno<?php $sno=0; ?></th>
                                            <th>Question</th>
                                            <th>Answer1</th>
                                            <th>Answer2</th>
                                            <th>Answer3</th>
                                            <th>Answer4</th>
                                            <th>Right Answer</th>
                                            <th>Category</th>
                                            <th>Action</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

    <?php
      $select_cat="SELECT * FROM questions";
      $res=mysqli_query($conn,$select_cat);


      if(mysqli_num_rows($res)>0){


        while($rs=mysqli_fetch_assoc($res)){
          ?>

                    <tr>
                                            <td><?php echo ++$sno;?></td>
                                            <td><?php echo $rs['question']; ?></td>
                                             <td><?php echo $rs['ans1']; ?></td>
                                              <td><?php echo $rs['ans2']; ?></td>
                                               <td><?php echo $rs['ans3']; ?></td>
                                                <td><?php echo $rs['ans4']; ?></td>
                                                 <td><?php echo $rs['ans']; ?></td>


                                            <td>
 <?php 
$sql="SELECT * FROM category WHERE id='".$rs['category_id']."'";
$res1=mysqli_query($conn,$sql);
if(mysqli_num_rows($res1)>0){
  if($rs1=mysqli_fetch_assoc($res1))
    echo $rs1['category_name'];
}

 ?>

                                             </td>
                             <?php $QuestionID=$rs['id'];?>
                 <td><?php echo "<a href='update_question.php?id=$QuestionID'><button class='btn btn-primary btn-xs'>Update</button></a>"?>
                </td>
<td>
                     <?php echo "<a href='delete_question.php?id=$QuestionID'><button class='btn btn-danger btn-xs' onclick=' return del();'>Delete</button></a>"?></td>
                                        
                                        </tr>
            <?php


        }
      }
?>    
                                    </tbody>
        <tfoot>
            <tr>
               <th>Sno<?php $sno=0; ?></th>
                                            <th>Question</th>
                                            <th>Answer1</th>
                                            <th>Answer2</th>
                                            <th>Answer3</th>
                                            <th>Answer4</th>
                                            <th>Right Answer</th>
                                            <th>Category</th>
                                            <th>Action</th>
                                            <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>
<script>
  
  function del(){
   var y=confirm("Do you Really want to delete this!!!");
         if(y){
         return true;
       }
           else{
              return false;
           }
              
    }

</script>
<?php include('inc/footer.php'); ?>