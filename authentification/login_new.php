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
    <title>Inscription</title>
</head>
<body>

<div class="container">
    <div class="p-3 mb-2 bg-info text-white">
        <h1>Inscription</h1>
    </div>

    <form class="mt-4" action="ajout_script.php">
        <div class="form-group">
            <label for="exampleInputEmail1">Login</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez un login">
            <small id="emailHelp" class="form-text text-muted">Ne partager à personne vos données de connexions</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-warning">Enregistrer</button>
    </form>

    <div class="button-retour mt-4">
        <a href="login_form.php" class="btn btn-info">Retour</a>
    </div>
</div>

</body>
</html>
