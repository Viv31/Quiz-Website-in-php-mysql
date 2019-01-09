<?php include('inc/header.php'); ?>
<?php include('inc/connection.php'); ?>
<script src="js/validation.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="js/validation.js"></script>
 <style type="text/css">
   body{
background: #34495e;
  color: #ecf0f1;
  margin: 0;
  padding: 0;
}

 </style>

<div class="container">
  <h4>Inserted Category</h4>
  <hr>
  <div >
     <a href="add_category.php"><button class="btn-primary  pull-right but">Add Category</button></a>

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
                        if(isset($_GET['status']) AND $_GET['status']=="success")
                        {
                          $message="Category Added Successfully!!!";
                             
                        }
                        elseif(isset($_GET['state']) AND $_GET['state']=="update")
                        {
                          $message="Category Updated Successfully!!!!";

                        }
                        elseif (isset($_GET['status']) AND $_GET['status']=="delete") 
                        {
                          $message="Category Deleted Successfully!!!!";
                        }
                        elseif (isset($_GET['status']) AND $_GET['status']=="chkcategory") 
                        {
                          /*
                            checking availability of category on inserting 
                         */
                          $message="Category Already Exist!!!";
                        }
                        elseif (isset($_GET['status']) AND $_GET['status']=="Chking") 
                        {
                          /*
                            checking availability of category on Updating 
                         */
                         $message="Category Already Exist!!!";
                        }
                        elseif (isset($_GET['status']) AND $_GET['status']=="chksubcategory")
                         {
                         /*
                          checking category that you want to delete has sub category or not
                         */

                          $message ="Delete Subcategory first before deleting category!!!";
                         
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
                <th>Category</th>
                <th> Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

          <?php
        $select_cat="SELECT * FROM category";
        $res=mysqli_query($conn,$select_cat);
        if(mysqli_num_rows($res)>0){


            while($rs=mysqli_fetch_assoc($res)){
                ?>

                                        <tr>
                                            <td><?php echo ++$sno;?></td>
                                            <td><?php echo $rs['category_name']; ?></td>
                             <?php $cat_id=$rs['id'];?>
                 <td><?php echo "<a href='update_category.php?id=$cat_id'><button class='btn btn-primary btn-xs'>Update</button></a>"?>
               </td>
<td>
                     <?php echo "<a href='delete_category.php?id=$cat_id'><button class='btn btn-danger btn-xs' onclick=' return del();'>Delete</button></a>"?></td>
                                        
                                        </tr>



                <?php


            }
        }
?>       
            
     </tbody>
        <tfoot>
            <tr>
                <th>Sno<?php $sno=0; ?></th>
                <th>Category</th>
                <th>Action</th>
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