<?php
//database connection
$server = "localhost";
$user = "root";
$password = "";
$db_name = "ecomm-bootstrap";

$con = mysqli_connect($server,$user,$password,$db_name);

if (!$con) {
    echo 'Database connection failed!';
}