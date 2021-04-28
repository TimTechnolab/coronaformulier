<?php
include("db.php");

$sqlBeschik = $con->query("SELECT laptopnaam FROM laptop WHERE status = 'beschikbaar'");
// functie tegen cross-scripting
function secure($value){
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}
// Het versturen van de data naar de database
if(isset($_POST['submit'])){
    $email = secure($_POST['email']);
    $laptop = secure($_POST['laptop']);

    $sqlCheck = "SELECT * FROM formdata WHERE email = '$email'";
    $result = mysqli_query($con, $sqlCheck);
     
     while($row = mysqli_fetch_array($result)) {
        $emailCheck = $row['email'];
    }
    if(isset($emailCheck)){
        $sqlUpdate = "UPDATE laptop SET status = 'geleend' WHERE laptopnaam = '$laptop'";
    if(mysqli_query($con, $sqlUpdate)){
                echo "<script type='text/javascript'>alert('Laptop is succesvol geleend.')</script>";
                $url1=$_SERVER['REQUEST_URI'];
                header("Refresh: 0.1; URL=$url1");
            }
        }else{
            echo "<script type='text/javascript'>alert('Uw email bestaat niet, graag eerst registreren.')</script>";
        }
    }
?>

<html>
    <head>
        <title>Technolab Leiden | LeenFormulier inchecken</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Toegevoegde links, hier beneden -->
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="SelectCheck.js"></script>
        <!-- Bootstrap links -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
<body>
    <!-- De header, staat hier onder -->
    <header id="main">
        <div class="header-content-wrap">
            <div class="header-deco"></div>
                <div class="header-content">
                    <div>
                        <nav class="navbar navbar-light shadow d-flex justify-content-between" style="background-color: white;">
                            <div class="dropdown">
                                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <!-- Dit zijn de elementen in het dropdown menu -->
                                        <a class="dropdown-item" href="LoginFormulier.php">Aanmeld formulier</a>
                                        <a class="dropdown-item" href="RegistratieFormulier.php">Registratie formulier</a>
                                        <a class="dropdown-item" href="leenformulierInchecken.php">Leen formulier inchecken</a>
                                        <a class="dropdown-item" href="leenformulierUitchecken.php">Leen formulier uitchecken</a>
                                    </div>
                            </div>
                                <a class="navbar-brand" href="">
                                    <img src="images/logo-technolab.svg" width="200" height="40" alt="">
                                </a>
                            <a class="btn btn-outline-success my-2 my-sm-0" href="leenformulierUitchecken.php">Uitchecken</a>   
                        </nav>
                    </div>
                </div>
        </div>
    </header>
    <main>
    <!-- Dit is het formulier zelf, dus waar je alles invult in de browser -->
        <form method="POST" id="MainForm">
            <h1>Leen formulier inchecken</h1>
                <div class="form-group d-flex flex-column justify-content-center">
                    <label class="p-1" for="email">E-mail:</label>
                    <input class="p-1" type="email" id="email" name="email" placeholder="Email" required>
                    <label class="p-1" for="functie">Laptop:</label>
                <div class="d-flex flex-column" placeholder="Functie">
                    <select class="p-1" name="laptop" id="laptop" required>
                        <option></option>
                        <?php while($row = $sqlBeschik->fetch_assoc()){?>
                        <option value="<?=$row['laptopnaam']?>"><?=$row['laptopnaam']?></option>
                        <?php } ?>
                    </select>
                <div class="d-flex justify-content-center"> 
                    <button class="SubmitButtonForm" type="submit" name="submit">Inchecken</button>
                </div>
            </div>
        </form>
    </main>
</body>
</html>