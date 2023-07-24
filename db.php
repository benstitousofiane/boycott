<?php

    define('HOST','localhost');
    define('DB_NAME','boycott');
    define('USER','root');
    define('PASS','');


    try{
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
    }
    catch(PDOException $e){
        echo "Erreur, connection non étable à la base de donnée : ";
        echo "$e";
    }
?>