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
    $straat = secure($_POST['straat']);
    $postcode = secure($_POST['postcode']);
    $stad = secure($_POST['stad']);
    $gebdatum = secure($_POST['gebdatum']);
    $tel = secure($_POST['tel']);
    $email = secure($_POST['email']);
    $school = secure($_POST['school']);
    $opleiding = secure($_POST['Opleiding']);
    $niveau = secure($_POST['Niveau']);
    $stagejaar = secure($_POST['stagejaar']);
    $niveau = secure($_POST['Slb-er']);
    $klas = secure($_POST['Slb-ertel']);
    $stagejaar = secure($_POST['Slb-ermail']);
    $slb = secure($_POST['Slb-er']);
    $slbTele = secure($_POST['Slb-ertel']);
    $slbEmail = secure($_POST['Slb-ermail']);

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    //Hier word gecheckt of de gegevens al bestaan in de database
    $a = $_GET['id'];
    $query = mysqli_query($con, "SELECT * FROM OneTimeLink WHERE id= '".$a."' ");
    $sql = "SELECT * FROM formdata2 WHERE email = '$email'";
    $result = mysqli_query($con, $sql);

    if(!$result) {
        mysqli_error($con);
    }

     while($row = mysqli_fetch_array($result)) {
        $emaill = $row['email'];
    }

    if(!isset($emaill)){
      $stmt = $con->prepare( "INSERT INTO OneTimeLink VALUES (?)");
      $stmt->bind_param('s', $a);
      $stmt->execute();
      if( mysqli_num_rows($query) > 0){
        header("Location: redirect.php?id=".$a."&send=link");
      } else{
        $stmt2 = $con->prepare("INSERT INTO formdata2 VALUES  (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt2->bind_param('ssssssssssssss', $fname,$straat,$stad,$postcode,$gebdatum,$tel,$email,$school,$opleiding,$niveau,$stagejaar,$slb,$slbTele,$slbEmail);
        $stmt2->execute();
      }
    }
    //     if(mysqli_num_rows($query) > 0){
    //       header("Location: redirect.php?id=".$a."&send=link");
    //     } else {
    //       $sql = "INSERT INTO OneTimeLink (id) VALUES ('$a')";
    //       $insertId = mysqli_query($con, $sql);
    //       $sqlsend = "INSERT INTO formdata2 (voornaam, staart, postcode, stad, geboorteDatum, telefoon, email, school, opleiding, niveau, stagejaar, slber, slbTelefoon, slbMail)
    //         VALUES('$fname', '$straat', '$stad', '$postcode', '$gebdatum', '$tel', '$email', '$school', '$opleiding', '$niveau', '$stagejaar', '$slb', '$slbTele', '$slbEmail')";
    //       $insertData = mysqli_query($con, $sqlsend);
    //       if($insertData){
    //             header("Location: redirect.php?id=".$a."&send=failure");
    //       } else{
    //         header("Location: redirect.php?id=".$a."&send=success");
    //       }
    //     }
    // } else {
    //   header("Location: redirect.php?id=".$a."&send=ja");
    // }
}
