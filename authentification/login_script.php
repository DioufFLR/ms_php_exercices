<?php
session_start();

$login = $_SESSION["login"] = "admin";
$pwd = $_SESSION["password"] = "bonjour";
$password_hash = password_hash("bonjour", PASSWORD_DEFAULT);

$login_ = (isset($_POST['login']) && $_POST['login'] != "") ? $_POST['login'] : Null;
$pwd_ = (isset($_POST['password']) && $_POST['password'] != "") ? $_POST['password'] : Null;



if (($_POST['login']) === $login && ($_POST['password']) === $pwd) {
    echo "L'identifiant et le mot de passe sont corrects";
    header("Location: index.php");
    return true;
} else {
    echo "Les identifiants sont incorrects";
    return false;
}








