<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color:"gainsboro";
}
* {
  box-sizing: border-box;
}
.container {
  padding: 16px;
  background-color:"gainsboro";
}
input[type=text], input[type=password] {
  width: 30%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  background: #fffefe;
  border: 5px solid #ccc;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: rgb(231, 238, 247);
  outline: none;
}
hr {
  border: 0px solid #fff4f4;
  margin-bottom: 25px;
}
.registerbtn {
  background-color: #2194e0;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity: 1;
}
a {
  color: dodgerblue;
}
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
button {
          background-color: #2194e0;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 10%;
        } 
</style>
</head>
<body background="phramacy.jpg">
<?php

include '1con.php';
  
  if(isset($_POST['submit'])){
     
      $uid = mysqli_real_escape_string($con, $_POST['uid']);
      $uname= mysqli_real_escape_string($con, $_POST['uname']);
      $upassword = mysqli_real_escape_string($con, $_POST['upassword']);
      $uemailid = mysqli_real_escape_string($con, $_POST['uemailid']);
      $upno = mysqli_real_escape_string($con, $_POST['upno']);
      $uloc = mysqli_real_escape_string($con, $_POST['uloc']);


      $uidquery = "select * from register where Userid= '$uid'";
      $query = mysqli_query($con,$uidquery);

      $uidcount = mysqli_num_rows($query);

      if($uidcount>0){
          echo"user id already exist";
      }
      else{
          $insertquery = "insert into register(Userid, Username, Upassword, Emailid, Pnumber, Ulocation) values('$uid','$uname','$upassword','$uemailid','$upno','$uloc')";

          $iquery = mysqli_query($con, $insertquery);
          if($iquery){
            ?>
              <script>
                  alert("connection succesful");
              </script>
            <?php
                }
        else{
        ?>
              <script>
                  alert("connection unsuccesful");
              </script>
            <?php
        }
          
      }
  }

?>
  <div>
</div>
<a href="pharmacistloginform.php">
    <p  align="right"><button>LOGIN</button></p>
</a>
<form action="" method="POST">
  <div class="container">
    <h1><p align="center">REGISTER FORM</p></h1>
    <hr>
    <p align="center"><label for="User id"><b><br>USER ID</br></b><input type="text"placeholder="Enter unique User Id" name="uid" required></label></p>    
    <p align="center"><label for="User name"><b><br>USER NAME</br></b><input type="text"placeholder="Enter a Valid name" name="uname" required></label></p>
    <p align="center"><label for="password"><b><br>PASSWORD</br></b><input type="text"placeholder=" Enter password" name="upassword" required></label></p>
    <p align="center"><label for="email"><b><br>EMAIL ID</br></b></label></p>
    <p align="center"><input type="text" placeholder="Enter your Email id" name="uemailid" required></p>
    <p align="center"><label for="User number"><b><br>USER NUMBER</br></b><input type="text" placeholder="Enter a Phone Number" name="upno" required></label></p>
    <p align="center"><label for="User_Location"><b><br>USER LOCATION</br></b><input type="text" placeholder="Enter Your Current Location"  name="uloc" required></label></p>
    <hr>
    <p align="center"><button type="submit" name="submit" class="registerbtn">REGISTER</button></p>
  </div>
</form>
</body>
</html>