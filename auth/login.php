<?php
session_start();
@$login=$_POST["login"];
@$pass=md5($_POST["pass"]);
@$valider=$_POST["valider"];
$erreur="";
if(isset($valider)){
    include("connexion.php");
    $sel=$pdo->prepare("select * from utilisateurs where login=? and pass=? limit 1");
    $sel->execute(array($login,$pass));
    $tab=$sel->fetchAll();
    if(count($tab)>0){
        $_SESSION["prenomNom"]=ucfirst(strtolower($tab[0]["prenom"])).
            " ".strtoupper($tab[0]["nom"]);
        $_SESSION["autoriser"]="oui";
        header("location:session.php");
    }
    else
        $erreur="Mauvais login ou mot de passe!";
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body onLoad="document.fo.login.focus()">
<div class="container">
    <div class="p-3 mb-2 bg-info text-white">
        <h1>Authentification</h1>
    </div>
    <div class="erreur"><?php echo $erreur ?></div>
    <form name="fo" class="mt-4" method="post" action="">
        <div class="form-group">
            <input type="text" class="form-control" name="login" placeholder="Login"><br>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Mot de passe"><br>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" name="valider" value="S'authentifier">
        </div>
    </form>

    <div class="mt-4">
        <a class="btn btn-warning" href="inscription.php">Créer un compte</a>
    </div>
</div>

</body>
</html>