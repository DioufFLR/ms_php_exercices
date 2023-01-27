<?php
session_start();

if ($_SESSION["login"]) {
    echo "Vous êtes autorisé à voir cette page.";
} else {
    echo "Cette page nécessite une identification.";
}

unset($_SESSION["login"]);
unset($_SESSION["role"]);

if (ini_get("session.use_cookies")) {
    setcookie(session_name(), '', time()-42000);
}

session_destroy();
