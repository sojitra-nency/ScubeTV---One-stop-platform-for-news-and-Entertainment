<?php
include 'connect.php';

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$contact=$_POST['contact'];
$nationality=$_POST['nationality'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];
$checkbox=$_POST['checkbox'];

$check="select email from users where email='$email';";
$checkrun=mysqli_query($connect,$check);
$count=mysqli_num_rows($checkrun);

if($count==1)
{
    
    echo "<script>alert('User already registered!! Please Choose different ID');location.href='signup.html'</script>";
}




else{

$sql_users="INSERT INTO `users` (`fname`, `lname`, `email`, `dob`, `contact`, `nationality`, `pass1`, `pass2`) VALUES ('$fname','$lname','$email','$dob','$contact','$nationality','$pass1','$pass2');";
$result=mysqli_query($connect,$sql_users);
if($result)
{
$to = $email;
$subject = "From S3TV: New Registration!!";
$txt = "Dear $fname,Your ID: $email  and  Password:$pass1";
$headers = "From:S3TV";

mail($to,$subject,$txt,$headers);
    
    
echo "<script>alert('Please Login with your new ID'); location.href='login.php';</script>";
}
else
{
echo " Connection Error";
}
    
}
?>