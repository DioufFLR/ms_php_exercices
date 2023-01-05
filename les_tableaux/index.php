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

             echo '<table border="1.5">';

             foreach ($annee as $mois => $jours) {
                 echo '<tr>' . '<td>' . $mois . '</td><td>' . $jours . '</td>' . '</tr>';
             }

             echo '</table>';
        ?>

    </div>

    <div class="partie2">
        <h2>Partie 2</h2>

        <?php
        $capitales = array(
            "Bucarest" => "Roumanie",
            "Bruxelles" => "Belgique",
            "Oslo" => "Norvège",
            "Ottawa" => "Canada",
            "Paris" => "France",
            "Port-au-Prince" => "Haïti",
            "Port-d'Espagne" => "Trinité-et-Tobago",
            "Prague" => "République tchèque",
            "Rabat" => "Maroc",
            "Riga" => "Lettonie",
            "Rome" => "Italie",
            "San José" => "Costa Rica",
            "Santiago" => "Chili",
            "Sofia" => "Bulgarie",
            "Alger" => "Algérie",
            "Amsterdam" => "Pays-Bas",
            "Andorre-la-Vieille" => "Andorre",
            "Asuncion" => "Paraguay",
            "Athènes" => "Grèce",
            "Bagdad" => "Irak",
            "Bamako" => "Mali",
            "Berlin" => "Allemagne",
            "Bogota" => "Colombie",
            "Brasilia" => "Brésil",
            "Bratislava" => "Slovaquie",
            "Varsovie" => "Pologne",
            "Budapest" => "Hongrie",
            "Le Caire" => "Egypte",
            "Canberra" => "Australie",
            "Caracas" => "Venezuela",
            "Jakarta" => "Indonésie",
            "Kiev" => "Ukraine",
            "Kigali" => "Rwanda",
            "Kingston" => "Jamaïque",
            "Lima" => "Pérou",
            "Londres" => "Royaume-Uni",
            "Madrid" => "Espagne",
            "Malé" => "Maldives",
            "Mexico" => "Mexique",
            "Minsk" => "Biélorussie",
            "Moscou" => "Russie",
            "Nairobi" => "Kenya",
            "New Delhi" => "Inde",
            "Stockholm" => "Suède",
            "Téhéran" => "Iran",
            "Tokyo" => "Japon",
            "Tunis" => "Tunisie",
            "Copenhague" => "Danemark",
            "Dakar" => "Sénégal",
            "Damas" => "Syrie",
            "Dublin" => "Irlande",
            "Erevan" => "Arménie",
            "La Havane" => "Cuba",
            "Helsinki" => "Finlande",
            "Islamabad" => "Pakistan",
            "Vienne" => "Autriche",
            "Vilnius" => "Lituanie",
            "Zagreb" => "Croatie"
        );
        
        asort($capitales);

        ?>

        <div class="part2_2">
            <h3>2.1</h3>

            <table border="1.5" bgcolor="#deb887">
                <?php
                foreach ($capitales as $villes => $pays) {
                    echo "<tr>";
                    echo "<td>" . $villes . "</td>" . "<td>" . $pays . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>

        <div class="part2_3">
            <h3>2.2</h3>

            <table border="1.5" bgcolor="#deb887">
                <?php
                foreach ($capitales as $villes => $pays) {
                    echo "<tr>";
                    echo "<td>" . $pays . "</td>" . "<td>" . $villes . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>

        <div class="part2_3">
            <h3>2.3</h3>

            <?php

            $nbr = count($capitales);

            echo 'Le nombre de pays présentes dans le tableaux est de : ' . $nbr;

            ?>

        </div>

        <div class="part2_4">
            <h3>2.4</h3>

            <?php
            foreach ($capitales as $villes => $pays) {
                if ("B" == substr($villes, 0, 1)) {
                    unset($pays);
                }
                if (!empty($pays)) {
                    echo $pays . " ";
                }
            }
            ?>

        </div>
    </div>

    <div class="part3">

        <h2>Partie 3</h2>

        <?php
        $departements = array(
            "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
            "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
            "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
            "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
        );
        ?>

        <div class="part3_1">
            <h3>3.1</h3>

                <?php

                ksort($departements);

                foreach ($departements as $region => $departement) {
                    echo "<strong>" . $region . "</strong>" . ":" . "<br>";
                    if (is_array($departement)) {
                        foreach ($departement as $region => $departement) {
                            echo $departement . "<br>";
                        }
                    }
                    echo "<br>";
                }
                ?>

        </div>

        <div class="part3_2">
        <h3>3.2</h3>

            <?php

            ksort($departements);

            foreach ($departements as $region => $departement) {
                $nb = count($departement);
                echo $region . "=" . $nb . "<br>";
            }
            ?>

        </div>

    </div>

</div>

</body>
</html>

