<?php
$host = "db";
$user = "root";
$pass = "1234";
$db = "db_test";
$port = 3306;

try{
    $link = mysqli_connect($host,$user,$pass,$db,$port);
    mysqli_query($link, "SET NAME utf8");

}catch(Excepiont $e){}
    echo $e ." :: " . mysqli_errno($link);


?>