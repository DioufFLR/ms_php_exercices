<?php
echo "Bonjour " . $_REQUEST['nom'] . " " . $_REQUEST['prenom'] . ".<br>";
echo "Vous êtes un(e) " . $_REQUEST['sexe'] . " et vous êtes né(e) le " . $_REQUEST['birth'] . ".<br>";
echo "Vous habitez au " . $_REQUEST['adress'] . " à " . $_REQUEST['city'] . " " . $_REQUEST['cd'] . ".<br>";
echo "Votre adresse mail est elle correcte ? " . $_REQUEST['email'] . ".<br>";
echo "Si toutes ces informations sont correctes veuillez continuer sinon recommencer.";
