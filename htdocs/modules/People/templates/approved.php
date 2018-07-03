<?php
session_start();
$email= $_SESSION["userid"];
$eventid = $_SESSION["eventid"];
$approval = $_SESSION["status"];
$_SESSION["eventid"] = $eventid;
?>

<!DOCTYPE html>
<html>
<head>
<title>Event Approved</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="css/stylepage.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
</head>


<body>

<!-- <div class="container-fluid">
  <h1 class="heading1">Approved!!</h1>
  <div class="form-group">        
      <div class="col-sm-offset-2 col-md-8 c3">
      <button type="submit" class="btn btn-default" style="font-family:'Lucida Sans', 'Lucida Sans Regular'"> 
           OK</button>
      </div>
    </div>
</div> -->

<body background="images/bg.jpg">
    <form action="amazon-ses-sample-create.php" method="post">
    <div class="main-agileits">
    <h2 class="sub-head"><? echo "Event Approved successfully!!"; ?></h2>
    <div class="sub-main">  
    <input class="ok" type="submit" value="OK">
    </div>
    </form>
</body>
</body>
</html>
