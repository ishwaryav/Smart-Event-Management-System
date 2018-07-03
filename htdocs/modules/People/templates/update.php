<!DOCTYPE html>
<html>
<head>
<title>Update Event</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat Sign Up Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
</head>


<?php
  $evntname = $_POST['Name'];
  $evntid = $_POST['ID'];
  $evntdate = $_POST['Date'];
  $evnttime = $_POST['Time'];
  $desc = $_POST['Desc'];
  $venue = $_POST['Venue'];
  $phone = $_POST['Contact'];

  $servername = "localhost";
  $username = "root";
  $password = "";
                try {
                          $conn = new PDO("mysql:host=$servername;dbname=EventUp", $username, $password);
                          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     }
                catch(PDOException $e)
                    {
                        echo "Connection failed: " . $e->getMessage();
                    }

    $query = "UPDATE Events SET Event_Name = '$evntname', Event_Desc = '$desc', Event_Date = '$evntdate', Event_Time = '$evnttime', Event_Venue = '$venue', 
                                EO_Contact = '$phone', Approval ='U' where Event_ID = '$evntid'";
    $data = $conn->prepare($query);
    $data->execute();
?>

<body bgcolor="#FFFFFF">
    <form action="updateEvent.php" method="post">
    <div class="main-agileits">
    <h2 class="sub-head"><? echo "Data updated successfully"; ?></h2>
    <div class="sub-main">  
    <input class="ok" type="submit" value="OK">
    </div>
    </form>
</body>