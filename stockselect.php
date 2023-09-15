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

<div class  = "main-div">
<h1><a href="stock.php">
        <p align="right"><button>BACK</button></p>
        </a>
    <h1><p align="center"><font size="6">LIST OF COMPANY</font></p></h1>
    <div class = "center-div">
        <div class = "table-responsive">
            <table>
                <thead>
                    <th>COMPANY_ID</th>
                    <th>COMPANY_MEDICINE</th>
                    <th>MEDICINE_TYPE</th>
                    <th>COMPANY_SUPPLY</th>
                    <th>UPDATE</th>
                    <th>DELETE</th>
                </thead>
           
            <?php
             
             include 'connection1.php';

             $selectquery = "select * from company ";

             $query = mysqli_query($con,$selectquery);
              
            while($result = mysqli_fetch_assoc($query)){

            ?>
           
                <tr>
                    <td><?php echo $result['CompanyId']; ?></td>
                    <td><?php echo $result['CompanyMed']; ?></td>
                    <td><?php echo $result['MedType']; ?></td>
                    <td><?php echo $result['CompanySupply']; ?></td>
                    <td><a href="stockupdate.php?sid=<?php echo $result['CompanyId']; ?>">
                     <class = "btn btn-info">UPDATE</a></td>
                     <td><a href="stockdelete.php?sid=<?php echo $result['CompanyId']; ?>">
                     <class = "btn btn-info">DELETE</a></td>
                </tr>
        <?php
            }
        ?>
        </div>
    </div>
</div></table>
</body>