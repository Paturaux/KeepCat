<?php

if(isset($_SESSION['name'])){
    require_once 'Model/m_animals.php';
    $animals = get_animals_user($_SESSION['num']);
    
    $retPage = 'index.php?page=accueil';
    require_once 'View/animauxjeanpaul.php';
}
else{
    header('Location: index.php?page=connexion');
}