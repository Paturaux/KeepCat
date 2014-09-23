<?php

/*
 * Retourne le numÃ©ro de l'utilisateur si celui-ci est trouvÃ©
 * Retourne 'mail' si le @mail n'est pas trouvÃ©e et retourne 'pass' si les mot de passe n'est pas trouvÃ©
 * @param mail: L'adresse mail de l'utilisateur
 * @param pass: le mot de passe de l'utilisateur
 */

function check_logins($mail, $pass) {
    global $db;
    $quer = $db->prepare("SELECT num FROM user WHERE mail = :mail");
    $quer->execute(array(':mail' => $mail));
    if ($quer->fetch() === false) {
        return 'mail';
    }
    $quer = $db->prepare("SELECT num FROM user WHERE mail = :mail AND pass = :pass");
    $quer->execute(array(':mail' => $mail, ':pass' => $pass));
    $res = $quer->fetch();
    if ($res === false) {
        return 'pass';
    }
    return $res;
}

/*
  Retourne les informations d'un utilisateur en fonction de son numÃ©ro (Sous forme d'objet anonyme)
 * @param num : le numÃ©ro de l'utilisateur
 */

function get_user_infos($num) {
    global $db;
    $quer = $db->prepare("SELECT * FROM user WHERE num = :num");
    $quer->execute(array(':num' => $num));
    return $quer->fetch(PDO::FETCH_OBJ);
}
