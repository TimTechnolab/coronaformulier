<?php
//
//try {
//    // servermethode
//    $servername = "localhost";
//    //databasenaam
//    $dbname = "coronaformulier";
//    //database username
//    $username = "root";
//    //database password
//    $password = "";
//
//    $con = new PDO(
//        "mysql:host=$servername; dbname=coronaformulier",
//        $username, $password
//    );
//
//    $con->setAttribute(PDO::ATTR_ERRMODE,
//        PDO::ERRMODE_EXCEPTION);
//}
//// als connectie gefaald is laat de volgende zien
//catch(PDOException $e) {
//    echo "Connection failed: " . $e->getMessage();
//}




$servername = "localhost";
$username = "root";
$password = "";
$database = "coronaformulier";
$con = new mysqli($servername, $username, $password, $database);
if($con->connect_error){
    die("Connection failed: " . $con->connect_error);
}

?>