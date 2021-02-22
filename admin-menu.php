<?php
include("db.php");
Session_Start();

// Hier word gekeken of er een sessie ingelogd bestaat
if($_SESSION['ingelogd'] == true) { 
?>

<html>
    <head>
        <title>Technolab Leiden | Admin menu</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Bootstrap links -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        
        <!-- Toegevoegde links, hier beneden -->
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="SelectCheck.js"></script>
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
                                <a class="dropdown-item" href="AdminPaneel.php">CoronaFormulier</a>
                                <a class="dropdown-item" href="laptop-admin.php">Laptop leen formulier</a>
                                <a class="dropdown-item" href="adminStagiaires.php">Stagiaires</a>
                                <a class="dropdown-item" href="adminStagePeriode.php">Stage periodes</a>
                            </div>
                        </div>
                            <a class="navbar-brand" href="">
                                <img src="images/logo-technolab.svg" width="200" height="40" alt="">
                            </a>
                            <div class="d-flex flex-column">
                                <a class="btn btn-outline-success" href="register.php">Nieuwe admin registreren</a>   
                                <a class="btn btn-outline-success" href="AdminUitloggen.php">Uitloggen</a>   
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
    </header>
    <main>
        <div class="d-flex justify-content-center mt-5">
            <h1>Welkom bij het admin menu</h1>
        </div>
        <!-- dit is de navigatie naar andere admin pagina's -->
        <div class="d-flex justify-content-center flex-column">
            <a class="btn btn-outline-success py-3 m-3" href="AdminPaneel.php">CoronaFormulier</a>
            <a class="btn btn-outline-success py-3 m-3" href="laptop-admin.php">Laptop leen formulier</a>
            <a class="btn btn-outline-success py-3 m-3" href="adminStagiaires.php">Stagiaires</a>
            <a class="btn btn-outline-success py-3 m-3" href="adminStagePeriode.php">Stage periodes</a>
        </div>
    </main>
</body>
</html>

<?php
// als de sessie ingelogd niet bestaat word je terug gestuurd naar de login pagina
}else{
    header("Location: AdminLogin.php");
}
?>