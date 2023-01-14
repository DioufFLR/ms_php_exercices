<?php
include("index.php");
include("header.php");
include("footer.php");

if (file_exists("BibliFonction/DecoupageHtml/index.php"."BibliFonction/DecoupageHtml/header.php"."BibliFonction/DecoupageHtml/footer.php") )
{
    include("BibliFonction/DecoupageHtml/index.php"."BibliFonction/DecoupageHtml/header.php"."BibliFonction/DecoupageHtml/footer.php");
}
else
{
    // Erreur (à gérer)
}
?>