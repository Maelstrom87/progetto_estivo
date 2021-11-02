<?php

try {
    $hostname = 'localhost';
    $dbname = 'agenzia_viaggi';
    $user = 'root';
    $pass = '';
    $db = new PDO("mysql:host=$hostname;dbname=$dbname", $user, $pass);
    //$db = new PDO("mysql:host=dove si trova il database;dbname=nome database", nome utente, password);
 
} catch (PDOException $e){
    echo 'Errore: '.$e->getMessage();//mostra un errore che descrive quali dati sono errati
    die();
}

?>