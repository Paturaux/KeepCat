<?php

if(isset($_SESSION['name'])){
    $retPage = 'index.php?page=accueil';
    require_once 'View/wikichat.php';
}
else{
    header('Location: index.php?page=connexion');
}