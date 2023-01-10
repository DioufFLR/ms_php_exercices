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
    <div class="partie1">
        <br>
        <h2>Partie 1</h2>
        <?php

        $date_str = "2022-07-14";
        $date_time = strtotime($date_str);
        echo 'Cela correspond à la semaine : ' . date ('W', $date_time);

        ?>
        <br>
    </div>

    <div class="partie2">
        <br>
        <h2>Partie 2</h2>
        <?php

        $now = time();
        $date_fin = strtotime("2023-02-06 17:00:00");


        function dateDiff($date_fin, $now) {
            $diff = abs($date_fin - $now);
            $jour = $diff / 86400; // dans une journée il y a 86400 secondes.
            $jour_arrondi = round($jour);
            echo 'Il reste ' . $jour_arrondi . ' jours pour terminer la formation';
        }

        dateDiff($date_fin, $now);

        ?>
        <br>
    </div>

    <div class="partie3">
        <br>
        <h2>Partie 3</h2>
        <?php


        ?>
        <br>
    </div>

    <div class="partie4">
        <br>
        <h2>Partie 4</h2>
        <?php


        ?>
        <br>
    </div>

    <div class="partie5">
        <br>
        <h2>Partie 5</h2>
        <?php



        ?>
        <br>
    </div>

    <div class="partie6">
        <br>
        <h2>Partie 6</h2>
        <?php



        ?>
        <br>
    </div>

    <div class="partie7">
        <br>
        <h2>Partie 7</h2>
        <?php


        ?>
        <br>
    </div>
</body>
</html>

