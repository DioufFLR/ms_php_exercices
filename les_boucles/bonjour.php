<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les boucles</title>
</head>
<body>

<h1>Les boucles</h1>

<div class="part1">
    <h2>Partie 1</h2>
    <p>
        <br>
        <?php
        $a = 1;

        while ($a < 150) {
            echo $a . "\t";
            $a += 2;
        }
        ?>
    </p>
</div>

<div class="part2">
    <h2>Partie 2</h2>
    <p>
        <?php
        $b = 1;

        while ($b <= 500) {
            echo "<br> Je dois faire des sauvegardes régulières de mes fichiers" . " " . $b;
            $b++;
        }
        ?>
    </p>
</div>

<div class="part3">
    <h2>Partie 3</h2>

    <table border="2">
        <?php
        for ($row = 0; $row <= 12; $row++) {
            echo '<tr>';
            for ($col = 0; $col <= 12; $col++) {
                $result = $row * $col;
                echo '<td>' . $result . '</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
</div>

</body>
</html>