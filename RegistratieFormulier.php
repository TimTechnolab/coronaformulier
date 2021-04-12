<?php
include("BackEnd-Registratie.php");
?>

<html>
<head>

    <title>Technolab Leiden | Registratie</title>
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



<!-- De achtergrond staat hier, hij werkt niet in het css bestand -->
<style>
    body {
        background-image: url("images/background.jpg");
        background-size: 100%;
        background-repeat: no-repeat;
    }
</style>

</head>
<body>



<!-- De header, staat hier onder -->
<header id="main">
            <div class="header-content-wrap">
                <div class="header-deco"></div>
                    <div class="header-content">
                        <div>
                            <nav class="navbar navbar-light shadow" style="background-color: white;">
                                <a class="navbar-brand" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                                    <img src="images/logo-technolab.svg" width="200" height="40" alt="">
                                </a>
                                <a class="btn btn-outline-success my-2 my-sm-0" href="LoginFormulier.php">Aanmelden</a>
                            </nav>
                        </div>
                    </div>
            </div>
</header>

        <main>
        <!-- Dit is het formulier zelf, dus waar je alles invult in de browser -->
    <section>
        <form method="POST" id="MainForm" action="BackEnd-Registratie.php">
            <h1>Registratie formulier</h1>
                <div class="form-group d-flex flex-column justify-content-center">
                
                    <label class="p-1" for="fname">Voornaam:</label>
                    <input class="p-1 " type="text" id="fname" name="fname" required>


                    <label class="p-1 " for="lname">Achternaam:</label>
                    <input class="p-1 " type="text" id="lname" name="lname" required>


                    <label class="p-1" for="tel">Telefoonnummer:</label>
                    <input class="p-1" type="number" id="tel" name="tel" required>


                    <label class="p-1" for="email">E-mail:</label>
                    <input class="p-1" type="email" id="email" name="email" required>

                    <label class="p-1" for="functie">Functie:</label>
                    <div class="d-flex flex-column">
                    <select class="p-1" name="functie" id="functie" onchange="yesNoCheck(this);" required>
                        <option></option>
                        <option value="werknemer">Werknemer</option>
                        <option value="gast">Gast</option>
                        <option value="leraar">Leraar</option>
                    </select>
                    <div id="ifYes">
                        <label>School</label>
                        <input type="text" id="school" name="school">
                        <label>Klas</label>
                        <input type="text" id="klas" name="klas">
                    </div>
                    </div>
                </div>
                <div>
                    <label><a href="" style="color:black;">Terms of policy</a></label>
                    <input type="checkbox" name="true" required>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="SubmitButtonForm" type="submit" name="submit">Registreer</button>
                </div>
            </div>
        </form>
    </main>
        <footer>
        </footer>
    </section>
</body>
</html>
