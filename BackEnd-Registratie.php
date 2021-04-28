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
    $functie = secure($_POST['functie']);
    $school = secure($_POST['school']);
    $klas = secure($_POST['klas']);
    $TOS = "true";

  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//Hier word gecheckt of de gegevens al bestaan in de database
$sql = "SELECT * FROM formData WHERE email = '$email'";
$result = mysqli_query($con, $sql);

     while($row = mysqli_fetch_array($result)) {
        $emaill = $row['email'];
    }

if(!isset($emaill)){
    $sqlsend = "INSERT INTO formData (voornaam, achternaam, telefoonnummer, email, TOS) VALUES('$fname', '$lname', '$tel', '$email', '$TOS')";
    if(mysqli_query($con, $sqlsend)){
        $sqlsend = "INSERT INTO aanwezigheid (email, functie, school, klas) VALUES('$email', '$functie', '$school', '$klas')";
        header("Location: RegistratieFormulier.php?info=success");
        }
    } else{
    header("Location: RegistratieFormulier.php?info=fout");
}
}
