<?php
include("db.php");
Session_Start();
// Hier word gecheckt of de sessie ingelogd bestaat
if($_SESSION['ingelogd'] == true) { 

	$msg = "";
	// hier word een login aangemaakt met de ingevulde data
	if (isset($_POST['submit'])) {
		$con = new mysqli('localhost', 'root', '', 'coronaformulier');

		$name = $con->real_escape_string($_POST['name']);
		$password = $con->real_escape_string($_POST['password']);
		$cPassword = $con->real_escape_string($_POST['cPassword']);

		if ($password != $cPassword)
			$msg = "Please Check Your Passwords!";
		else {
			$hash = password_hash($password, PASSWORD_BCRYPT);
			$con->query("INSERT INTO admin (name,password) VALUES ('$name', '$hash')");
			$msg = "You have been registered!";
		}
	}
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Technolab Leiden | register admin</title>
		<!-- Toegevoegde links, hier beneden -->
		<link rel="stylesheet" href="css/style.css">
		<script src="search.js"></script>
		<!-- Bootstrap links -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</head>
<body>
	<header id="main">
        <div class="header-content-wrap">
            <div class="header-deco"></div>
                <div class="header-content">
                    <nav class="navbar navbar-light shadow" style="background-color: white;">
                        <a class="navbar-brand" href="admin-menu.php">
                            <img src="images/logo-technolab.svg" width="200" height="40" alt="">
                        </a>
                        <a class="btn btn-outline-success my-2 my-sm-0" href="AdminUitloggen.php">Uitloggen</a>
                    </nav>
                </div>
		</div>
    </header>
	<main>
		<!-- Dit is het formulier zelf, dus waar je alles invult in de browser -->
		<div class="container" style="margin-top: 100px;">
			<div class="row justify-content-center">
				<div class="col-md-6 col-md-offset-3">
					<img src="images/logo.png"><br><br>
					<?php if ($msg != "") echo $msg . "<br><br>"; ?>
					<form method="post" action="register.php">
						<input class="form-control" minlength="3" name="name" placeholder="Name..."><br>
						<input class="form-control" minlength="5" name="password" type="password" placeholder="Password"><br>
						<input class="form-control" minlength="5" name="cPassword" type="password" placeholder="Confirm Password"><br>
						<input class="btn btn-primary" name="submit" type="submit" value="Register"><br>
					</form>
				</div>
			</div>
		</div>
	</main>
</body>
</html>
<!-- als de sessie ingelogd niet bestaat word je terug gestuurd naar de login pagina -->
<?php
}else{
    header("Location: AdminLogin.php");
}
?>