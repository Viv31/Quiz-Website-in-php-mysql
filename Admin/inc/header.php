<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
<script type="text/javascript">
$(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true,
        
      

    } );

        table.search($(this).val()).draw();
       
 
    new $.fn.dataTable.FixedHeader( table );
} );
</script>


<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
   background-color: #e5ebf2;
   width:100%;
}


.topnav {
  overflow: hidden;
  background-color: #09192A !important;

  
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  text-decoration: none;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
  text-decoration: none;
}

.active {
  background-color: #225081;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}


@media screen and (max-width:240px) {

body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    /* font-size: 14px; */
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
    width: 239px;
}

.topnav.responsive 
{
  position: relative;
 

}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
    

  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
    font-size: 14px;
  }

div.dataTables_wrapper div.dataTables_filter input {
    margin-left: 0.5em;
    display: inline-block;
    width: 138px !important;
}



}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
     <a href="dashboard.php" >QUIZ</a>
  <a href="dashboard.php" class="<?php echo basename($_SERVER['PHP_SELF'])=='dashboard.php'?'active':'';?>">Dashboard</a>
  <a href="category.php" class="<?php echo basename($_SERVER['PHP_SELF'])=='category.php'?'active':'';?>" >Category</a>
  <a href="Questions.php" class="<?php echo basename($_SERVER['PHP_SELF'])=='Questions.php'?'active':'';?>">Questions</a>
  <a href="result.php" class="<?php echo basename($_SERVER['PHP_SELF'])=='result.php'?'active':'';?>" >Result</a>
  <a href="logout.php">Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>




<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
<br>


