<?php

/*
    Retourne la liste des image correspondants à ce(aux) numéro(s) demandé(s)
    @param num : numéro de l'image ou tableau de numéro des images voulues
    !!! Pas protégé des injection SQL
*/
function get_photo_num($num){
    global $db;
    if(is_array($num)){
        $res = $db->query("SELECT * FROM photo WHERE num IN(".implode(', ', $num).")", PDO::FETCH_ASSOC);
        var_dump($res);
    }
    else{
        $req = $db->prepare("SELECT * FROM photo WHERE num = :num");
        $req->execute(array(':num' => $num));
        return $res->fetch();
    }
}
