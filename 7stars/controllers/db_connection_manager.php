<?php
//database connection information
$host = "localhost";
$username = "root";
$password = "";
$database = "7stars";

$conn = mysqli_connect($host, $username, $password, $database) or die("Cant connect to database");