<?php include('inc/header.php'); ?>
<?php include('inc/connection.php'); ?>
<script src="js/validation.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="js/validation.js"></script>
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
  <div >
    <h1>User Result</h1>
    <hr>

    <br><br>
    <div class="modal fade" id="Success" role="dialog">
    <div class="modal-dialog">
    
     
      <div class="modal-content">
        
        <div class="modal-body">
          <p id="msg"  class="text-primary text-center"></p>
        </div>
        
      </div>
      
    </div>
  </div>
                <?php 
                        if(isset($_GET['status']) AND $_GET['status']=="delete")
                        {
                          $message="User Deleted Successfully!!!";
                             
                        }
                        

                          ?>
<script>
$( document ).ready(function() {
    $("#msg").html("<?php echo $message; ?>");
    $('#Success').modal('show'); 
    setTimeout("$('#Success').modal('hide'); ", 4000); 

});
</script>


<table id="example" class="table  table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Sno<?php $sno=0; ?></th>
                <th> Name</th>
                 <th>Category</th>
                 <th>Total Questions</th>
                 <th>Right Answers</th>
                   <th>Wrong Answers</th>
                      <th>Not Attempt</th>
                     <th>Percentage</th> 
                  <th>Date</th>
               
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

          <?php
        $select_user="SELECT * FROM result";
        $res=mysqli_query($conn,$select_user);
        if(mysqli_num_rows($res)>0){


            while($rs=mysqli_fetch_assoc($res)){
                ?>

                                        <tr>
                                            <td><?php echo ++$sno;?></td>
                                            <td><?php echo $rs['name']; ?></td>
                                              <td><?php echo $rs['category']; ?></td>
                                                <td><?php echo $rs['total_questions']; ?></td>
                                                 <td><?php echo $rs['right_ans']; ?></td>
                                                  <td><?php echo $rs['wrong_ans']; ?></td>
                                                   <td><?php echo $rs['not_attempt']; ?></td>
                                                    <td><?php echo $rs['percentage']; ?></td>
                                                     <td><?php echo $rs['date']; ?></td>
                             <?php $userID=$rs['id'];?>
                
<td>
                     <?php echo "<a href='delete_user.php?id=$userID'><button class='btn btn-danger btn-xs' onclick=' return del();'>Delete</button></a>"?></td>
                                        
                                        </tr>



                <?php


            }
        }
?>       
            
     </tbody>
        <tfoot>
            <tr>
                <th>Sno<?php $sno=0; ?></th>
              <th> Name</th>
                 <th>Category</th>
                 <th>Total Questions</th>
                 <th>Right Answers</th>
                   <th>Wrong Answers</th>
                      <th>Not Attempt</th>
                     <th>Percentage</th> 
                  <th>Date</th>
               
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>
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