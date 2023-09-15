<?php

include 'connection1.php';

$eid = $_GET['eid'];

$deletequery = " DELETE FROM `employee` WHERE EmpId = '$eid'";

$query = mysqli_query($con, $deletequery);

if($query){
    ?>
     <script>
         alert('insert successful');
    </script>
    <?php
    header('location: employeeselect.php');
  }
  else{
    ?>
    <script>
        alert('insert unsuccessful');
   </script>
   <?php
  }
?>