<?php
try{
    $pdo=new PDO("mysql:host=localhost;dbname=auth","root","2704");
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>