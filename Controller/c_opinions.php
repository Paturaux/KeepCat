<?php

if(isset($_SESSION['name'])){
    $retPage = 'index.php?page=accueil';
    require_once 'View/avis.php';
}
else{
    header('Location: index.php?page=connexion');
}

