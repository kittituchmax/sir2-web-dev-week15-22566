<?php 
$host = "loclhost";
$username = "root";
$password = "";
$dbname = "blog-app";
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed". my_mysqli_connect_error());
}else{
    print"Connected successfully";
}