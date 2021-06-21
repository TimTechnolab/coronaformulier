<?php
//Dit is het bestand om met de database een connectie te maken
include("db.php");


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technolab Leiden | Admin Paneel</title>

    <link rel="stylesheet" href="css/style.css">
    <script src="search.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="js/range.js"></script>

</head>
<body>
<header id="main">
            <div class="header-content-wrap">
                <div class="header-deco"></div>
                <div class="header-content">
                    <nav class="navbar navbar-light shadow" style="background-color: white;">
                        <a class="navbar-brand" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                            <img src="images/logo-technolab.svg" width="200" height="40" alt="">
                        </a>
                        <div class="dflex justify-content-center">
                            <tr>
                                <td>Minimum Date:</td>
                                <td><input name="min" id="min" type="text"></td>
                            </tr>
                            <tr>
                                <td>Maximum Date:</td>
                                <td><input name="max" id="max" type="text"></td>
                            </tr>
                        </div>
                        <a class="btn btn-outline-success my-2 my-sm-0" href="AdminUitloggen.php">Uitloggen</a>
                    </nav>
                </div>
    </header>
<section>
    <table id="myTable" class="table table-striped table-bordered sortable display">
        <thead class="thead-dark">
            <tr>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Telefoonnummer</th>
                <th>E-mail</th>
                <th>Datum</th>
                <th>Functie</th>
                <th>School</th>
                <th>Klas</th>
            </tr>
        </thead>

            <tr class="item">
                <td><?php echo $row['voornaam']?></td>
                <td><?php echo $row['achternaam']?></td>
                <td><?php echo $row['telefoonnummer']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['timestamp']?></td>
                <td><?php echo $row['functie']?></td>
                <td><?php echo $row['school']?></td>
                <td><?php echo $row['klas']?></td>
            </tr>

    </table>
</section>
</body>
</html>

?>





