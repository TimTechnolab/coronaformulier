<?php
include("StageFormulierBackEnd.php");
?>
<html>
    <head>
        <title>Technolab Leiden | Registratie</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Toegevoegde links, hier beneden -->
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/SelectCheck.js"></script>
        <!-- Bootstrap links -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/cookie.css">
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
                                    <p>Nog Niet aangemeld? Je kan naar de aanmeld pagina gaan door rechts op aanmelden te drukken.</p>
                                    <a class="btn btn-outline-success my-2 my-sm-0" href="LoginFormulier.php">Aanmelden</a>   
                        </nav>
                    </div>
                </div>
        </div>
    </header>

    <main>
    <!-- Dit is het formulier zelf, dus waar je alles invult in de browser -->
        <form method="POST" id="MainForm">
            <h1>Stage formulier</h1>
                <div class="form-group d-flex flex-column justify-content-center">
                <!-- voornaam-->
                    <label class="p-1" for="fname"></label>
                    <input class="p-1 " type="text" id="fname" name="fname" placeholder="Voornaam" required>
              
                <!-- achternaam-->
                    <label class="p-1 " for="lname"></label>
                    <input class="p-1 " type="text" id="lname" name="lname" placeholder="Achternaam" required>
              
                <!-- telefoonnummer-->
                    <label class="p-1" for="tel"></label>
                    <input class="p-1" type="number" id="tel" name="tel" placeholder="Telefoonnummer" required>
        
                <!-- email-->
                    <label class="p-1" for="email"></label>
                    <input class="p-1" type="email" id="email" name="email" placeholder="Email" required>
            
                <!-- geboortedatum-->
                <label class="p-1" for="geboortedatum"></label>
                    <input class="p-1" type="text" id="geboortedatum" name="geboortedatum" placeholder="Geboortedatum" required>
               
                <!-- adres-->
                <label class="p-1" for="adres"></label>
                    <input class="p-1" type="text" id="adres" name="adres" placeholder="Adres" required>
               
                <!-- school-->
                <label class="p-1" for="school"></label>
                    <input class="p-1" type="text" id="school" name="school" placeholder="School" required>
               
               <!-- opleiding-->
               <label class="p-1" for="opleiding"></label>
                    <input class="p-1" type="text" id="opleiding" name="opleiding" placeholder="Opleiding" required>
               
               <!-- niveau-->
               <label class="p-1" for="niveau"></label>
                    <input class="p-1" type="number" id="niveau" name="niveau" placeholder="Niveau" required>
               
               <!-- stage leerjaar-->
               <label class="p-1" for="stageleerjaar"></label>
                    <input class="p-1" type="number" id="stageleerjaar" name="stageleerjaar" placeholder="Stageleerjaar" required>
               
                <!-- SLBer-->
                <label class="p-1" for="slber"></label>
                    <input class="p-1" type="text" id="slber" name="slber" placeholder="SLBer" required>
               
                <!-- SLBer Tel-->
                <label class="p-1" for="slbertel"></label>
                    <input class="p-1" type="text" id="slbertel" name="slbertel" placeholder="SLBer Tel" required>
               
                <!-- SLBer E-mail-->
                <label class="p-1" for="slberemail"></label>
                    <input class="p-1" type="email" id="slberemail" name="slberemail" placeholder="SLBer E-mail" required>
               
               <!-- Begin datum-->
               <label class="p-1" for="begindatum"></label>
                    <input class="p-1" type="text" id="begindatum" name="begindatum" placeholder="Begin datum" required>
               
             <!--   Eind datum-->
               <label class="p-1" for="einddatum"></label>
                    <input class="p-1" type="text" id="einddatum" name="einddatum" placeholder="Eind datum" required>
               
              <!--  Stage dagen-->
               <label class="p-1" for="stagedagen"></label>
                    <input class="p-1" type="text" id="stagedagen" name="stagedagen" placeholder="Stage dagen" required>
               

                <!-- terms-->
                <div>
                    <label><a data-toggle="modal" data-target="#myModal1" href="" style="color:black;">Terms of policy</a></label>
                    <input type="checkbox" name="true" required>
                </div>
                <!-- Modal1 -->
                <div class="modal fade" id="myModal1" role="dialog">
                    <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">Terms & Conditions</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                        <p>bij deze accepteerd u onze algemene voorwaarden.</p>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                </div>
                <div class="d-flex justify-content-center"> 
                    <button class="SubmitButtonForm" type="submit" name="submit">Registreer</button>
                </div>
            </div>
        </form>
    </main>
</body>
</html>