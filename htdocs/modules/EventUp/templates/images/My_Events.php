<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<Title> My Events </Title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}

table{
    font-family: arial, sans-serif;
    text-align: center;
    width: 100%;
}

p, td, th{
	border: 1px solid white;
    color: white;
    border-collapse: collapse;
    font-family: arial, sans-serif;
    text-align: center;
    width: 22%;
    padding: 8px;
}

th{
    background-color: #eda8a8;
    border: 1px solid white;
    color: #021F21;
    font-size: 20px;
    border-collapse: collapse;
    font-family: arial, sans-serif;
    text-align: center;
    width: 22%;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #eda8a8;
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

<table>
					<tr>
						<th> Event Name </th>
						<th> Event Desc </th>
						<th> Event Date </th>
						<th> Event Time </th>
						<th> Event Venue </th>

<?php
				 $servername = "localhost";
                 $username = "root";
                 $password = "password";
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
                 $query = "SELECT Event_Name, Event_Desc, Event_Date, TIME_FORMAT(Event_Time, '%H:%i') as time, Event_Venue from Events where EO_Name = '$uname' and Event_Date >= CURDATE()";
                 $data = $conn->prepare($query);
                 $data->execute();
                 $data->setFetchMode(PDO::FETCH_ASSOC);
                 echo "<table class='table' border='1'>";
                 foreach ($data as $row) {

                 	echo "<tr><td>";
                 	echo $row['Event_Name'];
                 	echo "</td><td>";
                 	echo $row['Event_Desc'];
                 	echo "</td><td>";
                 	echo $row['Event_Date'];
                 	echo "</td><td>";
                 	echo $row['time'];
                 	echo "</td><td>";
                 	echo $row['Event_Venue'];
                 	echo "</td></tr>";
				
					                 	
                 }
?>
</table>
</body>
</html>
