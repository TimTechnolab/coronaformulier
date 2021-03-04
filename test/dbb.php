<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = 'test';
$db_pass = '';
$database = "test";
$con = new mysqli($servername, $username, $password, $database);
$dbcon = new mysqli($servername, $username, $db_pass, $database);
if($con->connect_error || $dbcon->connect_error){
    die("Connection failed: " . $con->connect_error);
}
