<?php

# Développé par Romain GILOT
# Auto-entreprise : Nexuria France

require('./config/_config.inc.php');

#---------------------------------
# Connexion à la base de données
#---------------------------------

function bddConnect()
{
    try {
        $con     = 'mysql:host=' . DB_SERVER . ';dbname=' . DB_DATABASE . ';charset=utf8';
        $extraParam    = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        );

        $pdo = new PDO($con, DB_USER, DB_PWD, $extraParam);
        return $pdo;
    } catch (PDOException $e) {
        $msg = 'ERREUR PDO connexion...' . $e->getMessage();
        die($msg);
        return false;
    }
}
