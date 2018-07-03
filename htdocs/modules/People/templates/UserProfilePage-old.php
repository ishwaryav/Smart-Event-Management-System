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
  
<body class="w3-theme-l5">

<?php
$uname = $_SESSION["userid"];
?>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Logo</a>
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account"><h3 class="w3-left-align"> <?php echo $uname ?><img src="EO_Image.png" class="w3-circle" style="height:25px;width:25px" alt="Avatar"></a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
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
         <p class="w3-center"><img src="EO_Image.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Ishwarya, Event Organizer</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> San Jose, CA</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> November 2017</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Some text..</p>
          </div>

          <form action="My_Events.php" method="post">
          <div>
          <?php
          $_SESSION["userid"] = $uname;
          ?>
          <button type="submit" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
          </div>
          </form>

           <!-- <button onclick="myFunction('Demo2')"  -->
          <!-- <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div> -->
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
          <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
             <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/fjords.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
         </div>
          </div>
        </div>      
      </div>
      <br>
      
      <!-- Interests --> 
      <!-- <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Interests</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">News</span>
            <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
            <span class="w3-tag w3-small w3-theme-d3">Labels</span>
            <span class="w3-tag w3-small w3-theme-d2">Games</span>
            <span class="w3-tag w3-small w3-theme-d1">Friends</span>
            <span class="w3-tag w3-small w3-theme">Games</span>
            <span class="w3-tag w3-small w3-theme-l1">Friends</span>
            <span class="w3-tag w3-small w3-theme-l2">Food</span>
            <span class="w3-tag w3-small w3-theme-l3">Design</span>
            <span class="w3-tag w3-small w3-theme-l4">Art</span>
            <span class="w3-tag w3-small w3-theme-l5">Photos</span>
          </p>
        </div>
      </div>
      <br> -->
      
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>People are looking at your profile. Find out who.</p>
      </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">What are you thinking???</h6>
              <p contenteditable="true" class="w3-border w3-padding">Status: Feeling Blue</p>
              <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>  Post</button> 
            </div>
          </div>
        </div>
      </div>
      
      <form action="Event_Creation.php" method="post">
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="images/events.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <!-- <span class="w3-right w3-opacity">1 min</span> -->
          <?php
          $_SESSION['email'] = $uname;
          ?>
        <input type="submit" class="w3-button w3-theme"value="Create Events">
        <hr class="w3-clear">
      </div>
      </form>

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


      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
      // Load the Visualization API and the corechart package.
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
      </script>
      <script>
        function drawChart() {
        var data = new google.visualization.arrayToDataTable([
          ['Month', 'Count'],
          <?php
            $uname = $_SESSION["userid"];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $conn = mysqli_connect($servername, $username, $password, "EventUp");
            $query = "SELECT MONTHNAME(Event_Date) as Month, count(Event_ID) as Count from Events where EO_Name = '$uname' GROUP BY MONTHNAME(Event_Date)";
            $data=mysqli_query($conn, $query);
            foreach($data as $row)
            {
              //echo "data.addRow(['{$row['Month']}', {$row['Count']}]);";
              echo "['".$row['Month']."', ".$row['Count']."],";
            }
          ?>
          ]);
        var options = {'title':'Events Managed By You in 2014',
                       'width':400,
                       'height':300};
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
        }

        google.charts.setOnLoadCallback(drawChart1);
        function drawChart1() {
          var data = new google.visualization.arrayToDataTable([
          ['Month', 'Count'],
          <?php
           $query = "SELECT MONTHNAME(Event_Date) as Month, count(Event_ID) as Count from Events where EO_Name = '$uname' GROUP BY MONTHNAME(Event_Date)";
           $data=mysqli_query($conn, $query);
           foreach($data as $row)
            {
              //echo "data.addRow(['{$row['Month']}', {$row['Count']}]);";
              echo "['".$row['Month']."', ".$row['Count']."],";
            }
          ?>
          ]);
          var options = {'title':'Events Managed By You in 2015',
                       'width':400,
                       'height':300};
          var chart1 = new google.visualization.PieChart(document.getElementById('chart_div1'));
          chart1.draw(data, options);
        }

        google.charts.setOnLoadCallback(drawChart2);
        function drawChart2() {
          var data = new google.visualization.arrayToDataTable([
          ['Month', 'Count'],
          <?php
           $query = "SELECT MONTHNAME(Event_Date) as Month, count(Event_ID) as Count from Events where EO_Name = '$uname' GROUP BY MONTHNAME(Event_Date)";
           $data=mysqli_query($conn, $query);
           foreach($data as $row)
            {
              //echo "data.addRow(['{$row['Month']}', {$row['Count']}]);";
              echo "['".$row['Month']."', ".$row['Count']."],";
            }
          ?>
          ]);
          var options = {'title':'Events Managed By You in 2016',
                       'width':400,
                       'height':300};
          var chart2 = new google.visualization.PieChart(document.getElementById('chart_div2'));
          chart2.draw(data, options);
        }

        google.charts.setOnLoadCallback(drawChart3);
        function drawChart2() {
          var data = new google.visualization.arrayToDataTable([
          ['Month', 'Count'],
          <?php
           $query = "SELECT MONTHNAME(Event_Date) as Month, count(Event_ID) as Count from Events where EO_Name = '$uname' GROUP BY MONTHNAME(Event_Date)";
           $data=mysqli_query($conn, $query);
           foreach($data as $row)
            {
              //echo "data.addRow(['{$row['Month']}', {$row['Count']}]);";
              echo "['".$row['Month']."', ".$row['Count']."],";
            }
          ?>
          ]);
          var options = {'title':'Events Managed By You in 2016',
                       'width':400,
                       'height':300};
          var chart2 = new google.visualization.Bar(document.getElementById('chart_div3'));
          chart2.draw(data, options);
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
        <div class="w3-container div2" id="chart_div2" style="width: 350px; height: 300px;"></div>
        <div class="w3-container div2" id="chart_div3" style="width: 300px; height: 300px;"></div>
      
      <!-- <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="events.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <input type="submit" class="w3-button w3-theme"value="Register">
        <hr class="w3-clear">
      </div> -->
      
      <!-- <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="/w3images/avatar5.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">16 min</span>
        <h4>Jane Doe</h4><br>
        <hr class="w3-clear">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
      </div>   -->

      <!-- <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="/w3images/avatar6.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">32 min</span>
        <h4>Angie Jane</h4><br>
        <hr class="w3-clear">
        <p>Have you seen this?</p>
        <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
      </div>  -->
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p><strong>Upcoming Events:</p>
          <?php
                 $servername = "localhost";
                 $username = "root";
                 $password = "";
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
          <!-- <p><strong>Holiday</strong></p>
          <p>Friday 15:00</p> -->
          <form action="<?php echo $row['Event_name'] . ".php"?>" method="post">
          <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
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

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <h5>Footer</h5>
</footer>

<footer class="w3-container w3-theme-d5">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>
 
<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html> 
