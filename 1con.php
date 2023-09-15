<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "pharmacy";
 
$con = mysqli_connect($server,$user,$password,$db);

if($con){
    ?>
      <script>
          alert("connection succesful");
      </script>
    <?php
        }
else{
?>
      <script>
          alert("connection  not succesful");
      </script>
    <?php
}
?>