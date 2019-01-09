<?php
session_start();
ob_start();
if(!isset($_SESSION['email']))
{
  header("location:index.php");
}
if(isset($_POST['logout'])){
  
  header("location:index.php");
}
include('inc/connection.php');
error_reporting(0);
if (!isset($_SERVER['HTTP_REFERER'])){

  
 // echo "<script>alert('hii')</script>";
  header("location:index.php");
}
// Database credentials
$dbHost="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="new_quiz";
// Create connection and select db
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Get data from database
$result = $db->query("SELECT category_name,percentage,user_id FROM graph");
?>
  

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
  history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
  </script>
<style type="text/css">
  body{
  background: #34495e;
  
  /*margin: 0;
  padding: 0;*/
}
td{
  color: #ecf0f1;
}
a{
  color: #ecf0f1;
  text-align: center;
}
h4{
  color:white;
}
@media screen and (max-width: 1080px) {
    div#piechart {
        zoom:0.6;
        margin-left:16%;
        margin-right:16%;
    }
}
@media (min-width: 320px) and (max-width: 480px) {
  
  div#piechart {
        zoom:1;
        
        
        width:10px;
        height:auto;
    }
  
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
function getRandomColor() {
        var letters = '0123456789ABCDEF'.split('');
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }


// Load google charts
google.charts.load('current', {'packages':['corechart','bar']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['name', 'score'],
  
  <?php
      if($result->num_rows>0){
          while($row = $result->fetch_assoc()){
        

            echo "['".$row['category_name']."',".$row['percentage']."],";
          }
      }
      ?>

      
]);

  // Optional; add a title and set the width and height of the chart
  //var options = {'title':'Your Score', 'width':550, 'height':400,is3D: true, 

   //};
   
   var options = {
        title: "Your Score in %",
        colors:[getRandomColor()],
         vAxis: {maxValue: 10},
         //maxValue used for graph can not exceed more than 100%
        width: 700,
        height: 500,
        bar: {groupWidth: "10%"},
        legend: { position: "dot" },
      };

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.ColumnChart(document.getElementById('ColumnChart'));

  chart.draw(data, options);
}

</script>

</head>
<body>
<div class="container">
<center>
  <?php echo $row['user_id'];?>
<h4><?php echo $_SESSION['fname']." "; ?>Your Quiz Graph</h4>
<hr>

<div id="ColumnChart"></div>
<hr>

<a href="home.php" class="btn btn-primary btn-md" onclick="ScreenShot();">Home</a>
</center>
</body>
</div>
</html>

