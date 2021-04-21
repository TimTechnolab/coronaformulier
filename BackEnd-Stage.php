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
    //alle files worden opgehaald van het form en cross site scripting veilig gemaakt via de secure functie
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

    //makes sure that mysqli reports the errors in full detail
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    //get the values from the browser
    $a = $_GET['id'];
    $c = $_GET['send'];

    //the database you connect and what you want to get from it.
    $query = mysqli_query($con, "SELECT * FROM onetimelink WHERE id= '".$a."' ");
    $sql = mysqli_query($con, "SELECT * FROM formdata2 WHERE email = '$email'");

    //checks if eather query went through
    if(!$sql && !$query) {
        mysqli_error($con);
    }
    //get submitted email
    while($row = mysqli_fetch_array($sql)) {
        $emaill = $row['email'];
    }
    //check if link has been used before.
    if ($c == "link"){
      header("Location: redirect.php?id=".$a."&send=link");
    }
    //check if email has been used before
    if(!isset($emaill)){
      //check if the link has been used and send back if it has
      if( mysqli_num_rows($query) > 0){
        header("Location: redirect.php?id=".$a."&send=link");
      } else{
        //prepare insert of one time link into database
        $stmt = $con->prepare( "INSERT INTO OneTimeLink VALUES (?)");
        //bind (confirm) the insert into the database
        $stmt->bind_param('s', $a);
        //insert into the database
        $result = $stmt->execute();

        //prepare insert of one alle stagiair data into database
        $stmt2 = $con->prepare("INSERT INTO formdata2 VALUES  (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        //bind (confirm) the insert into the database
        $stmt2->bind_param('ssssssssssssss', $fname,$straat,$stad,$postcode,$gebdatum,$tel,$email,$school,$opleiding,$niveau,$stagejaar,$slb,$slbTele,$slbEmail);
        //insert into the database
        $result2 = $stmt2->execute();

        //if the insertions succeed send back with keyword succes otherwise failure.
        if($result && $result2){
          header("Location: redirect.php?id=".$a."&send=success");
        } else {
          header("Location: redirect.php?id=".$a."&send=failure");
        }

      }
    }
}
