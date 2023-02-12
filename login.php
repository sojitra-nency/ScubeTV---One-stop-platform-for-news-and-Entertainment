<!DOCTYPE html>
<?php

session_start();
if(isset($_SESSION['finalname']))
{
    header('location:premium.php');
}

?>

<html>

<head>
    <title>LOGIN</title>

</head>

<link rel="stylesheet" type="text/css" href="login.css">

<body>

    <div class="nav1">LOGIN</div>
    <div class="log">

        <form name="login" action="loginc.php" method="post">
            <table>
                <tr>
                    <td>LOGIN ID</td>
                    <td>
                        <input type="email" name="login_id" id="login_id">
                    </td>
                </tr>

                <tr>
                    <td>PASSWORD</td>
                    <td>
                        <input type="password" name="pass" id="pass"> </td>
                </tr>
                <tr>
                    <td>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td td style="text-align:right"><span class="sub"><input type="submit" name="submit" value="Login!"></span></td>
                </tr>

                <tr>
                    <td></td>
                    <td style="text-align:center"><a href="signup.html">New User?</a><a href="index.php">|&nbsp;Home</a><a href="forgot.php">|&nbsp;Forgot Password</a></td>

                </tr>
                
            </table>

        </form>

    </div>



</body>



</html>