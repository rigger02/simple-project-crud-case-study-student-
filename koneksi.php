<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "crud";
$conect = mysqli_connect($host, $user, $pass, $db);
if (!$conect) 
    die("connection failed: ".mysqli_connect_error());
?>