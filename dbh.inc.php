<?php

$db_servername = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "login_system";

$conn = mysqli_connect($db_servername, $db_user, $db_password, $db_name);

if(!$conn){
    die("Could not connect to database: ".mysqli_connect_error());
}