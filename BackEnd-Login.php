<?php
//Dit is het bestand om met de database een connectie te maken
include("db.php");

//Dit is een functie om cross-site scripting te voorkomen
function secure($value){
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

//Hier worden de gegevens opgehaald zodra er op verzenden word gedrukt
if(isset($_POST['submit'])){
    $email = secure($_POST['email']);
    $functie = secure($_POST['functie']);
    $school = secure($_POST['school']);
    $klas = secure($_POST['klas']);
    $emaill = null;
    $timestamp = null;

//hier word de laatste ingecheckte tijd opgehaald
$sqldate = "SELECT * FROM aanwezigheid WHERE email = '$email' ORDER BY timestamp ASC";
$result = mysqli_query($con, $sqldate);
     
     while($row = mysqli_fetch_array($result)) {
        $timestamp = $row['timestamp'];
     }

//hier word tijd opgehaald
$curdate = date('Y-m-d');
$strtotimestamp = strtotime($timestamp);
$datecheck = date('Y-m-d', $strtotimestamp);

//Hier word gecheckt of de gegevens bestaan in de database
$sql = "SELECT * FROM formData WHERE email = '$email'";
$result = mysqli_query($con, $sql);
     
     while($row = mysqli_fetch_array($result)) {
        $emaill = $row['email'];
    }



//hier word gekeken of je je kan aanmelden, zo niet? dan krijg je een foutmelding
if($datecheck == $curdate){
    echo "<script type='text/javascript'>alert('U heeft vandaag al het formulier ingevuld')</script>";
}elseif($email == $emaill){
    $sqlsend = "INSERT INTO aanwezigheid (email, functie, school, klas) VALUES('$email', '$functie', '$school', '$klas')";
        if(mysqli_query($con, $sqlsend)){
            echo "<script type='text/javascript'>alert('U bent aangemeld! fijne dag')</script>";
        }
        }else{
    echo "<script type='text/javascript'>alert('Uw gegevens zijn niet bekend, u moet eerst registreren voordat u kunt aanmelden')</script>";
}
}

