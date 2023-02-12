<!DOCTYPE html>


<?php

include ('connect.php');
session_start();
if(!isset($_SESSION['finalname']))
{
    echo "<script>alert('Please Login!');location.href='login.php';</script>";
}
?>


<html>

<head>
    <title>Change Password</title>

 <link rel="stylesheet" type="text/css" href="login.css">   
<style>
         .home {
         box-sizing: border-box;
         padding-top: 40px;
         width: 100px;
         display: flex;
         justify-content: center;
         height: 100px;
         border:2px solid black;
         border-radius: 10em;
         background-color: firebrick;
         color:white;
         

    }
    
    .home:hover{
        background-color: brown;
    }
    
    a{
        text-decoration: none;
        color: white;
    }
    
    .h{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    </style>
</head>

    

    
<script>
function validate() {
    var y1=document.forms["signup"]["pass0"].value;
    var y2=document.forms["signup"]["pass00"].value;
    if(y1!=y2)
    {
        alert("Password Dont Match!!");
        return false;
    }
}
</script>
    


<body>

    <div class="nav1">CHANGE PASSWORD</div>
    <div class="sign">

        <form name="signup"  onsubmit="return validate();" action="changepass.php" method="post">
            <fieldset>
                <legend>ID Details</legend>
                <table class="sign2">
                    <tr>
                        <td>Old Password:</td>
                        <td>
                            <input type="password" name="pass1" required>
                        </td>
                    </tr>

                    <tr>
                        <td>New Password:</td>
                        <td>
                            <input type="password" name="pass0" pattern=".{8,}"  required title="Minimum 8 length Required!!"> </td>
                    </tr>

                    <tr>
                        <td>Re-Enter New Password</td>
                        <td>
                            <input type="password" name="pass00"   required ></td>
                    </tr>
                </table>
            </fieldset>
            <br>
               <div class="sub">
            <fieldset>
                <span class="sub2"><input type="submit" name="submit" value="Submit!"></span>
    
            </fieldset>
            </div>
            <br><br>
            <div class="h">
             <div class="home" style="font-size:20px; font-weight:bold;">
               <a href="index.php">HOME</a>
             </div>
            </div>
        </form>

    </div>
    
    
    
    </body>

</html>