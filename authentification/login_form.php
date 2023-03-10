<?php
session_start();
// on importe le contenu du fichier "db.php"
include "db.php";
// on exécute la méthode de connexion à notre BDD
$db = connexionBase();
// on lance une requête pour chercher toutes les fiches d'artistes
$requete = $db->query("SELECT * FROM users");
// on récupère tous les résultats trouvés dans une variable
$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
// on clôt la requête en BDD
$requete->closeCursor();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Exercices sur les mots de passe</title>
</head>
<body>
<div class="container">
    <div class="p-3 mb-2 bg-info text-white">
        <h1>Connexion</h1>
    </div>

    <form action="login_script.php" method="post">

        <label for="login"></label><br>
        <input class="btn btn-success" type="text" placeholder="login" name="login" id="login">

        <br>

        <label for="password"></label><br>
        <input class="btn btn-success" type="password" placeholder="mot de passe" name="password" id="password">

        <br><br><br>

        <label for="envoyer"></label>
        <input type="submit" class="btn btn-warning">
    </form>

    <br>

    <div class="new-button">
        <a href="login_new.php" class="btn btn-info">S'inscrire</a>
    </div>

</div>
</body>
</html>
