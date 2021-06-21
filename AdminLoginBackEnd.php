<?php
//Dit is het bestand om met de database een connectie te maken
include("db.php");

function test_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($_SERVER["REQUEST_METHOD"]== "POST") {

    $adminname = test_input($_POST["adminname"]);
    $password = test_input($_POST["password"]);
    $stmt = $con->prepare("SELECT * FROM admin");
    $stmt->execute();
    $users = $stmt->fetchAll();
//
//
//    $hash = password_hash("adminname", PASSWORD_DEFAULT);
//    var_dump($hash);

    foreach($users as $user) {

        if(($user['adminname'] == $adminname) &&
            ($user['password'] == $password)) {
            header("Location: leenformulierInchecken.php");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            die();
        }
    }
}

?>
