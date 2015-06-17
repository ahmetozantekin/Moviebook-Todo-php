<?php 
 
$host        ='localhost';
$user        ='root';
$password    ='';
$veritabani  ='moviebook';
 
$connection  =mysql_connect("localhost", "root", "");
    
if($connection) {
    
mysql_select_db("moviebook", $connection);


}else { echo 'Hata : Veritabanı bağlantısı kurulamadı!'; }

?>
