<?php

include ('connect.php');

$email=$_POST['email'];


$find="select email from users where email='$email'";

$run=mysqli_query($connect,$find);
$row=mysqli_num_rows($run);

if($row==1)
{
    $pass="select pass1 from users where email='$email'";
    $run2=mysqli_query($connect,$pass);
    $row2=mysqli_fetch_array($run2);
    $password=$row2[0];
    $to_email=$email;
    $subject="S3TV:Forgot Password!";
    $body="Your ID : '$email' and Password : '$password'";
    $header="FROM: shahdiya194@gmail.com";

    if(mail($to_email,$subject,$body,$header))
    {
        echo "<script>alert('Email successfully sent to $to_email...'); location.href='login.php';</script>";
    }
    else{
        echo "Email sending failed...";
    }
    
}

else
{
   echo "<script>alert('No such ID Found!!'); location.href='login.php';</script>";
}
?>
