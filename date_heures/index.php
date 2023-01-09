<?php

echo 'hello world';

// À ajouter à chaques fois dans le script avant toute manipulation de dates
date_default_timezone_set("Europe/Paris");
echo time();
echo '<br>' . date("d/m/y");