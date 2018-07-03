<?php
session_start();
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'EventUp');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)

OR die('Could not connect to MySQL: ' .mysqli_connect_error());

//$email=filter_input(INPUT_POST,"email");
$email= $_SESSION["userid"];


$query = "SELECT Event_ID, Event_Name, EO_Name, Event_Desc, Event_Venue, Event_Date, Event_Time FROM Events  where Approval='N' limit 1";

$response = @mysqli_query($dbc, $query);
if($response){


echo '</table>';

} else {

echo "Couldn't issue database query<br />";

echo mysqli_error($dbc);

}

// Close connection to the database
mysqli_close($dbc);

?>﻿
<!DOCTYPE html>
<html>
<title>Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="css/stylepage.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
.w3-white1{
    background-color:#9eb1bb;
    color:black;
}
.w3-white1{
  background-color:#879fab;
}
.chart_div{
    margin-top: 25px;
    /*margin-left: 140px;*/
    /*padding:15px;*/
}
</style>
<body class="w3-theme-l5" background="images/bg.jpg">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="/htdocs/modules/People/index.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home</a>
  
  <p class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account"><img src="images/avatar.png" class="w3-circle" style="height:25px;width:25px" alt="Avatar">Welcome <?php echo $email ?> !!</p>
 </div>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="images/avatar.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white1">
        <a href="events_display_1.php" class="w3-button w3-block w3-white1 w3-left-align" name="viewEvent" style="font:black"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> View Events</a>
        <a href ="approve_events.php" class="w3-button w3-block w3-white1 w3-left-align abc" name="register"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Approve Events</a>
        <a href ="vis/node.php" class="w3-button w3-block w3-white1 w3-left-align abc" name="register"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Smart Node</a>
        </div>      
      </div>
      <br>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white1">
            <div class="w3-container w3-padding">
              <h3 > <strong>Admin's Dashboard</strong></h3>
              <div class="chart_div col-md-4" id="chart_div" style="width:320px; height:250px;"></div>
              <div class="chart_div col-md-4" id="chart_div1" style="width:320px; height:250px;"></div>
              <div class="chart_div col-md-4" id="chart_div2" style="width:320px; height:250px;"></div>
              <div class="chart_div col-md-4" id="chart_div3" style="width:320px; height:250px;"></div>
              <!--<div class="w3-container div1" id="chart_div" style="width: 350px; height: 300px;"></div>-->
            </div>
          </div>
        </div>
      </div>
      
      
      
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card w3-round w3-white1 w3-center" style="background-color:#9eb1bb">
        <div class="w3-container">
            <?php $row = mysqli_fetch_array($response) ?>
          <p><strong>Events Pending Approval</strong></p>
          <!--<img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">-->
          <p><strong>Event ID: </strong><?php echo $row['Event_ID']; ?></p>
          <p><strong>Event: </strong><?php echo $row['Event_Name']; ?></p>
          <p><?php echo $row['Event_Desc']; ?></p>
          <p><strong>Venue: </strong><?php echo $row['Event_Venue']; ?></p>
          
          
          <p><a href="events_display_1.php" id ="myButton" class="w3-button w3-block w3-theme-l4">View More Info</a></p>
        </div>
      </div>
      <br>
      
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
      // Load the Visualization API and the corechart package.
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
         
        function drawChart() {
        var data = new google.visualization.arrayToDataTable([
          ['Month', 'Count'],
          <?php
            //$uname = $_SESSION["userid"];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $conn = mysqli_connect($servername, $username, $password, "EventUp");
            $query = "SELECT MONTHNAME(Event_Date) as Month, count(Event_ID) as Count from Events GROUP BY MONTHNAME(Event_Date)";
            $data=mysqli_query($conn, $query);
            foreach($data as $row)
            {
              //echo "data.addRow(['{$row['Month']}', {$row['Count']}]);";
              echo "['".$row['Month']."', ".$row['Count']."],";
            }
          ?>
          ]);
        var options = {'title':'EVENTS CREATED'
                       };
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
        }
        

        </script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
         
        function drawChart() {
        var data = new google.visualization.arrayToDataTable([
          ['EVENT', 'COUNT'],
          <?php
            //$uname = $_SESSION["userid"];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $conn = mysqli_connect($servername, $username, $password, "EventUp");
            $query = "SELECT event_id as EVENTID, count(*) as COUNT from register_event GROUP BY event_id";
            $data=mysqli_query($conn, $query);
            foreach($data as $row)
            {
              //echo "data.addRow(['{$row['Month']}', {$row['Count']}]);";
              echo "['".$row['EVENTID']."', ".$row['COUNT']."],";
            }
          ?>
          ]);
        var options = {'title':'NUMBER OF USERS REGISTERED PER EVENT',

                       is3D:true };
        var chart = new google.visualization.PieChart(document.getElementById('chart_div1'));
        chart.draw(data, options);
        }
 </script>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
         
        function drawChart() {
        var data = new google.visualization.arrayToDataTable([
          ['EVENT', 'COUNT'],
          <?php
            //$uname = $_SESSION["userid"];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $conn = mysqli_connect($servername, $username, $password, "EventUp");
            $query = "SELECT identifier as IDENTIFIER, count(*) as COUNT from login GROUP BY identifier";
            $data=mysqli_query($conn, $query);
            foreach($data as $row)
            {
              //echo "data.addRow(['{$row['Month']}', {$row['Count']}]);";
              echo "['".$row['IDENTIFIER']."', ".$row['COUNT']."],";
            }
          ?>
          ]);
        var options = {'title':'USERS REGISTERED',
                       pieHole:0.4 };
        var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
        chart.draw(data, options);
        }
 </script>

 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
         
        function drawChart() {
        var data = new google.visualization.arrayToDataTable([
           ['EVENTS', 'COUNT'],
          <?php
            //$uname = $_SESSION["userid"];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $conn = mysqli_connect($servername, $username, $password, "EventUp");
            $query = "SELECT Event_ID as EVENTS,count(*) as COUNT from Events where Approval='N' GROUP BY Event_ID";
            $data=mysqli_query($conn, $query);
            foreach($data as $row)
            {
              //echo "data.addRow(['{$row['Month']}', {$row['Count']}]);";
             echo "['".$row['EVENTS']."', ".$row['COUNT']."],";
            }
          ?>
          ]);
        var options = {'title':'EVENTS REQUIRING APPROVAL',
                       pieHole:0.4 };
        var chart = new google.visualization.PieChart(document.getElementById('chart_div3'));
        chart.draw(data, options);
        }
 </script>
</body>
</html> 
