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
    $fname = secure($_POST['fname']);
    $lname = secure($_POST['lname']);
    $tel = secure($_POST['tel']);
    $email = secure($_POST['email']);
    $geboortedatum = secure($_POST['geboortedatum']);
    $school = secure($_POST['school']);
    $adres = secure($_POST['adres']);
    $opleiding = secure($_POST['opleiding']);
    $niveau = secure($_POST['niveau']);
    $stageleerjaar = secure($_POST['stageleerjaar']);
    $slber = secure($_POST['slber']);
    $slbertel = secure($_POST['slbertel']);
    $slberemail = secure($_POST['slberemail']);
    $begindatum = secure($_POST['begindatum']);
   $einddatum = secure($_POST['einddatum']); 
    $stagedagen = secure($_POST['stagedagen']);
    $TOS = "true";

//Hier word gecheckt of de gegevens al bestaan in de database
$sql = "SELECT * FROM stagaires WHERE email = '$email'";
$result = mysqli_query($con, $sql);
     
     while($row = mysqli_fetch_array($result)) {
        $emaill = $row['email'];
    }

 if(!isset($emaill)){
   $sqlsend = "INSERT INTO stageperiode (email, begindatum, einddatum, stagedagen) VALUES($email', '$begindatum', '$einddatum', '$stagedagen')";
if(mysqli_query($con, $sqlsend)){
        $sqlsend = "INSERT INTO stagiaires (voornaam, achternaam, email, telefoonnummer, school, opleiding, niveau, stageleerjaar, slber, slbertel, slberemail) VALUES('$fname', '$lname', '$email', '$tel', '$school', '$opleiding' '$niveau', '$stageleerjaar', '$slber', '$slbertel', '$slberemail')";
        if(mysqli_query($con, $sqlsend)){
            echo "<script type='text/javascript'>alert('Het formulier is succesvol verzonden!')</script>";
        }
    }
}else{
    echo "<script type='text/javascript'>alert('Uw gegevens bestaan al!')</script>";
}
}
