<?php
  require("connection.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
  <?php
if(isset($_POST['Signin']))
{
    $query="SELECT * FROM `register` WHERE `Username`='$_POST[uname]' AND `Upassword`='$_POST[upassword]'";        /*connection*/
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['AdminLoginId']=$_POST['uname'];                                                                                      /*connection*/
        header("location: pharmacistdashboard.php");
    }
    else
    {
        echo"<script>alert('Incorrect Password')</script>";
    }
}
?>
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
<h1><p align="center">PHARMACIST LOGIN FORM</p></h1>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
  <div class="imgcontainer">
    <img src="pharmacist_icon.png" width="200" heigth="400">
  </div>
  <div class="container">
    <p align="center"><input type="text" placeholder="Enter Username" name="uname" required></p>
    <p align="center"><input type="password" placeholder="Enter Password" name="upassword" required></p>
    </div></p>
    <p align="center"><button type="submit" name="Signin">Login</button></p>
  </div>
  </form> 
    <div>
      <p align="center"><label for="create new Account"><b><br>Don't Have an account? Register Here</br></b>
        <a href="pharmacistregisterform.php">
          <p align="center"><button type="submit">Register</button></p></a>
          <p align="center"><font size="6">______________________</font></p>
          <h1><a href="Homepage.php">
        <p align="center"><button>BACK</button></p>
        </a></h1>
          </div>
</body>
</html>
