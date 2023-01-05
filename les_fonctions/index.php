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
function bonjour($prenom, $nom) {
    echo "Bonjour " . $prenom . " " . $nom;
}

bonjour("Joseph nez de boeuf", "belette");

$a = $b = 2;

function somme() {
    global $a, $b;
    $b = $a + $b;
    echo $b . " " . $a;
}

somme();

function test() {
    static $d = 0;
    echo $d . "<br>";
    $d++;
}

test();
test();
test();




?>

</body>
</html>