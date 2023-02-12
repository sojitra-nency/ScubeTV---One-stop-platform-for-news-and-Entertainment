<!DOCTYPE html>
<?php

session_start();
if(isset($_SESSION['admin']))
{
    header('location:adminmain.php');
}

?>
<html>

<head>
    <title>ADMIN LOGIN</title>

</head>

<link rel="stylesheet" type="text/css" href="login.css">

<body>

    <div class="nav1">ADMIN LOGIN</div>
    <div class="log2">

        <form name="login" action="loginc2.php" method="post">
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
                    <td style="text-align:right"><a href="index.php">Home</a><a href="adminforgot.php">|&nbsp;&nbsp;&nbsp;Forgot Password</a></td>

                </tr>
                
            </table>

        </form>

    </div>



</body>



</html>