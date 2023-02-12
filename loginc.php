<?php

include 'connect.php';
 session_start();

$logid=$_POST['login_id'];
$pass=$_POST['pass'];


$query="select id,fname,lname from users where email='$logid' and pass1='$pass'; ";


$run=mysqli_query($connect,$query);

$row=mysqli_fetch_array($run);

$count = mysqli_num_rows($run);

if($count==1)
{ 
    $_SESSION["username"]=$logid;
    $_SESSION["finalname"]=$row['fname']." ".$row['lname'];
    header("location: premium.php");

}
    else echo "<script>alert('login Failed! Please Enter Correct Details');location.href='login.php';</script>";
?>