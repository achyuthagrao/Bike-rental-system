<?php

include 'connection1.php';

$sid = $_GET['sid'];

$deletequery = " DELETE FROM `company` WHERE CompanyId = '$sid'";

$query = mysqli_query($con, $deletequery);

if($query){
    ?>
     <script>
         alert('insert successful');
    </script>
    <?php
    header('location: stockselect.php');
  }
  else{
    ?>
    <script>
        alert('insert unsuccessful');
   </script>
   <?php
  }
?>