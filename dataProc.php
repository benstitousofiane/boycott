<?php
    include 'db.php';
    global $db;
    if (isset($_POST['envoie'])){
        if (!empty($_POST['messageContent'])){
            $q = $db -> prepare("INSERT INTO message(content) VALUES(:content)");
            $q -> execute([
            'content' => $_POST['messageContent']
            ]);
        }

    }
    

    header("Location:index.php");
?>