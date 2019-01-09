<?php
include("inc/connection.php");
if(isset($_POST['email']))
{
 $emailId=$_POST['email'];

 $checkdata=" SELECT email FROM register WHERE email like '%$emailId%' ";

 $query=mysqli_query($conn,$checkdata);

 if(mysqli_num_rows($query)>0)
 {
 	echo"<p id='mail'>Email exist</p>";
 	?>
 	
<script type="text/javascript">
//	this code is used for making email exist error for particular time like 3000 ms 
$('#mail').css('color', '#CC0000');
//adding css on id of red color
$('#mail').html('Email is already exist.');
//adding our message to id 
$('#mail').setTimeout("$('#mail').fadeOut(); ", 100000);
//setting time of showing our message

</script>
 
  <?php
 }
 else
 {
 	?>
  <!--<p id="mail"></p>-->
<script type="text/javascript">
//	this code is used for making email exist error for particular time like 3000 ms 
//$('#mail').css('color', 'rgb(29, 138, 138)');
//$('#mail').html('fine you can use this');

//$('#mail').setTimeout("$('#mail').fadeOut(); ", 4000);
//return false;
</script>
  <?php
 }
 //exit();
}
?>

<?php
/*include("inc/connection.php");
if(isset($_POST['cpass']))
{
 $PassId=$_POST['cpass'];

 $checkdata=" SELECT pass FROM register WHERE pass like '%$PassId%' ";

 $query=mysqli_query($conn,$checkdata);

 if(mysqli_num_rows($query)>0)
 {
  echo "<p style='color:red;'>password not match</p";
 }
 else
 {
  echo "<p style='color:green'>password  match</p>";
 }
 exit();
}*/
?>
<script type="text/javascript">
	setTimeout("$('#mail').fadeOut(); ", 3000);
</script>
