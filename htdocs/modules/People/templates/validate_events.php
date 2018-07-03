<?php
session_start();
            

                 $servername = "localhost";
                 $username = "root";
                 $password = "";
                 $var1 = $_POST['eventid'];
                 $_SESSION["eventid"] = $var1;
                 $email= $_SESSION["userid"];
                 try {
                          $conn = new PDO("mysql:host=$servername;dbname=EventUp", $username, $password);
                          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     }
                catch(PDOException $e)
                    {
                        echo "Connection failed: " . $e->getMessage();
                    }
                 
                 $query = "SELECT Event_ID, Approval from Events where Event_ID = '$var1'";
                 $data = $conn->prepare($query);
                 $data->execute();
                 $exists = $conn->query($query)->fetchAll();
                 $data->setFetchMode(PDO::FETCH_ASSOC);
                 if($exists){
                 foreach($data as $row)
                 {
                     if($row['Approval'] == 'N' || $row['Approval'] == 'U')
                         {
                            $_SESSION["status"] = $row['Approval'];
                            $query1 = "UPDATE Events set Approval = 'Y' where Event_ID= '$var1'";
                            $data = $conn->prepare($query1);
                            $data->execute();
                            header("Location:approved.php");
                         }
                     else
                         {
                            header("Location:approve_events.php");
                         }
                 }
                }
                else
                {
                    header("Location:approve_events.php");
                }
?>