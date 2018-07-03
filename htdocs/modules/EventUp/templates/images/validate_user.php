<?php
session_start();
            

                 $servername = "localhost";
                 $username = "root";
                 $password = "password";
                 $var1 = $_POST['uname'];
                 $var2 = $_POST['pswd'];
                 $_SESSION["userid"] = $var1;
                 $_SESSION["pswrd"] = $var2;
                 try {
                          $conn = new PDO("mysql:host=$servername;dbname=EventUp", $username, $password);
                          // set the PDO error mode to exception
                          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        //   echo "Connected successfully"; 
                        //   echo "var1 is " . $var1;
                     }
                catch(PDOException $e)
                    {
                        echo "Connection failed: " . $e->getMessage();
                    }
                 
                 $query = "SELECT password, identifier from login where email = '$var1'";
                 $data = $conn->prepare($query);
                 $data->execute();
                 $exists = $conn->query($query)->fetchAll();
                 $data->setFetchMode(PDO::FETCH_ASSOC);
                 foreach($data as $row)
                    {
                       $pswd = $row['password'];
                       $idnty = $row['identifier'];
                    }
                   
                 if($exists)
                 {
                    
                    // echo "Sample";
                    // echo $pswd ;

                   if($var2 == $pswd)
                     {
                         
                            if($idnty == "EO")
                            header("Location:UserProfilePage.php");
                            else if($idnty == "student")
                            header("Location:UserProfile.php");
                            else if($idnty == "admin")
                            header("Location:UserProfile_Admin.php");
                     }
                   else
                     {
                            header("Location:index.php");
                     }
                    
                 }
                 else
                 {
                    header("Location:index.php");
                 }


                //  echo "Enter valid user name or password";
                 
    ?>