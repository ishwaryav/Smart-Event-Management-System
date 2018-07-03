<?php
session_start();
?>

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

<body bgcolor="#FFFFFF">
    <form action="http://ec2-54-153-117-106.us-west-1.compute.amazonaws.com/phpMyAdmin/htdocs/modules/EventUp/templates/UserProfilePage.php" method="post">
    <div class="main-agileits">
    <h2 class="sub-head"><? echo "Event Created successfully!!"; ?></h2>
    <div class="sub-main">  
    <input class="ok" type="submit" value="OK">
    </div>
    </form>
</body>

</html>
<?php
                 $servername = "localhost";
                 $username = "root";
                 $password = "password";

                 try {
                          $conn = new PDO("mysql:host=$servername;dbname=EventUp", $username, $password);
                          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                          $query1 = "SELECT MAX(Event_ID) as ID from events";
                          $data = $conn->prepare($query1);
                          $data->execute();
                          $data->setFetchMode(PDO::FETCH_ASSOC);
                          foreach($data as $row)
                          {
                            $max_id = $row['ID'];
                            $max_id = $max_id + 1;
                          }
                          $name = $_POST['Name'];
                          $desc = $_POST['Desc'];
                          $venue = $_POST['Venue'];
                          $date = $_POST['Date'];
                          $time = $_POST['Time'];
                          $contact = $_POST['Contact'];
                          $email = $_SESSION['email'];
                          $_SESSION['event'] = $name;
                          $_SESSION['evnt_date'] = $date;
                          $query2 = "INSERT into events (Event_ID, EO_Name, Event_Name, Event_Desc, Event_Date, Event_Time, Event_Venue, EO_Contact, Approval)
                                VALUES ($max_id, '$email', '$name', '$desc', '$date', '$time', '$venue', '$contact', 'N')";
                          $data = $conn->prepare($query2);
                          $data->execute();
                     }
                catch(PDOException $e)
                    {
                        echo "Connection failed: " . $e->getMessage();
                    }
?>

