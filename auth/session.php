<?php
session_start();
if($_SESSION["autoriser"]!="oui"){
    header("location:login.php");
    exit();
}
if(date("H")<18)
    $bienvenue="Bonjour et bienvenue ".
        $_SESSION["prenomNom"].
        " dans votre espace personnel";
else
    $bienvenue="Bonsoir et bienvenue ".
        $_SESSION["prenomNom"].
        " dans votre espace personnel";
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>session</title>
</head>
<body onLoad="document.fo.login.focus()">
<div class="container">
    <div class="p-3 mb-2 bg-info text-white">
        <h2><?php echo $bienvenue?></h2>
    </div>

    <div class="btn">
        <a class="btn btn-danger" href="deconnexion.php">Se déconnecter</a>
    </div>
</div>
</body>
</html>