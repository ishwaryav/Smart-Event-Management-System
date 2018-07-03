<?php
session_start();
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'password');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'EventUp');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)

OR die('Could not connect to MySQL: ' .mysqli_connect_error());

$email= $_SESSION["userid"];
$query = "SELECT Event_ID, EO_Name, Event_Desc, Event_Venue, Event_Date, Event_Time, Event_Name FROM Events where Event_ID in(Select event_id from register_event where email='$email') and Event_Date >=CURDATE() limit 1";
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
<title>My Profile</title>
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
.chart12{
  padding : 20px;
}
</style>
<body class="w3-theme-l5" background="images/bg.jpg">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="http://ec2-54-153-117-106.us-west-1.compute.amazonaws.com/phpMyAdmin/htdocs/modules/EventUp/index.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home</a>
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
          <a href ="register.php" class="w3-button w3-block w3-white1 w3-left-align abc" name="register"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Register for events</a>
   
          <a href="events_display.php" class="w3-button w3-block w3-white1 w3-left-align" name="viewEvent" style="font:black"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> View Events</a>
        <a href ="http://ec2-54-153-117-106.us-west-1.compute.amazonaws.com:8000" class="w3-button w3-block w3-white1 w3-left-align" name="forum"><i class="fa fa-weixin w3-margin-right"></i> Private Mesaging</a>
        <a href ="http://ec2-52-53-248-20.us-west-1.compute.amazonaws.com:8000" class="w3-button w3-block w3-white1 w3-left-align" name="forum"><i class="fa fa-weixin w3-margin-right"></i> Forum/Chat</a>
         <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
           </div>
           <div class="w3-half">
           </div>
           <div class="w3-half">
           </div>
           <div class="w3-half">
           </div>
           <div class="w3-half">
           </div>
           <div class="w3-half">
           </div>
         </div>
          </div>
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
              <h3 ><strong>Dashboard</strong></h3>
             <div class="chart_div col-md-4 chart12" id="chart_div2" style="width:680px; height:400px;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="w3-col m2">
      <div class="w3-card w3-round w3-white1 w3-center" style="background-color:#9eb1bb">
        <div class="w3-container">
            <?php $row = mysqli_fetch_array($response) ?>
          <p><strong>Upcoming Event!!</strong></p>
          <p><strong>Event ID: </strong><?php echo $row['Event_ID']; ?></p>
          <p><strong>Event: </strong><?php echo $row['Event_Name']; ?></p>
          <p><?php echo $row['Event_Desc']; ?></p>
          <p><strong>Venue: </strong><?php echo $row['Event_Venue']; ?></p>
          <p><strong>On: </strong><?php echo $row['Event_Date'];?><strong> @ </strong><?php echo $row['Event_Time']; ?> </p>
        </div>
      </div>
      <br>
    </div>
  </div>
</div>
<br>


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
            $password = "password";
            $conn = mysqli_connect($servername, $username, $password, "EventUp");
            $query = "SELECT event_id as EVENT, count(*) as COUNT from register_event where email='$email' GROUP BY event_id";
            $data=mysqli_query($conn, $query);
            foreach($data as $row)
            {
              //echo "data.addRow(['{$row['Month']}', {$row['Count']}]);";
              echo "['".$row['EVENT']."', ".$row['COUNT']."],";
            }
          ?>
          ]);
        var options = {'title':'Events you are registered in:',
                       pieHole:0.4 };
        var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
        chart.draw(data, options);
        }
 </script>

</body>
</html> 
