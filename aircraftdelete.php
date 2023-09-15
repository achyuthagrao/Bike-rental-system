<?php

include 'connection2.php';

$or = $_GET['or'];

$deletequery = " DELETE FROM `aircraft` WHERE AircraftNo = '$or'";

$query = mysqli_query($con, $deletequery);

if($query){
    ?>
     <script>
         alert('insert successful');
    </script>
    <?php
    header('location: aircraftselect.php');
  }
  else{
    ?>
    <script>
        alert('insert unsuccessful');
   </script>
   <?php
  }
?>