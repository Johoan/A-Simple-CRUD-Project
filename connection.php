<?php 

$user = 'root';
$password = 'root';
$db = 'login_sample_db';
$host = 'localhost';
$port = 3311;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);

if(!$success)
{
    die("failed to connect");
}



?>