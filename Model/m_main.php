<?php

/*
  Permet de se connecter à la base de donnée
 * @param pass : (facultatif) mot de passe des la base
 */

function connect_db($pass = '') {
    try {
        $db = new PDO('mysql:host=Localhost;dbname=keepcat', 'root', $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die('Erreur : PDO Exception: ' . $e->getMessage());
    }
    return $db;
}
