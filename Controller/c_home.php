<?php

if(isset($_SESSION['screen']) and $_SESSION['screen'] == 'phone'){
    if(isset($_SESSION['name'])){
        require_once 'View/accueil.php';
    }
    else{
        header('Location: index.php?page=connexion');
    }
}
else{
    require_once 'ViewWS/accueil.php';
}