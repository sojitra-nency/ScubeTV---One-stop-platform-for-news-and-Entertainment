<?php

include ('connect.php');

$email=$_POST['email'];


$find="select email from admin where email='$email'";

$run=mysqli_query($connect,$find);
$row=mysqli_num_rows($run);

if($row==1)
{
    $pass="select pass1 from admin where email='$email'";
    $run2=mysqli_query($connect,$pass);
    $row2=mysqli_fetch_array($run2);
    $password=$row2[0];
    $to=$email;
    $subject="Forgot Password!";
    $text="Your ID : '$email' and Password : '$password'";
    $header="FROM:S3TV";
    mail($to,$subject,$text,$header);
    echo "<script>alert('Mail Sent to Your ID!!'); location.href='admin.php';</script>";
}

else
{
   echo "<script>alert('No such ID Found!!'); location.href='admin.php';</script>";
}
?>