<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "marvelnews";

//connect ke database
$connection = mysqli_connect($host, $user, $pass, $database);

//check connection
if (!$connection) {
    die("Connection failed :" . mysqli_connect_error());
}