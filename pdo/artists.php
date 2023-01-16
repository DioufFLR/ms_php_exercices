<?php

// on importe le contenu du fichier "db.php"
include "db.php";
// on exécute la méthode de connexion à notre BDD
$db = connexionBase();

// on lance une requête pour chercher toutes les fiches d'artistes
$requete = $db->query("SELECT * FROM artist");
// on récupère tous les résultats trouvés dans une variable
$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
// on clôt la requête en BDD
$requete->closeCursor();

// en haut de page, avec la requête :
//$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
//var_dump($tableau);

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO</title>
</head>
<body>
<h1>Saisie d'un nouvel artiste</h1>

<a href="artists.php"><button>Retour à la liste des artistes</button></a>

<br>
<br>

<form action ="script_artist_ajout.php" method="post">

    <label for="nom_for_label">Nom de l'artiste :</label><br>
    <input type="text" name="nom" id="nom_for_label">
    <br><br>

    <label for="url_for_label">Adresse site internet :</label><br>
    <input type="text" name="url" id="url_for_label">
    <br><br>

    <input type="submit" value="Ajouter">

    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <!-- Ici, on ajoute une colonne pour insérer un lien -->
            <th></th>
        </tr>

        <?php foreach ($tableau as $artist): ?>
            <tr>
                <td><?= $artist->artist_id ?></td>
                <td><?= $artist->artist_name ?></td>
                <!-- Ici, on ajoute un lien par artiste pour accéder à sa fiche : -->
                <td><a href="artist_detail.php?id=<?= $artist->artist_id ?>">Détail</a></td>
            </tr>
        <?php endforeach; ?>

    </table>

</form>
</body>
</html>

