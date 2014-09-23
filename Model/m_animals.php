<?php
/*
    Retourne la liste des animaux d'un utilisateur
    @param num: Le numéro de l'utilisateur concerné
*/
function get_animals_user($num){
    global $db;
    $req = $db->prepare("SELECT animal.*, photo.* FROM animal "
                       ."INNER JOIN user ON animal.numUser = user.num "
                       ."LEFT OUTER JOIN photo ON animal.numPhoto = photo.num "
                       ."WHERE user.num = :num ORDER BY animal.b_date ASC");
    $req->execute(array(':num' => $num));
    $animals = $req->fetchAll();
    return $animals;
}
