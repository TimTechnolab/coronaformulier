<?php

$servername = "localhost";
$username = "root";
$password = "#!TechnoBoiis";
$database = "test";
$con = new mysqli($servername, $username, $password, $database);
if($con->connect_error){
    die("Connection failed: " . $con->connect_error);
}
