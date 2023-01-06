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

<?php

function lien($a, $b) {
    echo '<a href=' . '"' . $a . '"' . '>' . $b . '</a>';
}

lien("https://www.reddit.com/", "Reddit Hug");

?>

</body>
</html>