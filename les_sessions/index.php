<?php
session_start();
$_SESSION["login"] = "webmaster";
echo $_SESSION["login"];