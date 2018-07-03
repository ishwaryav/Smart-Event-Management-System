<?php 
session_start();
// Get a connection for the database
// require_once('connect.php');
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'password');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'EventUp');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)

OR die('Could not connect to MySQL: ' .mysqli_connect_error());

// Create a query for the database
$query = "SELECT Event_ID, EO_Name, Event_Desc, Event_Venue, Event_Date, Event_Time,EO_Contact FROM Events where Approval='N'";
$email= $_SESSION["userid"];
$response = @mysqli_query($dbc, $query);
if($response){


echo '</table>';

} else {

echo "Couldn't issue database query<br />";

echo mysqli_error($dbc);

}

// Close connection to the database
mysqli_close($dbc);

?>
<!DOCTYPE html>
<html>
<title>Approve Events</title>
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

<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
.reg1{
padding: 25px;
font-size: 20px;
font-weight: 500;
color: #9eb1bb;
}
</style>
<body class="w3-theme-l5" background="images/bg.jpg">
<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="http://ec2-54-153-117-106.us-west-1.compute.amazonaws.com/phpMyAdmin/htdocs/modules/EventUp/templates/UserProfile_Admin.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home</a>
  
  <p class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account"><img src="images/avatar.png" class="w3-circle" style="height:25px;width:25px" alt="Avatar">Welcome <?php echo $email ?> !!</p>
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
         <p class="w3-center"><img src="images/avatar.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <a href="events_display_1.php" class="w3-button w3-block w3-white1 w3-left-align" name="viewEvent" style="font:black"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> View Events</a>
          <a href ="approve_events.php" class="w3-button w3-block w3-white1 w3-left-align abc" name="register"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Approve Events</a>
          <a href ="vis/node.php" class="w3-button w3-block w3-white1 w3-left-align abc" name="register"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Smart Node</a>
        </div>      
      </div>
      <br>
    
    <!-- End Left Column -->
    </div>
      <form action="validate_events.php" method="post">
      <div class="main-agileits" style="width:520px">
      <h2 class="sub-head">Approve an Event</h2>
        <div class="sub-main">  
        <input placeholder="Event ID" name="eventid" class="w3-container" type="text" required="">
          <span class="icon1"><i class="fa fa-calendar-o" aria-hidden="true"></i></span><br>
        <input type="submit" name="sub" value="Approve">
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
<br>

 
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
