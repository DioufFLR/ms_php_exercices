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
<h1>Manipulation de fichiers exercice</h1>

<div class="parti1">
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
</body>
</html>

