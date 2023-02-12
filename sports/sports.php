<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPORTS NEWS</title>
    <link  href="css/bootstrap.css" rel="stylesheet">
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="sports.css">
    <style>
         .redirect{
            text-align: center;
         }

         a:link, a:visited{
            color: black;
            font-weight: 900;
         } 
    </style>
</head>
<body>
    <?php
    $url = 'http://newsapi.org/v2/top-headlines?country=in&category=sports&apiKey=7d36cd4c40b54c858ab780d317f58895';
    // $url = 'https://joke3.p.rapidapi.com/v1/joke&apiKey=2c6e367ab4mshb8ed9d01512d504p161bc3jsnd9e71ae00c73';
    $response = file_get_contents($url);
    $NewsData = json_decode($response);
    ?>                           
    <div class="jumbotron">
        <h1>SPORTS NEWS</h1>
        
    </div>

    <div class="container-fluid">
        <?php
        foreach($NewsData->articles as $News)
        {
        ?>
        <div class="row NewsGrid">
            <div class="col-md-3">
                <img src="<?php echo $News->urlToImage  ?>" alt="News thumbnail" class="rounded" >
            </div>
            <div class="col-md-9">
                <h2>Title: <?php echo $News->title  ?></h2>
                <h5>Description: <?php echo $News->description  ?></h5>
                Content: <?php echo $News->content?> <a href="<?php echo $News->url ?>" target="_blank">Read more</a>   
                <h6>Author <?php echo $News->author  ?></h6>
                <h6>Published <?php echo $News->publishedAt ?></h6>
            </div>
        </div>    
        <?php
        }
        
        ?>

        <div class="redirect"><a href="../index.php">Home</a></div>   
    </div>
    <br><br>
    
</body>
</html>