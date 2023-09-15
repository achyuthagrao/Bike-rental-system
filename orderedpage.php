<?php

?>
<html>
    <head>
        <tittle></tittle>

    </head>
</html>
<style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #020202;
          text-align: center;
          padding: 8px;
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
        .button1 {
          background-color: red;
          color: black;
          border: 2px solid #4CAF50;
        }

        .button1:hover {
           background-color: #4CAF50;
           color: white;
        }
           button:hover {
          opacity: 0.8;
           }
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
        .container {
          text-align: center;
          padding: 16px;
        }       
        tr:nth-child(even) {
          background-color: #02020;
        }      
        </style>
<body background="phramacy.jpg">
<h1><a href="admindashboard.php">
        <p align="right"><button>BACK</button></p>
        </a></h1>
<div class  = "main-div">
    <h1><p align="center"><font size="6">LIST OF ORDERED ITEMS</font></p></h1>
    <div class = "center-div">
        <div class = "table-responsive">
            <table>
                <thead>
                    <th>ORDER_ID</th>
                    <th>ORDERED_DATE</th>
                    <th>MEDICINE_DATE</th>
                    <th>MEDICINE_TYPE</th>
                    <th>MEDICINE_AMOUNT</th>
                </thead>
            <?php
             
             include 'connection1.php';

             $selectquery = "select * from orders ";

             $query = mysqli_query($con,$selectquery);
              
            while($result = mysqli_fetch_assoc($query)){

            ?>
           
                <tr>
                    <td><?php echo $result['OrderId']; ?></td>
                    <td><?php echo $result['OrdersDate']; ?></td>
                    <td><?php echo $result['MedName']; ?></td>
                    <td><?php echo $result['MedType']; ?></td>
                    <td><?php echo $result['MedAmount']; ?></td>
                </tr>
        <?php
            }
        ?>
        </div>
    </div>
</div></table>
</body>