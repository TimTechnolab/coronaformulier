<?php
include("BackEnd-Login.php");
include("DeleteFunction.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technolab Leiden | Aanmelden</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- javascript link -->
    <script type="text/javascript" src="SelectCheck.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</head>
<style>
    body {
        background-image: url("images/background.jpg");
        background-size: 100%;
        background-repeat: no-repeat;
    }
</style>
<body>
    <header id="main">
            <div class="header-content-wrap">
                <div class="header-deco"></div>

                <div class="header-content">

                <div>
                    <nav class="navbar navbar-light shadow" style="background-color: white;">
                            <img src="images/logo-technolab.svg" width="200" height="40" alt="">
                        </a>
                        <a class="btn btn-outline-success my-2 my-sm-0" href="RegistratieFormulier.php">Registreer</a>   
                    </nav>
           </header>




    <section>
        <form method="POST" name="MainForm">
            <h1>Aanmeld formulier</h1>

            <div class="form-group d-flex flex-column justify-content-center">
                <label class="p-1">E-mail:</label>

                <!-- email als naam gebruiken -->
                <input class="p-1" type="email" id="email" name="email" required>
                <label class="p-1">Functie:</label>





                <select class="p-1" name="functie" id="functie" onchange="yesNoCheck(this);" required>
                    <option></option>
                    <option value="werknemer">Werknemer</option>
                    <option value="gast">Gast</option>
                    <option value="leraar">Leraar</option>
                </select>
                <div id="ifYes" style="display:none;">
                    <label class="p-1">School:</label>
                    <input class="p-1" type="text" id="school" name="school">
                    <label class="p-1">Klas:</label>
                    <input class="p-1" type="text" id="klas" name="klas">
                </div>


            <button class="SubmitButtonForm"  type="submit" name="submit" value = "Set Cookie" onclick = "WriteCookie()" >Verzenden</button>
        </form>
    </section>
</body>
</html>