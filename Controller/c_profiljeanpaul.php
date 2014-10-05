<?php

if(isset($_SESSION['name'])){
    require_once 'Model/m_users.php';
    $user = get_user_infos($_SESSION['num']);
    $dateTime = new dateTime(date('Y-m-d'));
    $user->age = $dateTime->diff(new dateTime($user->b_date))->format('%y%');
    
    $retPage = 'index.php?page=accueil';
    require_once 'View/profiljeanpaul.php';
}
else{
    header('Location: index.php?page=connexion');
}