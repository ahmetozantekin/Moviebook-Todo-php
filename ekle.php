<?php include("connect.php"); ?>
<html>
    <head>
        <style>
        .back{
           position: fixed;
           left: 0;
           right: 0;
           z-index: 1;
           display: block;
           width: 1500px;
           height:1000px;

           -webkit-filter: blur(5px);
           -moz-filter: blur(5px);
           -o-filter: blur(5px);
           -ms-filter: blur(5px);
           filter: blur(5px);
        }
            
            .form{
                font-size:25px;
            color:white;
            position: fixed;
            left: 0;
            right: 0;
            z-index: 9999;
            margin-left:0px;
            margin-top :15px;
            }
        
        </style>
        
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

        <!-- Plugin CSS -->
        <link rel="stylesheet" href="css/animate.min.css" type="text/css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/creative.css" type="text/css">
    </head>
    
    <body>
        <?php 

        //background.

        $link1 = "http://www.xvidbox.com/wp-content/uploads/2014/03/lebowski1.jpg";
        $link2 = "https://d12vb6dvkz909q.cloudfront.net/uploads/galleries/21946/reservoir_dogs_white.jpg";
        $link3 = "https://i.ytimg.com/vi/WSLMN6g_Od4/maxresdefault.jpg";
        $link4 = "http://computerwallpapers.org/wp-content/uploads/2014/05/wpid-The-Godfather-Wallpaper-13.jpg";
        $link5 = "http://m.cdn.blog.hu/me/mediaviagra/image//Nagymen%C5%91k%20kritika1.jpg";
        $link6 = "http://khongthe.com/wallpapers/entertainment/fight-club-36167.jpg";
        $link7 = "http://3.bp.blogspot.com/-yHX2SziNTLQ/VOpTvTogCZI/AAAAAAAAAXY/NiwfzvEgrbI/s1600/19-on_the_waterfront-promo.png";
$link8="http://comediennes.org/actrices/img/plan/judy_devient_madeleine_Kim_Novak_vertigo_hitchcock_sueurs_froides_1958_vert_apparition_77.jpg"; 
        $link9=  "http://www.raindance.org/toronto/files/2014/02/arnaques-crimes-et-botanique-1373362502-123.jpg";
        
        /*
        *
        *   ADD LINK HERE...
        *
        */

        $backgroundarray  =array($link1, $link2, $link3, $link4, $link5, $link6, $link7, $link8, $link9);
        $num = rand(0,9);// change max limit
        
        ?>
        <div class="back" style="background-image: url('<?= $backgroundarray[$num] ?>');"></div>
        <div class="form">
            <form action="ekle.php" method="post">
                <br><br>
                <input class="form-control" style ="margin:auto; width:150px" type="text" name="isim" placeholder="isim"><br>
                <input class="form-control" style ="margin:auto; width:250px" type="text" name="pic"  placeholder="link"><br><br>
                <input type="submit"  style ="margin:auto; width:70px; color:#f05f40;" class="form-control" name="buton" value="GO"><br>
            
            </form>
        
            <a style="margin-left:630px; font-size:15px;" href="index.php">Ana Sayfaya Don</a>
        </div>
    </body>
</html>

<?php
if($_POST){
    
$isim  = $_POST['isim'];
$pic   = $_POST['pic'] ;


$query = "INSERT INTO movie(movie_id,movie_name,movie_pic) 
        VALUES('','$isim','$pic')";

$d = mysql_query($query);


if ($d){echo "oldu";
       }else {
    echo "yemedi";
        }
}


?>