<!DOCTYPE html>
<?php

include ('connect.php');
include ('adminsession.php');
ob_start();

$query="select * from movies;";
$query2="select * from tvseries;";
$query3="select * from magazines;";
$query4="select id,fname,email,pass1 from users;";
$query5="select * from payment;";
$run=mysqli_query($connect,$query);
$run2=mysqli_query($connect,$query2);
$run3=mysqli_query($connect,$query3);
$run4=mysqli_query($connect,$query4);
$run5=mysqli_query($connect,$query5);

?>
    <html>

    <head>
        <title>ADMIN MAIN</title>
        <link rel="stylesheet" type="text/css" href="adminmain.css"> </head>

    <body>
        <div class="maindiv">
            <h1>ADMIN ADD/DELETE</h1></div>
        <div class="mainmain">
            <br>
            <div class="movies">
                <form name='addmovies' action='addmovies.php' method="post">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Cover Page</th>
                            <th>Name</th>
                            <th>Url</th>
                            <th>Price</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                                while($row=mysqli_fetch_array($run))
                                    {
                                    $id=$row['id'];
                                    $image=$row['image'];
                                    $name=$row['name'];
                                    $url=$row['url'];
                                    $price=$row['price'];

                                    
                                echo "<tr><td>$id</td><td><img src='m_images/$image.jpg' alt=$image width='200px' height='100px'></td><td>$name</td><td><td>$url</td></td><td>$price</td><td><a href='adminmain.php?delete=$id'>Delete</a></td></tr>";
                            
                            }
                                 echo "<tr><td></td><td><input type='text' name='image' url='url' required></td><td><input type='text' name='name' required></td><td><input type='number' name='price' required></td>";
                                echo "<td><input type='submit' name='add' value='ADD MOVIE'></td>";
                                                    
                        ?>
                    </table>
                </form>
            </div>
            <br>
            <br>


            <div class="tvseries">
                <form name='addtvseries' action='addtvseries.php' method="post">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Cover Page</th>
                            <th>Name</th>
                            <th>Url</th>
                            <th>Price</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                            while($row2=mysqli_fetch_array($run2))
                                {
                                    $id=$row2['id'];
                                    $image=$row2['image'];
                                    $name=$row2['name'];
                                    $url=$row['url'];
                                    $price=$row2['price'];
                                    
                                    echo "<tr><td>$id</td><td><img src='m_images/$image.jpg' width='200px' height='100px'></td><td>$name</td><td>$url</td><td>$price</td><td><a href='adminmain.php?delete2=$id'>Delete</a></td></tr>";
                                }
                            echo "<tr><td></td><td><input type='text' name='image' required></td><td><input type='text' name='name' required></td><td><input type='number' name='price' required></td>";
                            echo "<td><input type='submit' name='add' value='ADD TV SERIES'></td>";
                            
                        ?>
                    </table>
                </form>
            </div>
            <br>
            <br>


            <div class="magazines">
                <form name='addmagazine' action='addmagazines.php' method="post">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Cover Page</th>
                            <th>Name</th>
                            <th>Url</th>
                            <th>Price</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                            while($row=mysqli_fetch_array($run3))
                                {
                                    $id=$row['id'];
                                    $image=$row['image'];
                                    $name=$row['name'];
                                    $url=$row['url'];
                                    $price=$row['price'];
                                    
                                    echo "<tr><td>$id</td><td><img src='m_images/$image.jpg' width='200px' height='100px'></td><td>$name</td><td>$url</td><td>$price</td><td><a href='adminmain.php?delete3=$id'>Delete</a></td></tr>";
                                }
                            echo "<tr><td></td><td><input type='text' name='image' required></td><td><input type='text' name='name' required></td><td><input type='number' name='price' required></td>";
                            echo "<td><input type='submit' name='add' value='ADD MAGAZINE'></td>";
                            
                        ?>
                    </table>
                </form>
            </div>
            <br>
            <br>


            <div class="users">
                <form name='userdb' method="post">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email ID</th>
                            <th>Password</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                            while($row=mysqli_fetch_array($run4))
                                {
                                    $id=$row['id'];
                                    $name=$row['fname'];
                                    $email=$row['email'];
                                    $pass=$row['pass1'];
                                    
                                    echo "<tr><td>$id</td><td>$name</td><td>$email</td><td>$pass</td><td><a href='adminmain.php?delete4=$id'>Delete User</a></td></tr>";
                                }
                        ?>
                    </table>
                </form>
            </div>
        
        <!-- ?php -->

<!-- payment class added -->

            <div class="payment">
                <form name='payment' method="post">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Email ID</th>
                            <th>Contact</th>
                            <th>payment</th>
                            <th>Delete</th>
                        </tr>
        <?php
            while($row=mysqli_fetch_array($run5))
                {
                $id=$row['id'];
                $email=$row['email'];
                $cont=$row['contact'];
                $pay=$row['payment'];

                echo "<tr><td>$id</td><td>$email</td><td>$cont</td><td>$pay</td><td><a href='adminmain.php?delete5=$id'>Delete User</a></td></tr>";
                }
        ?>
                    </table>
                </form>
            </div>
        </div>
        <?php
        

// payment over

        if(isset($_GET['delete']))
        {
            $nid=$_GET['delete'];
            $querydel="DELETE from movies where id=$nid;";
            $rundel=mysqli_query($connect,$querydel);
            header('location:adminmain.php');
        }
        
        
        if(isset($_GET['delete2']))
        {
            $nid=$_GET['delete2'];
            $querydel="DELETE from tvseries where id=$nid;";
            $rundel=mysqli_query($connect,$querydel);
            header('location:adminmain.php');
        }
        
        if(isset($_GET['delete3']))
        {
            $nid=$_GET['delete3'];
            $querydel="DELETE from magazines where id=$nid;";
            $rundel=mysqli_query($connect,$querydel);
            header('location:adminmain.php');
        }
        
        if(isset($_GET['delete4']))
        {
            $nid=$_GET['delete4'];
            $querydel="DELETE from users where id=$nid;";
            $rundel=mysqli_query($connect,$querydel);
            header('location:adminmain.php');
        }

        // for payment

        if(isset($_GET['delete5']))
        {
            $nid=$_GET['delete5'];
            $querydel="DELETE from payment where id=$nid;";
            $rundel=mysqli_query($connect,$querydel);
            header('location:adminmain.php');
        }

        ?>
        <div class="lmain">
         <div class="logout">
                    <?php
            echo "<form action='adminlogout.php'>";
            echo "<input type='submit' name='submit' value='LOG OUT'>";
            echo "</form>";
?>
                </div>
        </div>
    </body>

    </html>