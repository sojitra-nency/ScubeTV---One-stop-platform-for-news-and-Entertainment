<?php

include 'connect.php';

$logid=$_POST['login_id'];
$pass=$_POST['pass'];

$query="select id from admin where email='$logid' and pass1='$pass'; ";
$run=mysqli_query($connect,$query);


$count = mysqli_num_rows($run);

if($count==1)
{
    header("location: adminmain.php");
}
    else echo "<script>alert('login Failed! Please Enter Correct Details');location.href='admin.php';</script>";
?>