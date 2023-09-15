<html>
    <head>
        <tittle></tittle>
    </head>
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
 <h1><a href="pharmacistdashboard.php">
        <p align="right"><button>BACK</button></p>
        </a></h1>
        <center>
            <h1>SEARCH IF MEDICINE IS AVAILABLE</h1>
        <div class="container">
            <form action="" method="POST">
                <input type ="text" name="mname" placeholder="Enter the medicine to check if available" />
                <br><button type="submit" name="search">SEARCH BY MED NAME</button></br>
            </form>
            <table>
                <tr>
                    <th>Medicine Id</th>
                    <th>Medicine Name</th>
                    <th>Medicine Type</th>
                    <th>Composition</th>
                    <th>Medicine Amount</th>
                    <th>Medicine Expdate</th>
                </tr><br>
                <?php

                $con = mysqli_connect("localhost","root","");
                $db= mysqli_select_db($con,'pharmacy');

                if(isset($_POST['search']))
                {
                    $mname = $_POST['mname'];

                    $query = "SELECT * FROM medicine WHERE MedName='$mname' ";
                    $query_run = mysqli_query($con,$query);

                    while($row = mysqli_fetch_array($query_run))
                    {
                        ?>
                             <tr>
                                 <td><?php echo $row['MedId']; ?> </td>
                                 <td><?php echo $row['MedName']; ?> </td>
                                 <td><?php echo $row['MedType']; ?> </td>
                                 <td><?php echo $row['Composition']; ?> </td>
                                 <td><?php echo $row['Amount']; ?> </td>
                                 <td><?php echo $row['ExpDate']; ?> </td>
                             </tr>
                        <?php
                    }
                }
                ?>
            </table>
            <h1><a href="order.php">
        <p align="center"><button>PLACE THE ORDER</button></p>
        </a></h1>
                </div>
        </center>
    </body>
</html>