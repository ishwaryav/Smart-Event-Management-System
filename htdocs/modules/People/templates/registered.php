<?php
/*
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'test001');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)

OR die('Could not connect to MySQL: ' .mysqli_connect_error());



$fname =$_POST['firstname'];
$lname =$_POST['lastname'];
$emailid =$_POST['email'];
$eventid =$_POST['eventid'];


if(is_null($fname) && is_null($lname) && is_null($emailid) && is_null($eventid))
echo "<h2>Enter Data in the fields</h2>";
else{
$sql = "INSERT INTO register_event (firstname, lastname, email, event_id)
        VALUES ('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["email"]."','".$_POST["eventid"]."')";

//$query=mysqli_query($dbc,$sql)

if(!mysqli_query($dbc,$sql))
{
	echo mysqli_error($dbc);

}}*/
//$user = 'root';
//$pass = '';

//$db = 'test001';


//$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
//

//$query=mysqli_query($db,$sql);


?>﻿
<!DOCTYPE html>
<html>
<head>
<title>Event Created</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="css/stylepage.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
</head>

<style>
.reg2{
/*padding: 30px;*/
font-size: 35px;
font-weight: 500;
color: #33383a;
}
</style>
<body>

<div class="container-fluid">
  <h1 class="heading1 reg2">Registered!!</h1>
  <div class="form-group">        
      <div class="col-sm-offset-2 col-md-8 c3">
        <a href="UserProfile.php" type="submit" class="btn btn-info reg2" style="font-family:'Lucida Sans', 'Lucida Sans Regular'"> 
                Home</a>
      </div>
    </div>
</div>

</body>
</head>
