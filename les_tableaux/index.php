<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les tableaux</title>
</head>
<body>
<h1>Les tableaux</h1>
<div class="wrapper" align="center">
    <div class="partie1">
        <h2>Partie 1</h2>

        <?php
             $annee = array(
                     "Janvier" => 31,
                     "Février" => 28,
                     "Mars" => 31,
                     "Avril" => 30,
                     "Mai" => 31,
                     "Juin" => 30,
                     "Juillet" => 31,
                     "Aout" => 31,
                     "Septembre" => 30,
                     "Octobre" => 31,
                     "Novembre" => 30,
                     "Décembre" => 31,
             );

             asort($annee);

             echo '<table>';

             foreach ($annee as $mois => $jours) {
                 echo '<tr>' . '<td>' . $mois . '</td><td>' . $jours . '</td>' . '</tr>';
             }

             echo '</table>';
        ?>



    </div>
</div>


</body>
</html>

