<?php
//Dit is het bestand om met de database een connectie te maken
include("db.php");
Session_Start();

//Dit is een functie om cross-site scripting te voorkomen
function secure($value){
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}


//toevoegen van laptops
if(isset($_POST['toevoegen'])){
    if(!empty($_POST['naam'])) {
        $naam = secure($_POST['naam']);
        $sqlsend = "INSERT INTO laptop (laptopnaam) VALUES('$naam')";

        $sqlcheck = "SELECT * FROM laptop WHERE laptopnaam = '$naam'";
        $result = mysqli_query($con, $sqlcheck);

        while ($row = mysqli_fetch_array($result)) {
            $laptopnaam = $row['laptopnaam'];

        }
        if (!isset($laptopnaam)) {
            $sqlsend = "INSERT INTO laptop (laptopnaam) VALUES('$naam')";
            if (mysqli_query($con, $sqlsend)) {
                header("Location: laptop-admin.php?info=success");
            }
        } else {
            header("Location: RegistratieFormulier.php?info=fout");
        }
    }


}

?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Technolab Leiden | Laptop admin</title>
        <!-- bootstrap links -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <!-- custom link om bij je css terecht komen -->
        <link rel="stylesheet" href="css/style.css">
        <script src="search.js"></script>
        <!-- datatables en jquery links -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    </head>
<body>

<!-- navigatie section -->
    <header id="main">
        <div class="header-content-wrap">
            <div class="header-deco"></div>
                <div class="header-content">
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
                                <a class="navbar-brand" href="admin-menu.php">
                                    <img src="images/logo-technolab.svg" width="200" height="40" alt="">
                                </a>
                            <a class="btn btn-outline-success my-2 my-sm-0" href="AdminUitloggen.php">Uitloggen</a>
                    </nav>
                </div>
    </header>


<!--------------------------------------------------------------------------------------------------------------------->
    <main>

        <!-------------------form section------------------>
        <section class="container d-flex justify-content-between">
            <div>
                <h1>Laptop toevoegen</h1>
                <form method="POST">
                    <label>Naam:</label>
                    <!--de value naam gaan we gebruiken voor php-->
                    <input type="text" name="naam" required><br>
                    <!--de value toevoegen gaan we gebruiken voor php-->
                    <input type="submit" name="toevoegen" value="Toevoegen">
                </form>
            </div>
        </section>
        <!--------------------------->


        <!--bestaande laptops overzicht-->
        <section class="mt-5 mb-5">
            <table class="table table-striped table-bordered">
                <h1 class="text-center">Bestaande laptops</h1>
                <thead class="thead-dark">
                    <tr>
                        <th>Laptop naam</th>
                        <th>Laptop status</th>
                    </tr>
                </thead>

                <!--hier word de data van de database getoond-->
                <?php
                // dit is de sql query voor bestaande laptops showen
                $sqlcheck = "SELECT laptopnaam , status FROM laptop";
                // sla de resultaat op de vatiable $result
                $result = mysqli_query($con, $sqlcheck);
                // maak daar een $row van
                $row = mysqli_fetch_assoc($result);


                 ?>


                    <tr class="item">
                        <td><?php echo ($row['laptopnaam'])?></td>
                        <td><?php echo ($row['status'])?></td>
                    </tr>
                <?php  ?>
            </table>
        </section>






        <!----geleende bestaande laptops overzicht------------->

        <section class="mt-5">
    <table class="table table-striped table-bordered">
        <h1 class="text-center">Uitgeleende laptops</h1>
        <thead class="thead-dark">
            <tr>
                <th>Laptop naam</th>
                <th>Laptop kleur</th>
                <th>Naam lener</th>
                <th>E-mail lener</th>
                <th>Leen datum</th>
                <th>Inlever datum</th>
            </tr>
        </thead>


        // we voeren hier de sql query uit
<!---->
<!--        --><?php
//        $sqlcheck2 = "SELECT  naam,laptopnaam,email,leendatum,inleverdatum  FROM laptoplenen";
//        // sla de resultaat op de vatiable $result
//        $result2 = mysqli_query($con, $sqlcheck2);
//        // maak daar een $row van
//        $row2 = mysqli_fetch_assoc($result2)
//
//        ?>



<!--        <!-- hier wordt de data van de uitgeleende laptops getoond -->-->
<!--            <tr class="item">-->
<!--                <td>--><?php //echo isset($row2['naam']) ?><!--</td>-->
<!--                <td>--><?php //echo isset($row2['laptopnaam']) ?><!--</td>-->
<!--                <td>--><?php //echo isset($row2['naam'])?><!--</td>-->
<!--                <td>--><?php //echo isset($row2['email'])?><!--</td>-->
<!--                <td>--><?php //echo isset($row2['leendatum'])?><!--</td>-->
<!--                <td>--><?php //echo isset($row2['inleverdatum'])?><!--</td>-->
<!--            </tr>-->

        <!------------------------------------------------------------->
    </table>
</section>
    </main>
</body>
</html>






