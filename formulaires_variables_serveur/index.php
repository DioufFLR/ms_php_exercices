<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Formulaires et variables serveur</h1>

<div class="form">
    <form action ="check.php" method="post">
        Tu utilises internet plutôt le :<br />
        <input type="checkbox" name="Fjour[]" value="Lundi" />Lundi<br />
        <input type="checkbox" name="Fjour[]" value="Mardi" />Mardi<br />
        <input type="checkbox" name="Fjour[]" value="Mercredi" />Mercredi<br />
        <input type="checkbox" name="Fjour[]" value="Jeudi" />Jeudi<br />
        <input type="checkbox" name="Fjour[]" value="Vendredi" />Vendredi<br />
        <input type="submit" name="Envoyer" value="ENVOYER" />
    </form>
</div>


</body>
</html>
<?php
