<?php
include("db.php");
include("BackEnd-Stage.php");

//pak de variables van de link (id en send)
$a = $_GET['id'];
$c = $_GET['send'];

//kijk of de back end je terug gestuurd hebt omdat het email adres al gebruikt is
if ($c == "ja"){
  echo "Uw hebt zichzelf al geregistreerd.";
}
if ($c == "link"){
  echo "Deze link is al eerder gebruikt.";
}
if ($c == "success"){
  echo "Uw heeft zich geregistreerd.";
}

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

<form method="POST" id="MainForm" action="BackEnd-Stage.php?id=<?= $a ?>&send=nee">
  <h1>Stage formulier</h1>
  <div class="form-row">
      <div class="form-group col-md-6">
        <input class="form-control" type="text" id="fname" name="fname"  placeholder="Voornaam:">
      </div>
      <div class="form-group col-md-6">
        <input class="form-control" type="text" id="straat" name="straat" requred placeholder="Straat">
            <input class="form-control" type="text" id="stad" name="stad" requred placeholder="Stad">
              <input class="form-control" type="text" id="postcode" name="postcode" requred placeholder="Postcode">
      </div>
  </div>
  <div class="form-row align-center">
      <div class="form-group col-md-3">
        <input class="form-control" type="text" id="gebdatum" name="gebdatum"  placeholder="Geboorte Datum:">
      </div>
      <div class="form-group col-md-3">
        <input class="form-control" type="tel" id="tel" name="tel"  placeholder="Telefoonnummer:">
      </div>
      <div class="form-group col-md-3 ">
        <input class="form-control" type="email" id="email" name="email"  placeholder="email:">
      </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
        <input class="form-control" type="text" id="school" name="school"  placeholder="School:">
    </div>
    <div class="form-group col-md-4">
      <input class="form-control" type="text" id="Opleiding" name="Opleiding"  placeholder="Opleiding:">
    </div>
    <div class="form-group col-md-2">
      <input class="form-control" type="number" id="Niveau" name="Niveau"  placeholder="Niveau:">
    </div>
    <div class="form-group col-md-2">
      <input class="form-control" type="number" id="stagejaar" name="stagejaar"  placeholder="Stagejaar:">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <input class="form-control" type="text" id="Slb-er" name="Slb-er"  placeholder="Slb-er:">
    </div>
    <div class="form-group col-md-4">
      <input class="form-control" type="tel" id="Slb-ertel" name="Slb-ertel"  placeholder="Slb-er tel:">
    </div>
    <div class="form-group col-md-2">
      <input class="form-control" type="email" id="Slb-ermail" name="Slb-ermail"  placeholder="Slb-er mail:">
    </div>
  </div>
  <div class="d-flex justify-content-center">
      <button class="SubmitButtonForm" type="submit" name="submit">Submit</button>
  </div>
    </main>
        <footer>
        </footer>
    </section>
</body>
</html>
