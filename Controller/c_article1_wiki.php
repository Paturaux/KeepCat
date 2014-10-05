<?php

if(isset($_SESSION['name'])){
    $retPage = 'index.php?page=wikichat';
    require_once 'View/article1_wiki.php';
}
else{
    header('Location: index.php?page=connexion');
}