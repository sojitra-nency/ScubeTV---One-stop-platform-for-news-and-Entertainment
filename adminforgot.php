<!DOCTYPE html>

<html>

<head>
    <title>Admin Forgot</title>

<link rel="stylesheet" type="text/css" href="login.css">   
</head>

    

    
<script>
function validate() {
    var x = document.forms["signup"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
    
    
}
</script>
    


<body>

    <div class="nav1">Admin :Forgot Password</div>
    <div class="sign">

        <form name="signup"  onsubmit="return validate();" action="forgotadmin.php" method="post">
            <fieldset>
                <legend>ID Details</legend>
                <table class="sign2">
                    <tr>
                        <td>Email ID</td>
                        <td>
                            <input type="email" name="email" required>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <br>
               <div class="sub">
            <fieldset>
                <legend>Completion</legend>
                <p><input type="checkbox" name="checkbox" required>I agree Terms &amp; Conditions</p>
                <span class="sub2"><input type="submit" name="submit" value="Submit!"></span>
                <a href="index.php">|&nbsp;&nbsp;&nbsp;Home</a></p>
            </fieldset>
            </div>
        </form>

    </div>
    
    
    </body>

</html>