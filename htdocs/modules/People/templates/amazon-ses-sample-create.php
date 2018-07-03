<?php
session_start();
$eventid = $_SESSION["eventid"];
$before_update = $_SESSION["status"];
$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=EventUp", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = "SELECT Event_Name, Event_Date, TIME_FORMAT(Event_Time, '%H:%i') as time from Events where Event_ID = '$eventid'";
$data = $conn->prepare($query);
$data->execute();
$data->setFetchMode(PDO::FETCH_ASSOC);
foreach ($data as $row) {
  $name = $row['Event_Name'];
  $date = $row['Event_Date'];
  $time = $row['time'];
  $approval = $row['Approval'];
}
if($before_update == 'N')
{
    $email_body = "<h2>The following event has been created as below!! </h2><br>" . $name .
                 " is on " . $date . " @ " . $time ;
}
else if($before_update == 'U')
{
    $email_body = "<h2>The following event has been updated!! </h2><br>" . $name .
                 " is on " . $date . " @ " . $time ;
}
// Replace path_to_sdk_inclusion with the path to the SDK as described in 
// http://docs.aws.amazon.com/aws-sdk-php/v3/guide/getting-started/basic-usage.html
define('REQUIRED_FILE','vendor/autoload.php'); 
                                                  
// Replace sender@example.com with your "From" address. 
// This address must be verified with Amazon SES.
define('SENDER', 'ishwaryavaradarajan@gmail.com');           

// Replace recipient@example.com with a "To" address. If your account 
// is still in the sandbox, this address must be verified.
define('RECIPIENT', 'ishwarya.varadarajan@sjsu.edu');    

// Specify a configuration set. If you do not want to use a configuration
// set, comment the following variable, and the 
// 'ConfigurationSetName' => CONFIGSET argument below.
define('CONFIGSET','ConfigSet');

// Replace us-west-2 with the AWS Region you're using for Amazon SES.
define('REGION','us-west-2'); 

define('SUBJECT','EventUp - Event has been updated Notification');

//define('HTMLBODY','<h1>Hello there!! There has been an update to the event.</h1>');
define('TEXTBODY','This email was send with Amazon SES using the AWS SDK for PHP.');

define('CHARSET','UTF-8');

$email= $_SESSION["userid"];
require REQUIRED_FILE;

use Aws\Ses\SesClient;
use Aws\Ses\Exception\SesException;

$client = SesClient::factory(array(
    'version'=> 'latest',     
    'region' => REGION,
    'credentials' => [
        'key'    => 'AKIAIB7F7HS3BSCH4MBQ',
        'secret' => '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',
    ]
));

try {
     $result = $client->sendEmail([
    'Destination' => [
        'ToAddresses' => [
            RECIPIENT,
        ],
    ],
    'Message' => [
        'Body' => [
            'Html' => [
                'Charset' => CHARSET,
                'Data' => "$email_body",
            ],
			'Text' => [
                'Charset' => CHARSET,
                'Data' => TEXTBODY,
            ],
        ],
        'Subject' => [
            'Charset' => CHARSET,
            'Data' => SUBJECT,
        ],
    ],
    'Source' => SENDER,
    // If you are not using a configuration set, comment or delete the
    // following line
    'ConfigurationSetName' => CONFIGSET,
]);
     $messageId = $result->get('MessageId');
     //echo("Email sent! Message ID: $messageId"."\n");

} catch (SesException $error) {
     //echo("The email was not sent. Error message: ".$error->getAwsErrorMessage()."\n");
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Notification Sent!!</title>
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
<!-- <form action="UserProfile_Admin.php" method="post"> -->
<!-- <div class="container-fluid">
  <h1 class="heading1">Notification Sent!!</h1>
  <div class="form-group">        
      <div class="col-sm-offset-2 col-md-8 c3">
      <button type="submit" class="btn btn-default" style="font-family:'Lucida Sans', 'Lucida Sans Regular'"> 
           Home</button>
      </div>
    </div>
</div> -->

    <form action="UserProfile_Admin.php" method="post">
    <div class="main-agileits">
    <h2 class="sub-head">Notification Sent!!</h2>
    <div class="sub-main">  
    <input class="ok" type="submit" value="OK">
    </div>
    </form>
</body>
</html>
