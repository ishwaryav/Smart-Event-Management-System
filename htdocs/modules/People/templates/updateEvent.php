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
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- //css files -->
<!-- online-fonts -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
<style>

table{
    font-family: arial, sans-serif;
    text-align: center;
    width: 100%;
    padding 25px;
}
tr,td{
    border: 1px solid white;
    color:white;
    border-collapse: collapse;
    font-family: arial, sans-serif;
    text-align: center;
    width: 10%;
    padding: 5px;
}

.edit{
  float:center;
  width:20%
}

.b, .sub{
  background-color: lightgrey;
  width: 50%;
  height: 20%;
  font-size: 30px;
  /*border: 25px;*/
  text-align: center;
  /*position: relative;*/
  padding-left: 4px;
  padding-right: 4px;
  margin-left: 70px;
  margin-top: 10px;
  /*margin 25px;*/
}
.homebutton{
background-color: lightgrey;
color:black;
text-align: center;
float: left;
padding: 2px;
width: 10%;
height: 5%;
margin-left: 10px;
margin-right: 400px;
margin-bottom: 700px;
margin-top: 40px;
}

.sub1{
  background-color: lightgrey;
  border: 2px solid white;
  font-size: 3em;
  color: black;
  padding-left: 2px;
  padding-right: 2px;
  margin-left: 200px;
  margin-right: 100px;
 /* margin-right: 650px;
  margin-left: 600px;*/
}

span, label{
  position: relative;
  font-size: 30px;
  color: white;
}

img{
width: 0%;
height: 0%;
}

</style>
</head>

<body background="images/Background.png">

<?php
$uname = $_SESSION["userid"];
?>

<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="/htdocs/modules/People/templates/UserProfilePage.php" class="w3-bar-item w3-button "><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="#" class="w3-bar-item w3-hide-small w3-button w3-right" title="My Account"><h3 class="w3-left-align"> <?php echo $uname ?><img src="images/EO_Image.png" class="w3-circle" style="height:25px;width:25px" alt="Avatar"></a>
    </div>
  </div>
  
 </div>
</div>

 <br> &nbsp;
 <br> &nbsp;
 <br> &nbsp;


<div class="main-agileits">
  <h2 class="sub-head">Update Event Form</h2>
  <form action="" method="post">
    <div class="sub-main">  
        <input placeholder="Event ID" name="id" class="name" type="text" required="">
          <span class="icon1"><i class="fa fa-calendar-o" aria-hidden="true"></i></span><br>
        <input type="submit" name="sub" value="Get Details">
    </div>
  </form>
</div>
<?php
if(isset($_POST['sub']))
{
$id = $_POST['id'];
$_SESSION["id"] = $id;
?>
<div>            
                 <?php
                 $servername = "localhost";
                 $username = "root";
                 $password = "";
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
                 $query = "SELECT * from Events where Event_ID = '$id'";
                 $data = $conn->prepare($query);
                 $data->execute();
                 $data->setFetchMode(PDO::FETCH_ASSOC);
                 foreach ($data as $row) {
                  ?>

<!-- <div class="main-agileits"> -->
  <h2 class="sub1">Event Details</h2>
    <div>  
      <form action="update.php" method="post">
        <span><i class="fa fa-user" aria-hidden="true"></i><label style="margin-left: 3px">Event ID  </label><input style="margin-left: 107px"  placeholder="No Event Name" name="ID" class="sub" type="text" value="<?php echo $row['Event_ID']; ?>" readonly="readonly"></span><br>
        <span><i class="fa fa-user" aria-hidden="true"></i><label style="margin-left: 3px">Event Name</label><input style="margin-left: 68px" placeholder="No Event Name" name="Name" class="sub" type="text" value="<?php echo $row['Event_Name']; ?>"></span><br>
        <span><i class="fa fa-calendar" aria-hidden="true"></i><label style="margin-left: 3px">Event Date</label><input style="margin-left: 75px" placeholder="No Event Date" name="Date" class="sub" type="text" value="<?php echo $row['Event_Date']; ?>"></span><br>
        <span><i class="fa fa-clock-o" aria-hidden="true"></i><label style="margin-left: 3px">Event Time</label><input style="margin-left: 75px" placeholder="No Event Time" name="Time" class="sub" type="text" value="<?php echo $row['Event_Time']; ?>"></span><br>
        <span><i class="fa fa-sticky-note" aria-hidden="true"></i><label style="margin-left: 3px">Description</label><input placeholder="No Event Description" name="Desc" class="sub" type="text" value="<?php echo $row['Event_Desc']; ?>"></span><br>
        <span><i class="fa fa-home" aria-hidden="true"></i><label style="margin-left: 3px">Event Venue</label><input style="margin-left: 53px" placeholder="No Event Venue" name="Venue" class="sub" type="text" value="<?php echo $row['Event_Venue']; ?>"></span><br>
        <span><i class="fa fa-phone" aria-hidden="true"></i><label style="margin-left: 3px">Contact</label><input  style="margin-left: 124px" placeholder="No Event Organizer Contact" name="Contact" class="sub" type="text" value="<?php echo $row['EO_Contact']; ?>"></span><br>          
        <input style="margin: 5px" type="image" name="edit" src="images/edit.png" style="width=20 height=20">>
      </form>
<!-- </div> -->
            <?php
           }
}           
?>
</body>
</html>