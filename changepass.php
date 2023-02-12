<?php

include ('connect.php');
session_start();

$email=$_SESSION['username'];
$opass=$_POST['pass1'];
$npass=$_POST['pass0'];

$run1="select pass1 from db where email='$email';";
$query1=mysqli_query($connect,$run1);
$row = mysqli_fetch_row($query1);

if($opass==$row[0])
{
$run="update db set pass1='$npass' , pass2='$npass' where email='$email';";
$query=mysqli_query($connect,$run);

if($query)
{
    echo "<script>alert('Your Password Changed!!'); location.href='premium.php';</script>";
    
}

else
{
    echo "Error";
}
}

else {echo "<script>alert('Old Password Wrong!!'); location.href='changepassword.php';</script>";
      
     }
?>