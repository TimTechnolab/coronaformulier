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
    $adres = secure($_POST['straat']);
    $adres = secure($_POST['stad']);
    $adres = secure($_POST['postcode']);
    $gebdatum = secure($_POST['gebdatum']);
    $tel = secure($_POST['tel']);
    $email = secure($_POST['email']);
    $school = secure($_POST['school']);
    $opleiding = secure($_POST['Opleiding']);
    $niveau = secure($_POST['Niveau']);
    $stagejaar = secure($_POST['stagejaar']);
    $slb = secure($_POST['Slb-er']);
    $slbTele = secure($_POST['Slb-ertel']);
    $slbEmail = secure($_POST['Slb-ermail']);

    //Hier word gecheckt of de gegevens al bestaan in de database
    $a = $_GET['id'];
    $c = $_GET['send'];
    $b = 'a';
    $query = mysqli_query($con, "SELECT * FROM OneTimeLink WHERE id= '".$a."' ");
    $sql = "SELECT * FROM formdata2 WHERE email = '$email'";
    $result = mysqli_query($con, $sql);

    if(!$result) {
        mysqli_error($con);

    }

     if($row = mysqli_fetch_array($result)) {
        $emaill = $row['email'];
    } else {
      echo "Oh no.";
    }

    if(!isset($emaill)){
        if(mysqli_num_rows($query) > 0){
            echo "<script type='text/javascript'>alert('This link has already been used!')</script>";
            header("Location: redirect.php?id=".$a."&send=link");
        } else {
          $sql = "INSERT INTO OneTimeLink (id) VALUES ('$a')";
          $sqlsend = "INSERT INTO formdata2 (voornaam, adres, geboorteDatum, telefoon, email, school, opleiding, niveau, stagejaar, slber, slbTelefoon, slbMail)
            VALUES('$fname', '$adres', '$gebdatum', '$tel', '$email', '$school', '$opleiding', '$niveau', '$stagejaar', '$slb', '$slbTele', '$slbEmail')";
          if(mysqli_query($con, $sqlsend)){
              echo "<script type='text/javascript'>alert('Het formulier is succesvol verzonden. U bent meteen aangemeld, morgen kunt u weer opnieuw aanmelden.')</script>";
              header("Location: redirect.php?id=".$a."&send=succes ");
          }
          }
          if ($con -> query($sql)) {
            // echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $con->error;
            echo $con -> connect_error;
          }

   } else {
      echo "<script type='text/javascript'>alert('Uw gegevens bestaan al! U kunt aanmelden')</script>";
      header("Location: redirect.php?id=".$a."&send=ja ");
    }
}
