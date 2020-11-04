<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "classes/Conexio.php";
include "classes/Usuari.php";

$con = new Conexio();

if (isset($_POST['enviar'])) {
    $correu=$_POST['correu'];
    $contrasenya=$_POST['contrasenya'];

    $trobat = false;

    $con->openConnection();

    $arrayClientsExistents = $con->getAllUsuaris();


    var_dump($con->getAllUsuaris());
    var_dump($arrayClientsExistents);
    die();

    for ($i = 0; $i < count($arrayClientsExistents); $i++) {
        if ($arrayClientsExistents[$i]->getMail() == $correu && $arrayClientsExistents[$i]->getContra() == $contrasenya) {
            $trobat = true;
            $_SESSION['clientLogin'] = $arrayClientsExistents[$i];
            break;
        }
    }



    if (!$trobat) {

    }else{
        header("Location: index.php");
        die();
    }
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="imgs/winstonLogo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="imgs/winstonLogo.png">
    <title>LOGIN</title>
</head>
<body class="body-login">
<nav class="navbar navbar-expand-sm  navbar-dark bg-dark">
    <a href="index.php" class="navbar-brand">
        <img src="assets/img/LOGO.png" height="30" alt="" loading="lazy"/>
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
    <?php if(isset($_GET['recordatori'])) :?>
    <div style="color: red; width: 100%; background-color: #48516b " class="recordatori"> <p style=" margin-left: 37%;"> * Remember that you can't buy without Login in. *</p> </div>

    <?php endif;?>
<div class="main2">
    <p class="sign" action="login.php" align="center">Iniciar Secció</p>
    <form method="post" class="form1">
        <div class="div-inputs">
            <input class="usuari " type="text" align="center" name="correu" placeholder="Correu">
            <p></p>
        </div>
        <div class="div-inputs">
            <input class="contra" type="password" align="center" name="contrasenya" placeholder="Contrasenya">
            <p></p>
        </div>

            <input class="submit" name="enviar" type="submit" align="center" value="Sign in"></input>
        <br>
        <br>
        <a class="link-register" href="register.php"> You don't have an account? Click here.</a>
        </form>
</div>

</body>
                    <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>