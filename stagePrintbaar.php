<?php
//Dit is het bestand om met de database een connectie te maken
include("db.php");
Session_Start();
// Hier word gecheckt of de sessie ingelogd bestaat
if($_SESSION['ingelogd'] == true) { 

$sql = "SELECT * FROM stageperiode INNER JOIN stagiaires ON email = stagiaireemail";
$result = mysqli_query($con, $sql);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technolab Leiden | Stage printbaar</title>
</head>
<body>
    <main>
        <thead>
            <tr>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Stagiaire-email</th>
                <th>Begindatum</th>
                <th>Einddatum</th>
                <th>Stagedagen</th>
            </tr><br>
        </thead>
        <!-- hier laat hij alles uit de database van de tabel stage periode zien -->
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <tr class="item">
                    <td><?php echo $row['voornaam']?></td>
                    <td><?php echo $row['achternaam']?></td>
                    <td><?php echo $row['stagiaireemail']?></td>
                    <td><?php echo $row['begindatum']?></td>
                    <td><?php echo $row['einddatum']?></td>
                    <td><?php echo $row['stagedagen']?></td>
                </tr>
            <?php } ?>
        </table>
    </main>
</body>
</html>
<!-- als de sessie ingelogd niet bestaat word je terug gestuurd naar de login pagina -->
<?php
}else{
  header("Location: AdminLogin.php");

?>





