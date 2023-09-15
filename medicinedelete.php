<?php

include 'connection1.php';

$mid = $_GET['mid'];

$deletequery = " DELETE FROM `medicine` WHERE MedId = '$mid'";

$query = mysqli_query($con, $deletequery);

if($query){
    ?>
     <script>
         alert('insert successful');
    </script>
    <?php
    header('location: medicineselect.php');
  }
  else{
    ?>
    <script>
        alert('insert unsuccessful');
   </script>
   <?php
  }
?>