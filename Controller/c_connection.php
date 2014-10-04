<?php
$location;
if(isset($_SESSION['screen']) and $_SESSION['screen'] == 'phone'){
    $location = 'View/connexion.php';
}
else{
    $location = 'ViewWS/v_connection.php';
}

// step == verif : on en est Ã  l'Ã©tape de vÃ©rification
if (isset($_GET['step']) and $_GET['step'] == 'verif') {
    require_once 'Model/m_users.php';
    if (isset($_POST['mail']) and isset($_POST['pass'])) {
        $res = check_logins(strip_tags($_POST['mail']), strip_tags($_POST['pass']));
        var_dump($res);
        if ($res === 'mail')
            $error['mail'] = 'Mail incorrect';
        else if ($res === 'pass')
            $error['pass'] = 'Mot de passe inccorrect';
        else {
            $user = get_user_infos($res['num']); // res est le numÃ©ro utilisateur
            $_SESSION['num'] = $user->num;
            $_SESSION['mail'] = $user->mail;
            $_SESSION['name'] = $user->name;
            $_SESSION['first_name'] = $user->first_name;
            if(isset($_GET['dst'])){
                header('Location: index.php?page='.strip_tags($_GET['dst']));
            }
            else
                header('Location: index.php?page=accueil');
        }
    }
    require_once $location;
} else {
    require_once $location;
}
    
    