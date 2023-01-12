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
    <h1 class="title">Contact</h1>
    <form action="script.php" method="post" id="myForm">
        <p>* Ces zones sont obligatoires</p>
        <fieldset>
            <legend>Vos coordonnées</legend>
            <label for="nom" >Votre nom* :</label><input type="text" name="nom" id="nom" >
            <br>
            <span id="nomManquant"></span>
            <br>
            <label for="prenom">Votre prenom* :</label><input type="text" name="prenom" id="prenom">
            <br>
            <span id="prenomManquant"></span>
            <br>
            <!-- -----Création d'un bouton radio requis avec homme pour valeur par défaut----- -->
            <div>
                <p>Sexe* :</p>
                <input type="radio" name="sexe" id="man" value="Homme" checked>
                <label for="man">Homme</label>
                <input type="radio" name="sexe" id="woman" value="Femme">
                <label for="woman">Femme</label>
            </div>
            <label for="birth">Date de naissance* :</label><input type="date" name="birth" id="birth">
            <br>
            <span id="dateNaissanceManquant"></span>
            <br>
            <label for="cd">Code postal* :</label><input type="text" name="cd" id="cd">
            <br>
            <span id="codePostalManquant"></span>
            <br>
            <label for="adress">Adresse :</label><input type="text" name="adress" id="adress">
            <br>
            <label for="city">Ville :</label><input type="text" name="city" id="city" minlength="1">
            <br>
            <label for="email">Email* :</label><input type="text" id="email" name="email">
            <br>
            <span id="emailManquant"></span>
        </fieldset>
        <label for="check"></label>* J'accepte le traitement informatique de ce formulaire<input type="checkbox" name="check" id="check" required>


        <div class="submit">
            <input type="submit" value="Envoyer" id="boutonEnvoi">
            <input type="reset" value="Annuler">
        </div>
    </form>
    </main>

</div>


</body>
</html>
<?php
