<?php include("connect.php"); ?>

<?php
    $mid = $_GET["mid"];
    $query = mysql_query("DELETE FROM movie WHERE movie_id= $mid ");
      
?>

<html>
    <head>
        <style>
            
       .back {
           position: fixed;
           left: 0;
           right: 0;
           z-index: 1;

           display: block;
           background-image: url('https://d12vb6dvkz909q.cloudfront.net/uploads/galleries/21946/reservoir_dogs_white.jpg');
           width: 1500px;
           height:1000px;

           -webkit-filter: blur(5px);
           -moz-filter: blur(5px);
           -o-filter: blur(5px);
           -ms-filter: blur(5px);
           filter: blur(5px);
            }

        .ic {
            position: fixed;
            left: 0;
            right: 0;
            z-index: 9999;
            margin-left: 1220px;
            margin-top : 30px;
            }
            
        </style>
        
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

        <!-- Plugin CSS -->
        <link rel="stylesheet" href="css/animate.min.css" type="text/css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/creative.css" type="text/css">
    </head>
    
    <body>
        <div class="back"></div>
        <div class="ic">
            <?php //if($query){ ?>
            <h1 style="font-size:120px;"><?= $_GET["mid"]; ?></h1> 
            <h5 style="margin-left:60px">Deleted</h5>
            <?php //} ?>
            <a href="index.php">Ana Sayfaya Don</a>
        </div>
    </body>
</html>

