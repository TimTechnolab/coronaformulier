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


// hier word gecheckt of alles is ingevuld en er word gekeken of de inlog gegevens kloppen met wat er in de database staat
if(isset($_POST['submit'])){
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $username = secure($_POST['username']);
        $password = secure($_POST['password']);
        $sql = "SELECT * FROM admin WHERE Gebruikersnaam = '".$username."'";
            if($result = $con->query($sql)){
                $dbusername = $result->fetch_row();
                $dbpassword = $dbusername[2];
                    if(password_verify($password, $dbpassword)){
                        session_start();
                        $_SESSION['ingelogd'] = true;
                        header("location: admin-menu.php");
                    }else{
                        echo "<script type='text/javascript'>alert('Gebruikersnaam of wachtwoord onjuist')</script>";
                    }
            }
    }
}
?>
