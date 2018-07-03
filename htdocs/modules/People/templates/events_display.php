<?php session_start();
// Get a connection for the database
// require_once('connect.php');
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'EventUp');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)

OR die('Could not connect to MySQL: ' .mysqli_connect_error());

// Create a query for the database
$query = "SELECT Event_ID, Event_Name, EO_Name, Event_Desc, Event_Venue, Event_Date, Event_Time, EO_Contact FROM Events";
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
.heading123{
  font-weight: 600;
     padding: 25px;
}
.bor{
  border: 1px solid #000000;
  background-color:#879fab;
}
.bor1{
  /*border-left: 1px solid #000000;*/
  /*border-bottom: 1px solid #000000;*/
  /*background-color:#879fab;*/
      border: 1px solid #101116;
    border-collapse: collapse;
    font-family: arial, sans-serif;
    text-align: center;
    /*width: 22%;*/
    /*padding: 20px;*/
}
.bor3{
  border-right: 1px solid #000000;
  /*border-bottom: 1px solid #000000;*/
  /*background-color:#879fab;*/
}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="UserProfile.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home</a>
  
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
          <a href ="register.php" class="w3-button w3-block w3-white1 w3-left-align abc" name="register"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Register for events</a>
   
          <a href="events_display.php" class="w3-button w3-block w3-white1 w3-left-align" name="viewEvent" style="font:black"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> View Events</a>
        <a href ="http://localhost:8000" class="w3-button w3-block w3-white1 w3-left-align" name="forum"><i class="fa fa-weixin w3-margin-right"></i> Forum/Chat - Within Community</a>
        <a href ="http://localhost:8000" class="w3-button w3-block w3-white1 w3-left-align" name="forum"><i class="fa fa-weixin w3-margin-right"></i> Forum/Chat - Between Communities</a>
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
      
     
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <!--<h6 >You can Register/View Events. Make use of the application as a Forum to share your thoughts!!</h6>-->
             <h2 style="color:black" class="heading123"> List of Events</h2>
        <div class="col-md-1 bor" style="color:black">ID</div>
        <div class="col-md-5 bor" style="color:black">Name</div>
        <!--<div class="col-md-2 bor" style="color:black">Description</div>-->
        <div class="col-md-4 bor" style="color:black">Venue</div>
        <div class="col-md-1 bor" style="color:black">Date</div>
        <!-- <div class="col-md-2 bor" style="color:black">Time</div> -->
        <!--<div class="col-md-2" style="color:black">Register</div> -->
        <br> &nbsp;
        <br> &nbsp;
        <?php while($row = mysqli_fetch_array($response)) : ?>
        <div class="col-md-1  bor1" style="color:black" ><?php echo $row['Event_ID']; ?></div>
            <div class="col-md-5 bor1" style="color:black"><?php echo $row['Event_Name']; ?></div>
            
            <div class="col-md-4 bor1" style="color:black"><?php echo $row['Event_Venue']; ?></div>
            <div class="col-md-1 bor1" style="color:black"><?php echo $row['Event_Date']; ?></div>
            <!-- <div class="col-md-2  bor1" style="color:black"><?php echo $row['Event_Time']; ?></div> -->
            <div class="col-md-1 " style="color:black">
            <!--<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Register</button>-->
            <!--<div id="demo" class="collapse">
            Testing
            <p> First Name: 
            <input type="text" style="color:black" name = "firstname" size ="20" value =""/>
            </p>
            </div>-->
            <!--//php $_SESSION['varname'] = $row['id']; -->
            <!--<a class="btn btn-large btn-info" value='".$row['id']."' href="register.php">Register</a>-->
            </div>
            

            <br> &nbsp;
            <br> &nbsp;
            <br> &nbsp;
            <br> &nbsp;
            <?php endwhile ?>
            </div>
          </div>
        </div>
      </div>
      
      
      
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <!--<div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Events Registered:</p>
          <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
          <p><strong>Holiday</strong></p>
          <p>Friday 15:00</p>
          <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
        </div>
      </div>
      <br>
      
      
    <!-- End Right Column -->
    </div>-->
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

 

</body>
</html> 
