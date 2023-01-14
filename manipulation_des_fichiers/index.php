<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manipulation de fichier</title>
</head>
<body>

<div class="partie1">
    <h1>Manipulation de fichiers</h1>

    <div class="part1">
        <h2>Partie 1</h2>

        <?php

        $file = file('liens.txt');

        echo "<ul>";

        foreach ($file as $line) {
            echo '<li>' . '<a href="' . $line . '">' . $line . '</a>' . '</li>' . '<br>';
        }

        echo '</ul>';

        ?>

    </div>
</div>

<div class="partie2">
    <h1>Le téléchargement de fichiers</h1>

    <div class="part2">

        <?php
        $visiteurs = file_get_contents("moncompteur.txt");

        $visiteurs++;

        file_put_contents("moncompteur.txt", $visiteurs);

        print("$visiteurs personnes sont passées par ici");
        ?>
    </div>
</div>

</body>
</html>

