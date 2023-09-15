<?php

include 'connection1.php';

$or = $_GET['or'];

$deletequery = " DELETE FROM `orders` WHERE OrderId = '$or'";

$query = mysqli_query($con, $deletequery);

if($query){
    ?>
     <script>
         alert('insert successful');
    </script>
    <?php
    header('location: orderselect.php');
  }
  else{
    ?>
    <script>
        alert('insert unsuccessful');
   </script>
   <?php
  }
?>