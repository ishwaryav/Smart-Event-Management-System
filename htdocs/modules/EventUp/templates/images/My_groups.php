<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  
  <style type="text/css">
  h2 {
    text-align: center;
    color:white;
  }
  </style>

</head>
<body background="images/bg.jpg">
<?php
$uname = $_SESSION["userid"];
?>

<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="http://ec2-54-153-117-106.us-west-1.compute.amazonaws.com/phpMyAdmin/htdocs/modules/EventUp/templates/UserProfilePage.php" class="w3-bar-item w3-button "><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="#" class="w3-bar-item w3-hide-small w3-button w3-right" title="My Account"><h3 class="w3-left-align"> <?php echo $uname ?><img src="images/EO_Image.png" class="w3-circle" style="height:25px;width:25px" alt="Avatar"></a>
    </div>
  </div>
  
 </div>
</div>

 <br> &nbsp;

<div class="container">
  <h2>Participants For Your Events</h2>
<?php
                 $uname = $_SESSION["userid"];
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
                 $query = "SELECT register_event.event_id, firstname, lastname, email FROM register_event LEFT OUTER JOIN Events ON register_event.event_id = Events.Event_ID where Events.EO_Name = '$uname' and Events.Event_Date >= CURDATE() GROUP BY register_event.event_id";
                 $data = $conn->prepare($query);
                 $data->execute();
                 $data->setFetchMode(PDO::FETCH_ASSOC);
                    foreach ($data as $row) { 
?>
  <div class="list-group">
    <a href="#" class="list-group-item list-group-item-action"><span><?php echo $row['email']; ?></span></a>
  </div>
<?php } ?>
</div>
</body> 
</html>
