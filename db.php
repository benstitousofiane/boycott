<?php

    define('HOST','localhost');
    define('DB_NAME','boycott');
    define('USER','root');
    define('PASS','');


    try{
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
    }
    catch(PDOException $e){
        echo "Erreur, connexion non établie avec la base de donnée : ";
        echo "$e";
    }
?>
