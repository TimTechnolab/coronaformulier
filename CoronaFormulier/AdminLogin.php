<!DOCTYPE html>
<html>
<?php
include("AdminLoginBackEnd.php");
?>

<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Links -->


	<title>Technolab leiden | Admin Login</title>
  
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="AdminStyle.css">
</head>
<body> 

<section><br><br><br>
        <form method="POST" style="display:flex;justify-content:center;flex-direction:column;align-items:center;">
            <label for="username">Gebruikersnaam:</label>
            <input type="username" id="username" name="username" required>
            <label for="password">Wachtwoord</label>
			<input type="password" id="password" name="password" required><br>
            <button type="submit" name="submit">Verzenden</button>
        </form>
    </section>
</body>
</html>