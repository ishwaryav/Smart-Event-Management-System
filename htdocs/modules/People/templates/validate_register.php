<?php
session_start();
            

                 $servername = "localhost";
                 $username = "root";
                 $password = "";
                 $var1 = $_POST['eventid'];
                 $var2 = $_POST['firstname'];
                 $var3 = $_POST['lastname'];
                 $var4 = $_POST['email'];
                 //$var2 = $_POST['pwd'];
                 $em= $_SESSION["userid"];
                 //$_SESSION["pswrd"] = $var2;
                 try {
                          $conn = new PDO("mysql:host=$servername;dbname=EventUp", $username, $password);
                          // set the PDO error mode to exception
                          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                          echo "Connected successfully"; 
                          echo "var1 is " . $var1;
                     }
                catch(PDOException $e)
                    {
                        echo "Connection failed: " . $e->getMessage();
                    }
                 
                 $query = "SELECT EO_Name,Event_ID from Events where Event_ID = '$var1'";
                 $data = $conn->prepare($query);
                 $data->execute();
                 $exists = $conn->query($query)->fetchAll();
                 $data->setFetchMode(PDO::FETCH_ASSOC);
                 $EName=$row['EO_Name'];
                 if($exists)
                 {
                 foreach($data as $row)
                 {
                    if(!empty($row['EO_Name']))
                    {
                         if($var1 == $row['Event_ID'])
                         {
                             $query = "INSERT into register_event(firstname,lastname,email,event_id,EO_name) values ('$var2','$var3','$var4','$var1','ishwaryavaradarajan@gmail.com')";
                            $data = $conn->prepare($query);
                            $data->execute();

                            header("Location:registered.php");
                            echo $row['EO_Name'];
                            echo "xxx";
                         }
                         else
                         {
                            //echo $row['password'];
                            header("Location:register.php");
                            echo "Invalid ID!";
                            
                            
                         }
                         header("Location:registered.php");
                    }}
                    
                 }
                 else
                    {
                        header("Location:register.php");
                         echo "Incorrect Event ID";
                    }
                 
    ?>