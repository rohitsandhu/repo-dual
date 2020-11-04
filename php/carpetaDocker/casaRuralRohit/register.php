<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="imgs/winstonLogo.png">
    <title>REGISTER</title>
    <link rel="icon" href="imgs/winstonLogo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a href="index.php" class="navbar-brand">
        <img src="imgs/winstonLogo.png" height="30" alt="" loading="lazy"/>
        WINSTON BOOKS</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="info.php" class="nav-link">Info</a>
            </li>
        </ul>
    </div>

</nav>

<div class="main">
    <p class="sign" align="center">Sign out</p>
    <form method="post" class="form1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <div class="div-inputs">
            <input class="usuari" name="usuari" type="text" align="center" placeholder="Username"
                value="<?php echo $_POST['usuari'] ?? ''?>">
            <p class="error"> <?php echo $usuariErr;?></p>
        </div>

        <div class="div-inputs">
            <input class="contra" name="contra" type="password" align="center" placeholder="Password"
                   value="<?php echo $_POST['contra'] ?? ''?>">
            <p class="error"> <?php echo $contraErr;?></p>
        </div>

        <div class="div-inputs">
            <input class="nom" name="nom" type="text" align="center" placeholder="Nom"
                   value="<?php echo $_POST['nom'] ?? ''?>">
            <p class="error"> <?php echo $nomErr;?></p>
        </div>

        <div class="div-inputs">
            <input class="cognoms" name="cognoms" type="text" align="center" placeholder="Cognoms"
                   value="<?php echo $_POST['cognoms'] ?? ''?>">
            <p class="error"> <?php echo $cognomsErr;?></p>
        </div>

        <div  class="div-inputs">
            <input class="correu" name="correu" type="text" align="center" placeholder="Correu"
                   value="<?php echo $_POST['correu'] ?? ''?>">
            <p class="error"> <?php echo $correuErr;?></p>
        </div>


        <input class="submit" name="enviar" type="submit" align="center" value="Sign up"></input>
        <br>
        <br>
        <a class="link-register" href="login.php"> Already have an account? Click here.</a>
    </form>
</div>


</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
