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

<?php
                 $uname = $_SESSION["userid"];
                 $servername = "localhost";
                 $username = "root";
                 $password = "password";
                 try {
                          $conn = new PDO("mysql:host=$servername;dbname=EventUp", $username, $password);
                          // set the PDO error mode to exception
                          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
            $c = $row['Registered_Users'];
            $i = $row['ID'];
          if($c > 5)
          {
            $query2 = "UPDATE Billing SET Cost = '$c' where Event_ID = '$i'";
            $data = $conn->prepare($query2);
            $data->execute();
          }
        }
?>
  
<body class="w3-theme-l5" background="images/bg.jpg">

<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="http://ec2-54-153-117-106.us-west-1.compute.amazonaws.com/phpMyAdmin/htdocs/modules/EventUp/templates/UserProfilePage.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account"><h3 class="w3-left-align"> <?php echo $uname ?><img src="images/EO_Image.png" class="w3-circle" style="height:25px;width:25px" alt="Avatar"></a>
    </div>
  </div>
  
 <br> &nbsp;
 <br> &nbsp;

 <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="images/graph.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <input type="text" class="w3-button w3-theme"value="Your Billing Dashboard">
        <hr class="w3-clear">
 </div> 

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Event_ID', 'Cost'],
        <?php 
                 $servername = "localhost";
                 $username = "root";
                 $password = "password";
                 $conn = new PDO("mysql:host=$servername;dbname=EventUp", $username, $password);
                 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                 $query = "SELECT Event_ID, Cost FROM Billing where EO_name = '$uname' GROUP BY Event_ID";
                 $data = $conn->prepare($query);
                 $data->execute();
                 $data->setFetchMode(PDO::FETCH_ASSOC);
        foreach ($data as $row) { 
          echo "['".$row['Event_ID']."', ".$row['Cost']."],";
        } ?>
      ]);

      var options = {
        title: "Cost per Event",
        width: 1500,
        height: 600,
        bar: {groupWidth: "30%"},
        legend: { position: "none" },
        hAxis: {
          title: 'Event IDs'
        },
        vAxis: {
          title: 'Cost in $'
        }
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(data, options);
  }
  </script>

<div class="w3-container w3-card w3-white w3-round w3-margin" id="columnchart_values" style="width: 2500; height: 600px;"></div>
</body>
</html>