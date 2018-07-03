<?php session_start();
// Get a connection for the database
// require_once('connect.php');
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'test001');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)

OR die('Could not connect to MySQL: ' .mysqli_connect_error());

// Create a query for the database
$query = "SELECT id, name, description, venue, date, time, host_contact FROM events";

// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){

// echo '<table align="left"
// cellspacing="5" cellpadding="8" table border="1">

// <tr><td align="left"><b>ID</b></td>
// <td align="left"><b>Event Name</b></td>
// <td align="left"><b>Description</b></td>
// <td align="left"><b>Venue</b></td>
// <td align="left"><b>Date</b></td>
// <td align="left"><b>Time</b></td>
// <td align="left"><b>Contact Host</b></td>
// </tr>';
// mysqli_fetch_array will return a row of data from the query
// until no further data is available
// while($row = mysqli_fetch_array($response)){

// echo '<tr><td align="left">' . 
// $row['id'] . '</td><td align="left">' .     
// $row['name'] . '</td><td align="left">' .
// $row['description'] . '</td><td align="left">' . 
// $row['venue'] . '</td><td align="left">' . 
// $row['date'] . '</td><td align="left">' . 
// $row['time'] . '</td><td align="left">' . 
// $row['host_contact'] . '</td><td align="left">';

// echo '</tr>';
// }

echo '</table>';

} else {

echo "Couldn't issue database query<br />";

echo mysqli_error($dbc);

}

// Close connection to the database
mysqli_close($dbc);

?>
<html>
    <head>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>List of Events</title>
        <meta charset="utf-8">
         <link href="css/stylepage.css" rel="stylesheet" type="text/css" media="all">
        </head>
    <body style="font-family:'Lucida Sans', 'Lucida Sans Regular'"  background="bg.jpg">
        <h2 style="color:white"> List of Events:</h2>
        <div class="col-md-1" style="color:white">ID</div>
        <div class="col-md-2" style="color:white">Name</div>
        <div class="col-md-3" style="color:white">Description</div>
        <div class="col-md-1" style="color:white">Venue</div>
        <div class="col-md-2" style="color:white">Date</div>
        <div class="col-md-1" style="color:white">Time</div>
        <div class="col-md-2" style="color:white">Register</div> 
        
        <?php while($row = mysqli_fetch_array($response)) : ?>
        <div class="col-md-1 " style="color:white" ><?php echo $row['id']; ?></div>
            <div class="col-md-2" style="color:white"><?php echo $row['name']; ?></div>
            <div class="col-md-3" style="color:white"><?php echo $row['description']; ?></div>
            <div class="col-md-1" style="color:white"><?php echo $row['venue']; ?></div>
            <div class="col-md-2" style="color:white"><?php echo $row['date']; ?></div>
            <div class="col-md-1" style="color:white"><?php echo $row['time']; ?></div>
            <div class="col-md-1" style="color:white">
            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Register</button>
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
            <br> &nbsp;
            <?php endwhile ?>
<!--<table>
    <thead>
        <tr style="font-size:25px; " cellpadding="50" bgcolor="#727b89" align="center" >
            <th>ID</th>
            <th>Event Name</th>
            <th >Description</th>
            <th>Venue</th>
            <th>Date</th>
            <th>Time</th>
            <th align="center" height="75">Contact Info</th>
        </tr>
    </thead>
    <tbody >-->
        <!--Use a while loop to make a table row for every DB row-->
        <!--<?php while($row = mysqli_fetch_array($response)) : ?>
        <tr >-->
            <!--Each table column is echoed in to a td cell-->
            <!--<td style="color:white"><?php echo $row['id']; ?></td>
            <td style="color:white"><?php echo $row['name']; ?></td>
            <td style="color:white"><?php echo $row['description']; ?></td>
            <td style="color:white"><?php echo $row['venue']; ?></td>
            <td style="color:white"><?php echo $row['date']; ?></td>
            <td style="color:white"><?php echo $row['time']; ?></td>
            <td style="color:white"><?php echo $row['host_contact']; ?></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>-->
</body>
</html>