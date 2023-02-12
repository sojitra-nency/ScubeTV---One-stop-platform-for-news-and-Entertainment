<!DOCTYPE html>
<?php
include ('session.php');
include ('connect.php');
$username=$_SESSION['finalname'];
?>
    <html>

    <head>
        <title>Premium Page</title>
        <link rel="stylesheet" type="text/css" href="premium.css"> 
        <link rel="icon" type="text/css" href="images/crown.png">
        <!-- Latest compiled and minified CSS -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

    </head>
    <body>
        <div class="main">
            <div class="nav">
                <div class="logo"><img src="images/crown.png" width=60 height="60"></div>
                <div class="main1">
                    <ul>
                        <li><a href="#movies1">MOVIES</a></li>
                        <li><a href="#tv1">TV SERIES</a></li>
                        <li><a href="#magazines1">MAGAZINES</a></li>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="changepassword.php">PASSWORD</a></li>
                    </ul>
                </div>
                <div class="logout">
                    <?php
            echo "<form action='logout.php'>";
            echo "<input type='submit' name='submit' value='LOG OUT'>";
            echo "</form>";
?>
                </div>
            </div>
            <div class="user">
                <br>
                <br>
                <h1>Welcome, <?php echo  ucwords($username);?> </div>
        </div>
            
               
        <div id="movies1"></div>
        <div class="nav2">
            <br>
            <br>
            
            <div class="headings">
                
            <div class="next"><a href="#tv1"><img src="images/down.png" width=50px height=50px></a></div>  
            <h1>Movies</h1> </div>
            <br>
            <div class="form1">
                <?php
            
            $query="select * from movies;";
            $run=mysqli_query($connect,$query);
            
            while($row=mysqli_fetch_assoc($run))
            {
                
                $image=$row['image'];
                $name=$row['name'];
                $url=$row['url'];
                $price=$row['price'];
                
                echo "<form name='movies' action='buy.php' method='post'>";
                echo "<div ><img src=m_images/".$image.".jpg width='300px' height='150px'><h4>".$name."</h4></div>";
                echo '<div><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal_'.$row['id'].'">Trailer</button></div>';
                echo "<br>";
                echo "<input type='hidden' name='name' value='$name'>";
                echo "<input type='hidden' name='price' value='$price'>";
                echo "<input type='submit' name='submit' value='Buy For RS.".$price."'>";
                echo "</form>";
                echo '<div class="modal fade" id="myModal_'.$row['id'].'" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">'.$image.'</h4>
                      </div>
                      <div class="modal-body">
                        <iframe width="560" height="315" src="'.$url.'">
                        </iframe>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                    
                  </div>
                </div>';
            }
            
            
            
?>
            </div>
            <br> </div>
        <div id="tv1"></div>
        <div class="nav3">
            <br>
            <br>
            <div class="headings">
                <div class="next">
                    <a href="#magazines1"><img src="images/down.png" width=50px height=50px></a>
                </div>
                <h1>TV SERIES</h1> </div>
            <br>
            <div class="form1">
                <?php
            
            $query="select * from tvseries;";
            $run=mysqli_query($connect,$query);
            
            while($row=mysqli_fetch_assoc($run))
            {
                
                $image=$row['image'];
                $name=$row['name'];
                $url=$row['url'];
                $price=$row['price'];
                
                echo "<form name='movies' action='buy.php' method='post'>";
                echo "<div ><img src=m_images/".$image.".jpg width='300px' height='150px'><h4>".$name."</h4></div>";
                echo '<div><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal_'.$row['id'].'">Trailer</button></div>';
                echo "<br>";
                echo "<input type='hidden' name='name' value='$name'>";
                echo "<input type='hidden' name='price' value='$price'>";
                echo "<input type='submit' name='submit' value='Buy For RS.".$price."'>";
                echo "</form>";
                echo '<div class="modal fade" id="myModal_'.$row['id'].'" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">'.$image.'</h4>
                    </div>
                    <div class="modal-body">
                      <iframe width="560" height="315" src="'.$url.'">
                      </iframe>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  
                </div>
              </div>';
            }
            
            
            
?>
            </div>
            <br> </div>
        <div id="magazines1"></div>
        <div class="nav4">
            <br>
            <br>
            <div class="headings">
                <div class="next">
                    <a href="#top"><img src="images/up.png" width=50px height=50px></a>
                </div>
                <h1>Magazines</h1> </div>
            <br>
            <div class="form1">
                <?php
            
            $query="select * from magazines;";
            $run=mysqli_query($connect,$query);
            
            while($row=mysqli_fetch_assoc($run))
            {
                
                $image=$row['image'];
                $name=$row['name'];
                $url=$row['url'];
                $price=$row['price'];
                
                echo "<form name='movies' action='R.php' method='post'>";
                echo "<div ><img src=m_images/".$image.".jpg width='250px' height='300px'><h4>".$name."</h4></div>";
  
                echo "<input type='hidden' name='name' value='$name'>";
                echo "<input type='hidden' name='price' value='$price'>";
                echo "<input type='submit' name='submit' value='Free'>";
                echo "<br>";
                echo "<button type=button class='btn btn-info btn-sm'><a href='$url'>Preveiw</a></button>";
                echo "</form>";
        
            
            }      
            
?>
            </div>
            <br> </div>
    </body>

    </html>