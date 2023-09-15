<?php

$con=mysqli_connect("localhost","root","","pharmacy");

if(mysqli_connect_error())
{
    echo "connection error";
}
else
{
    echo "connected to server";
}
?>