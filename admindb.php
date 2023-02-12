<?php
include 'connect.php';


$email=$_POST['email'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];


$check="select email from admin where email='$email';";
$checkrun=mysqli_query($connect,$check);
$count=mysqli_num_rows($checkrun);

if($count==1)
{
    
    echo "<script>alert('ADMIN already registered!! Please Choose different ID');location.href='adminreg.html'</script>";
}


else{

$sql_users="INSERT INTO `admin` ( `email`, `pass1`, `pass2`) VALUES ('$email','$pass1','$pass2');";
$result=mysqli_query($connect,$sql_users);
if($result)
{
echo "<script>alert('Please Login with your new ID'); location.href='admin.php';</script>";
}
else
{
echo "Connection Error";
}
}
?>