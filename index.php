<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boycott</title>
</head>
<body>
    <header></header>
    <main></main>
    <form action="dataProc.php" method="post">
        <input type="text" name="messageContent" id="messageContent" placeholder="Votre message" required>
        <input type="submit" name="envoie" id="envoie" value="Envoyer le message">
    </form>


</body>
</html>


<?php
    include 'db.php';
    global $db;

    $q = $db -> query("SELECT * FROM message");
    while($message = $q->fetch()){
        echo "message : " . $message['content'];
        ?>

    <br>

        <?php
    }

?>
