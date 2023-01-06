<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les fonctions</title>
</head>
<body>
<div class="parti1">
    <h2>Générer un lien</h2>
    <h3>Première manière</h3>
    <?php


    function lien($a, $b) {
        echo '<a href=' . '"' . $a . '"' . '>' . $b . '<a>';
    }

    lien("https://www.reddit.com/", "Reddit Hug");

    ?>
    <br>
    <h3>Deuxième manière</h3>
    <?php

    $c = "<a ";
    $d = "\">";
    $e = "</a>";
    $f = htmlentities($c);
    $g = htmlentities($d);
    $h = htmlentities($e);

    function lien2($a, $b) {
        global $f;
        global $g;
        global $h;
        echo  $h . "href=\"". $a . $g . $b . $h;
    }

    lien2("https://www.reddit.com/", "Reddit Hug");
    ?>
</div>




</body>
</html>