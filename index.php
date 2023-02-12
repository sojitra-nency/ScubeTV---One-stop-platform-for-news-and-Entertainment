<!DOCTYPE html>
<?php
include ('session2.php');

?>

<html>

<head>
    <title>S3TV: HOME</title>
    <script type="text/javascript">
        var count = 0;
        var picarray = ["images/2.jpg", "images/3.png", "images/4.jpg", "images/5.jpg"];

        function nextpic() {
            count = (count == picarray.length - 1) ? count = 0 : count + 1;
            var imag = '<img src="' + picarray[count] + '" width="100%" height="100%">';
            document.getElementById("topnews").innerHTML = imag;
            setTimeout('nextpic()', 2000);
        }
    </script>
    <script>
        
        
        
        function mouseover1(x)
        {
            document.getElementById("topnews2").innerHTML="<img src='images/"+x+"' width='100%' height='100%' >";
        }
        
        
        
        
    </script>
</head>
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="icon" type="text/css" href="images/logo.png">

<body onload="setTimeout('nextpic()',2000)">
    <div class="nav1">
        <div class="logo0"></div>
        <div class="logo1"><a href="index.php">&nbsp;&nbsp;S<sup>3</sup>TV</a></div>
        <div class="logo2">
            
            
                
            <?php
            
            if(!isset($_SESSION["finalname"]))
            
                echo "<a href='login.php'>Login</a><a href='signup.html'>&nbsp;|&nbsp;Sign Up</a>";
            
            else echo "<a href='premium.php'>Welcome, ".ucwords($_SESSION['finalname'])."</a>";  
                    ?>
        
        
        </div>
    
    
    </div>
    <div class="opt1">
        <ul>
            <li><a href="#highlights">QUICK NEWS</a></li>
            <li><a href="sports/sports.php">SPORTS</a></li>
            <li><a href="weather2/weather.php">WEATHER</a></li>
            <li><a href="premium.php">PREMIUM</a></li>
            <li><a href="about.html">ABOUT</a></li>
        </ul>
    </div>
    <div class="marq">
        <marquee scrollamount=10 behavior="scroll">
            <ul>
                <li>&nbsp;&nbsp;&bull;Joe Biden Is New President</li>
                <li>&nbsp;&nbsp;&bull;Ronaldo Looking For a New Club</li>
                <li>&nbsp;&nbsp;&bull;Nifty Ends Below 14,700</li>
                <li>&nbsp;&nbsp;&bull;Less Amount Of Voting This Year</li>
                <li>&nbsp;&nbsp;&bull;West Bengal's Infrastructure Development</li>
            </ul>
        </marquee>
    </div>
    <div id="topnews"></div>
    <div id="topnewsdiv">
        <div id="topnews2"></div>
        <div id="topnav">
            <ul>
                <li onmouseover="mouseover1('covid.jpg')">Covid-19 Bounces back in Mumbai after Elections.</li>
                <li onmouseover="mouseover1('dark.jpg')">Dark on Netflix Breaking Records</li>
                <li onmouseover="mouseover1('gold.jpg')">Gold Price Getting Down</li>
                <li onmouseover="mouseover1('snowfall.jpg')">Snowfall - Army Rescued Tourists Stuck In Sikkim</li>
                <li onmouseover="mouseover1('srilanka.jpg')">Sri Lanka - Hopes to Appoint Tom Moody as director of Cricket</li>
                <li onmouseover="mouseover1('hyundai.jpg')">Hyundai Aims to Strengthen its SUV lineup in India</li>
                <li onmouseover="mouseover1('family.jpg')">Family Man 2 - Postponed Again</li>
                <li onmouseover="mouseover1('mars.jpg')">The First Helicopter on Mars Phones home after Landing</li>
            </ul>
        </div>
    </div>
    <div id="highlights"></div>
    <div class="high">
        <a href="tech/ballz.php" style="width:100%"><div class="htech">
            <div class="fonthigh">
                <h1>QUICK NEWS:<br>LATEST NEWS</h1> </div>
        </div></a>
        
        
        <a href="weather2/weather.php" style="width:100%"><div class="hweather">
            <div class="fonthigh">
                <h1>Can Today's Weather be a problem?<br>Check it!</h1> </div>
            </div></a>
            
            
        <!-- <a href="premium.php" style="width:100%"><div class="htv"> -->
            <!-- <div class="fonthigh"> -->
         <!-- <h1>See Whats Going On:<br>Sherlock Holmes <br> Game Of Thrones!</h1> </div> -->
            <!-- </div></a>  -->
            
            
        <a href="sports/sports.php" style="width:100%"><div class="hsports">
            <div class="fonthigh">
                <h1>Sports News </h1> </div>
            </div></a>
            
            
        <!-- changes done -->
        <!-- commented code is copied here -->
        <!--  because i thought premium pakages should be at bottom and -->
        <!-- items that are free should be displayed first  --> 
         <a href="premium.php" style="width:100%"><div class="htv">
            <div class="fonthigh">
                <h1>See Whats Going On:<br>Sherlock Holmes <br> Game Of Thrones!</h1> </div>
            </div></a>

        <a href="premium.php" style="width:100%"><div class="hprem">
            <div class="fonthigh">
                <h1>Check Out:<br>Premium Magazines &amp; Lot More!</h1> </div>
            </div></a>
    </div>
    <footer><a href="about.html">&copy;S<sup>3</sup>TV ALL RIGHTS RESERVED</a></footer>
</body>

</html>