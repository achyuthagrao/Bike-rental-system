<?php
    require("connection.php");            /*to establish the connection*/
?>
<!DOCTYPE html>
<html>
  <body background="phramacy.jpg"> 
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        form {border: 0px solid #f1f1f1;}    
        input[type=text], input[type=password] {
          width: 30%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 5px solid #ccc;
          box-sizing: border-box;
        }       
        button {
          background-color: #2194e0;
          color: white;
          padding: 14px 20px;
          margin: 8px 8px;
          border: none;
          cursor: pointer;
          width: 30%;
        }        
        button:hover {
          opacity: 0.8;
        }              
        .imgcontainer {
          text-align: center;
          margin: 24px 0 12px 0;
        }    
        .container {
          text-align: center;
          padding: 16px;
        }       
        span.psw {
          float: right;
          padding-top: 16px;
        }
        @media screen and (max-width: 100px) {
          span.psw {
             display: block;
             float: none;
          }
        }      
        </style>
<h1><p align="center">PHARMACY ADMIN LOGIN FORM</p></h1>
<div class="imgcontainer">
    <img src="pharmacist_icon.png" width="200" heigth="400">
  </div> 
  <div class="container">
    <form method="POST">
    <p align="center"><input type="text" placeholder="Enter Username" name="AdminName" required></p>                                          
    <p align="center"><input type="password" placeholder="Enter Password" name="AdminPassword" required></p>                                  
    </div>
    <p align="center"><button type="submit" name="Signin">Login</button ></p>
  </div>
  </form>
  <p align="center"><font size="6">______________________</font></p>
  <h1><a href="Homepage.php">
        <p align="center"><button>BACK</button></p>
        </a></h1>
  <?php


if(isset($_POST['Signin']))
{
    $query="SELECT * FROM `user` WHERE `Username`='$_POST[AdminName]' AND `Password`='$_POST[AdminPassword]'";        /*connection*/
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['AdminLoginId']=$_POST['AdminName'];                                                                                      /*connection*/
        header("location: admindashboard.php");
    }
    else
    {
        echo"<script>alert('Incorrect Password')</script>";
    }
}

?>

</body>
</html>

