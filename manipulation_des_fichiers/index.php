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
<?php
// On déclare une variable dont la valeur (contenu) sera écrite dans le fichier
$myVar = "Bonjour le monde ";

// Ouverture en écriture seule
$fp = fopen("essai.txt", 'ab');

// Écriture du contenu ($myVar)
fputs($fp, $myVar);

// Fermeture du fichier
fclose($fp);

// Ouverture en lecture seule
$fp = fopen("essai.txt", "r");

// Boucle jusqu'à la fin du fichier
while (!feof($fp))
{
    // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne
    $ligne = fgets($fp, 4096);
    echo $ligne."<br>";
}
?>
</body>
</html>

