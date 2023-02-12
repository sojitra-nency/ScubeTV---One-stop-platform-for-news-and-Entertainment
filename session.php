<?php

include ('connect.php');
session_start();


if(!isset($_SESSION["finalname"]))
{   
    echo "<script>alert('You must be Logged in to access Premium Page!'); location.href='login.php';</script>";
}