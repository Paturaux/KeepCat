<?php

if(isset($_SESSION['name'])){
    $retPage = 'index.php?page=contact';
    require_once 'View/chatroulette.php';
}
else{
    header('Location: index.php?page=connexion');
}