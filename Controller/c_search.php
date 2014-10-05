<?php

require_once 'Model/m_users.php';
$listeUsers = get_users((isset($_SESSION['num'])? $_SESSION['num']: -1), 'mark');
if(isset($_SESSION['screen']) and $_SESSION['screen'] == 'phone'){
    if(isset($_SESSION['name'])){
        $retPage = 'index.php?page=accueil';
        require_once 'View/rechercher.php';
    }
    header('Location: index.php?page=connexion&dst=rechercher');
}
else{
    require_once 'ViewWS/v_search.php';
}

