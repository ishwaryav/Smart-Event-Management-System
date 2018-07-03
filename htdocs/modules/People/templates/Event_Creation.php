<?php
session_start();
?>
<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Flat Sign Up Form Responsive Widget Template| Home :: W3layouts</title>
<!-- Meta tag Keywords -->
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
</head>
<body>
<?php
$uname = $_SESSION['email'];
$_SESSION['email'] = $uname;
?>
<!--header-->
	<div class="header-w3l">
		<h1>Welcome to EventUp</h1>
	</div>
<!--//header-->
<!--main-->
<form action="Insert_Events.php" method="post">
<div class="main-agileits">
	<h2 class="sub-head">Event Creation Form</h2>
		<div class="sub-main">	
			<form action="#" method="post">
				<input placeholder="Event Name" name="Name" class="name" type="text" required="">
					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span><br>
				<input placeholder="Event Date" name="Date" class="name2" type="text" required="">
					<span class="icon2"><i class="fa fa-calendar" aria-hidden="true"></i></span><br>
				<input placeholder="Event Time" name="Time" class="number" type="text" required="">
					<span class="icon3"><i class="fa fa-clock-o" aria-hidden="true"></i></span><br>
				<input placeholder="Event Description" name="Desc" class="mail" type="text" required="">
					<span class="icon4"><i class="fa fa-sticky-note" aria-hidden="true"></i></span><br>
				<input  placeholder="Event Venue" name="Venue" class="pass" type="text" required="">
					<span class="icon5"><i class="fa fa-home" aria-hidden="true"></i></span><br>
				<input  placeholder="Event Organizer Contact" name="Contact" class="pass" type="text" required="">
					<span class="icon6"><i class="fa fa-phone" aria-hidden="true"></i></span><br>
				<input type="submit" value="Create">
			</form>
		</div>
		<div class="clear"></div>
</div>
<!--//main-->

<!--footer-->
<div class="footer-w3">
	<p>&copy; 2016 Flat Sign Up Form . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
</div>
<!--//footer-->
</body>
</html>


				 




















