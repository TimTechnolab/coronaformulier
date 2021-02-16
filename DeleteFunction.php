<?php
//delete gast en leraar na 1 jaar

    // $time1year = date('Y-m-d', strtotime('+1 year'));
    // $sql = "DELETE formdata, aanwezigheid FROM formdata INNER JOIN aanwezigheid ON formdata.email = aanwezigheid.email WHERE aanwezigheid.timestamp >= '".$time1year."' AND (functie = 'gast' OR functie = 'leraar')";
    // if ($con->query($sql) === TRUE) {

    //   }

//delete alles na 3 maanden
    $time1year = date('Y-m-d', strtotime('+3 month'));
    $sql = "DELETE formdata, aanwezigheid FROM formdata INNER JOIN aanwezigheid ON formdata.email = aanwezigheid.email WHERE aanwezigheid.timestamp >= '".$time1year."' AND (functie = 'gast' OR functie = 'leraar' OR functie = 'werknemer')";
    if ($con->query($sql) === TRUE) {

    }