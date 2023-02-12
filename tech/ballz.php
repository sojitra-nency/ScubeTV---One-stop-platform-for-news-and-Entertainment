<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUICK NEWS</title>
    <link  href="css/bootstrap.css" rel="stylesheet">
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="ballz.css">
    <style>
         .redirect{
            text-align: center;
            font-size: 35;
         }

         a:link, a:visited{
            color: black;
            font-weight: 900;
         }
    </style>
</head>
<body>
    <?php
    $url = 'https://newsapi.org/v2/top-headlines?sources=bbc-news&apiKey=7d36cd4c40b54c858ab780d317f58895';
    $response = file_get_contents($url);
    $NewsData = json_decode($response);
    ?>
    <div class="jumbotron">
        <h1>BREAKING NEWS</h1>

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
                <h1>Title: <?php echo $News->title  ?></h1>
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