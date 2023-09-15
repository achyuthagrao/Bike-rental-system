<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <title>PHARMACY ADMIN DASHBOARD</title>
      <script type="text/javascript">
  function preventBack(){
    window.history.forward();
  }
  setTimeout("preventBack()",0);
  window.onunload=function(){null};
</script>
   </head>
   <style>
       img{
           border-radius: 50%;
       }
       .column {
          float: left;
          width: 13.33%;
          padding: 77px;
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
    <body background="phramacy.jpg">
        <h1><a href="adminlogin.php">
            <p align="right"><button>Logout</button></p>
            </a>
            <p align="center"><font size="8">PHARMACY<br>ADMIN DASHBOARD</br></font></p></h1>
      <form>
    <div class="column">
      <a href="employee.php">
        <p align="center"><img alt="Avatar" src="Employee.png"
        width="150" height="150"></p>
      </a>
      <p align="center"><font size="5">EMPLOYEE DETAILS</font></p>
    </div>
    <div class="column">
      <a href="medicine.php">
        <p align="center"><img alt="Avatar" src="medicine.png"
        width="150" height="150"></p>
      </a>
      <p align="center"><font size="5">MEDICINE DETAILS</font></p>
    </div>
    <div class="column">
      <a href="stock.php">
        <p align="center"><img alt="Avatar" src="comany.jpeg"
        width="150" height="150"></p>
      </a>
      <p align="center"><font size="5">COMPANY DETAILS</font></p>
    </div>
    <div class="column">
      <a href="orderedpage.php">
        <p align="center"><img alt="Avatar" src="images.png"
        width="150" height="150"></p>
      </a>
      <p align="center"><font size="5">ORDER DETAILS</font></p>
    </div>
</form>
   </body>
</html>