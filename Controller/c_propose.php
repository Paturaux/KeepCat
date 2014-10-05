<?php
if(isset($_SESSION['name'])){
    if(isset($_SESSION['screen']) and $_SESSION['screen'] == 'phone'){
        $retPage = 'index.php?page=accueil';
        require_once 'View/proposer.php';
    }
    else{
        require_once 'ViewWS/v_propose.php';
    }
}
else{
    header('Location: index.php?page=connexion&dst=proposer');
}

