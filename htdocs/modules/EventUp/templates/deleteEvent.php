<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
<title>Delete Event</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat Sign Up Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}

table{
    font-family: arial, sans-serif;
    text-align: center;
    width: 90%;
}

tr,td,p{
    border: 1px solid white;
    color:white;
    text-align: center;
    border-collapse: collapse;
    font-family: arial, sans-serif;
    text-align: center;
    width: 15%;
    padding: 8px;
}

.msg{
    text-align: center;
    color:white;
    font-size: 30px;
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
 <br> &nbsp;
 <br> &nbsp;


<form action="" method="post">
<div class="main-agileits">
  <h2 class="sub-head">Delete Event Form</h2>
    <div class="sub-main">  
        <input placeholder="Event ID" name="id" class="name" type="text" required="">
          <span class="icon1"><i class="fa fa-calendar-o" aria-hidden="true"></i></span><br>
        <input type="submit" name="sub" value="Delete">
    </div>
</div>

</body>
</html>

<?php
if(isset($_POST['sub']))
{
$id = $_POST['id'];

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
                 $checkrow = "SELECT count(*) as rows from Events where Event_ID = '$id'";
                 $data = $conn->prepare($checkrow);
                 $data->execute();
                 $data->setFetchMode(PDO::FETCH_ASSOC);
                 foreach ($data as $row) {
                     $count = $row['rows'];
                 }
                 if($count == 1)
                 {
                        $query = "DELETE from Events where Event_ID = '$id'";
                        $data = $conn->prepare($query);
                        $data->execute();
                        ?>
                        <h2 class="msg">Event deleted successfully!!!</h2>
                <?php
                 }
                 else
                 {
                    ?>
                        <h2 class="msg">Please enter a valid Event ID</h2>
                <?php
                 }
}
?>