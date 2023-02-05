<?php
session_start();
@$nom=$_POST["nom"];
@$prenom=$_POST["prenom"];
@$login=$_POST["login"];
@$pass=$_POST["pass"];
@$repass=$_POST["repass"];
@$valider=$_POST["valider"];
$erreur="";
if(isset($valider)){
    if(empty($nom)) $erreur="Nom laissé vide!";
    elseif(empty($prenom)) $erreur="Prénom laissé vide!";
    elseif(empty($login)) $erreur="Login laissé vide!";
    elseif(empty($pass)) $erreur="Mot de passe laissé vide!";
    elseif($pass!=$repass) $erreur="Mots de passe non identiques!";
    else{
        include("connexion.php");
        $sel=$pdo->prepare("select id from utilisateurs where login=? limit 1");
        $sel->execute(array($login));
        $tab=$sel->fetchAll();
        if(count($tab)>0)
            $erreur="Login existe déjà!";
        else{
            $ins=$pdo->prepare("insert into utilisateurs(nom,prenom,login,pass) values(?,?,?,?)");
            if($ins->execute(array($nom,$prenom,$login,md5($pass))))
                header("location:login.php");
        }
    }
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

    <title>Inscription</title>
</head>
<body>
<div class="container">
    <div class="p-3 mb-2 bg-info text-white">
        <h1>Inscription</h1>
    </div>

    <form action="" method="post" class="mt-4">
        <div class="form-group">
            <input type="text" class="form-control" name="nom" placeholder="Nom" value="<?php echo $nom?>"><br>
            <input type="text" class="form-control" name="prenom" placeholder="Prénom" value="<?php echo $prenom?>"><br>
            <input type="text" class="form-control" name="login" placeholder="Login" value="<?php echo $login?>"><br>
            <input type="password" class="form-control" name="pass" placeholder="Mot de passe"><br>
            <input type="password" class="form-control" name="repass" placeholder="Confirmer mot de passe"><br>
            <input type="submit" class="btn btn-success" name="valider" value="S'authentifier">
        </div>
    </form>

    <div class="erreur"><?php echo $erreur ?></div>

</div>
</body>
</html>