<?php

if(isset($_SESSION['name'])){
    require_once 'View/accueil.php';
}
else{
    header('Location: index.php?page=connexion');
}
