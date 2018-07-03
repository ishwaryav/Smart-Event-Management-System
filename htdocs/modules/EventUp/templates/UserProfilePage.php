<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>EventUp-EventOrganizer Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
  
<body background="images/bg.jpg">

<?php
$uname = $_SESSION["userid"];
?>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="http://ec2-54-153-117-106.us-west-1.compute.amazonaws.com/phpMyAdmin/htdocs/modules/EventUp/index.php" class="w3-bar-item w3-button "><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="#" class="w3-bar-item w3-hide-small w3-button w3-right" title="My Account"><h3 class="w3-left-align"> <?php echo $uname ?><img src="images/EO_Image.png" class="w3-circle" style="height:25px;width:25px" alt="Avatar"></a>
    </div>
  </div>
  
 </div>
</div>

 <br> &nbsp;

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
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
         <p class="w3-center"><img src="images/EO_Image.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Event Organizer</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> San Jose, CA</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> May 1, 1988</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <form action="My_groups.php" method="post">
          <div>
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
          </form>

          <form action="My_Events.php" method="post">
          <div>
          <?php
          $_SESSION["userid"] = $uname;
          ?>
          <button type="submit" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
          </div>
          </form>

          <form action="My_Billing.php" method="post">
          <div>
          <?php
          $_SESSION["userid"] = $uname;
          ?>
          <button type="submit" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Billing</button>
          </div>
          </form>
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
      <div class="w3-card w3-round w3-white">
      <div class="w3-container w3-padding">
      <form action="Event_Creation.php" method="post">
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="images/events.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
          <?php
          $_SESSION['email'] = $uname;
          ?>
        <input type="submit" class="w3-button w3-theme"value="Create Events">
        <hr class="w3-clear">
      </div>
      </form>
      </div>
      </div>
      </div>
      </div>

      <form action="updateEvent.php" method="post">
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="images/editcalendar.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <!-- <form action="Event_Creation.php" method="post"> -->
        <input type="submit" class="w3-button w3-theme"value="Update Event">
        <hr class="w3-clear">
      </div>
      </form>

      <form action="deleteEvent.php" method="post">
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="images/delete.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <!-- <form action="Event_Creation.php" method="post"> -->
        <input type="submit" class="w3-button w3-theme"value="Delete Event">
        <hr class="w3-clear">
      </div>
      </form>

      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="images/graph.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <!-- <form action="Event_Creation.php" method="post"> -->
        <input type="text" class="w3-button w3-theme"value="Your Dashboard">
        <hr class="w3-clear">
      </div>

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
      // Load the Visualization API and the corechart package.
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        
        function drawChart() {
        var data = new google.visualization.arrayToDataTable([
          ['Month', 'Count'],
          <?php
            $uname = $_SESSION["userid"];
            $servername = "localhost";
            $username = "root";
            $password = "password";
            $conn = mysqli_connect($servername, $username, $password, "EventUp");
            $query = "SELECT MONTHNAME(Event_Date) as Month, count(Event_ID) as Count from Events where EO_Name = '$uname' and YEAR(Event_Date) = 2017 GROUP BY MONTHNAME(Event_Date)";
            $data=mysqli_query($conn, $query);
            foreach($data as $row)
            {
              //echo "data.addRow(['{$row['Month']}', {$row['Count']}]);";
              echo "['".$row['Month']."', ".$row['Count']."],";
            }
          ?>
          ]);
        var options = {'title':'Events Managed By You in the Current Year',
                       'width':350,
                       'height':300};
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
        }

        google.charts.setOnLoadCallback(drawChart1);
        function drawChart1() {
          var data = new google.visualization.arrayToDataTable([
          ['YEAR', 'Count'],
          <?php
           $query = "SELECT YEAR(Event_Date) as YEAR, count(Event_ID) as Count from Events where EO_Name = '$uname' GROUP BY YEAR(Event_Date);";
           $data=mysqli_query($conn, $query);
           foreach($data as $row)
            {
              //echo "data.addRow(['{$row['Month']}', {$row['Count']}]);";
              echo "['".$row['YEAR']."', ".$row['Count']."],";
            }
          ?>
          ]);
          var options = {'title':'Number of Events Managed by Year',
                       'width':350,
                       'height':300};
          var chart1 = new google.visualization.PieChart(document.getElementById('chart_div1'));
          chart1.draw(data, options);
        }

        google.charts.setOnLoadCallback(drawChart2);
        function drawChart2() {
          var data = new google.visualization.arrayToDataTable([
          ['Month', 'Count'],
          <?php
           $query = "SELECT MONTHNAME(Event_Date) as Month, count(Event_ID) as Count from Events where EO_Name = '$uname' and YEAR(Event_Date) = 2017 GROUP BY MONTHNAME(Event_Date)";
           $data=mysqli_query($conn, $query);
           foreach($data as $row)
            {
              //echo "data.addRow(['{$row['Month']}', {$row['Count']}]);";
              echo "['".$row['Month']."', ".$row['Count']."],";
            }
          ?>
          ]);
          var options = {'title':'Events Managed By You in 2016',
                       'width':700,
                       'height':300};
          var chart2 = new google.visualization.PieChart(document.getElementById('chart_div2'));
          chart2.draw(data, options);
        }
      </script>
      

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart4);
    function drawChart4() {
      var data = google.visualization.arrayToDataTable([
        ['ID', 'Registered_Users'],
        <?php 
                 $servername = "localhost";
                 $username = "root";
                 $password = "password";
                 try {
                          $conn = new PDO("mysql:host=$servername;dbname=EventUp", $username, $password);
                          // set the PDO error mode to exception
                          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                          // echo "Connected successfully"; 
                     }
                catch(PDOException $e)
                    {
                        echo "Connection failed: " . $e->getMessage();
                    }
                 $query = "SELECT event_id as ID, count(email) as Registered_Users FROM register_event where EO_name = '$uname' GROUP BY event_id";
                 $data = $conn->prepare($query);
                 $data->execute();
                 $data->setFetchMode(PDO::FETCH_ASSOC);
        foreach ($data as $row) { 
          echo "['".$row['ID']."', ".$row['Registered_Users']."],";
        } ?>
      ]);

      var options = {
        title: "Number of Students registered in each of my events",
        width: 700,
        height: 300,
        bar: {groupWidth: "30%"},
        legend: { position: "none" },
        hAxis: {
          title: 'Event IDs'
        },
        vAxis: {
          title: 'Number of Students'
        }
      };
      var chart4 = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart4.draw(data, options);
  }
  </script>
     <style>
    .p1,{
        color: red;
        font-size: 50px;
        text-align:left;
    }
    .div1{
      float:center;
      display:inline-block;
    }
    .div2{
      float:center;
      display:inline-block;
      vertical-align:top;
    }

    </style>
    
        <!-- <h3 class="p1">Events Dashboard</h3> -->
        <div class="w3-container div1" id="chart_div" style="width: 350px; height: 300px;"></div>
        <div class="w3-container div2" id="chart_div1" style="width: 300px; height: 300px;"></div>
        <div class="w3-container div2" id="chart_div2" style="width: 750px; height: 300px;"></div>
        <div class="w3-container div2" id="columnchart_values" style="width: 750px; height: 300px;"></div>
      
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p><strong>Upcoming Events:</p>
          <?php
                 $servername = "localhost";
                 $username = "root";
                 $password = "password";
                 $uname = $_SESSION["userid"];
                 try {
                          $conn = new PDO("mysql:host=$servername;dbname=EventUp", $username, $password);
                          // set the PDO error mode to exception
                          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     }
                 catch(PDOException $e)
                    {
                        echo "Connection failed: " . $e->getMessage();
                    }
                 $query = "SELECT Event_Name, Event_Date, TIME_FORMAT(Event_Time, '%h:%i:%s') as time  from Events where EO_Name = '$uname' and Event_Date >= CURDATE() LIMIT 1";
                 $data = $conn->prepare($query);
                 $data->execute();
                 $data->setFetchMode(PDO::FETCH_ASSOC);
                 foreach ($data as $row) {
                      echo "<p><strong>";
                      echo $row['Event_Name'];
                      echo "</p><p><em>";
                      echo $row['Event_Date'];
                      echo "</p><p><em>";
                      echo $row['time'];
                      echo "</p>";
                 }
          ?>
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

</body>
</html> 
