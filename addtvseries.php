<?php

include ('connect.php');

$image=$_POST['image'];
$name=$_POST['name'];
$url=$_POST['url'];
$price=$_POST['price'];


$query="INSERT INTO `tvseries` (`image`, `name`,`url`, `price`) VALUES ('$image','$name','$url','$price')";

$run=mysqli_query($connect,$query);
if($run)
    header('location:adminmain.php');

?>