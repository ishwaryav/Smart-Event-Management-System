<?php
session_start();
?>

<!DOCTYPE html>
<html>
<style>
/*form {
    border: 3px solid #f1f1f1;
}*/

input[type=text], input[type=password] {
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    float: center;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 10px;
    border: none;
    cursor: pointer;
    width: 10%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: 100px;
    padding: 10px 18px;
    float: center;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    /*margin: 10px 10px 12px 10px;*/
}

img.avatar {
    width: 20%;
    border-radius: 20%;
}

.container {
    color:black;
    text-align: center;
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>
<form action="templates/validate_user.php" method="post">
<h2 class="container">Login Page</h2>
  <div class="imgcontainer">
    <img src="images/EO_Image.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
  </div class="container">
  <div class="container">
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pswd" required>
  </div>
  <div class="container">
    <button type="submit">Login</button>
  </div>
</form>

</body>
</html>
