<?php

include ('connect.php');
session_start();


if(!isset($_SESSION["admin"]))
{   
    echo "<script>alert('You must be Logged in to access ADMIN Page!'); location.href='admin.php';</script>";
}