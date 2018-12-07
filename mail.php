<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Envoi d'un email par formulaire</title>
    </head>
    <body>
        <p>
        <?php
        $retour = mail('erwan.battais@ynov.com', 'Envoi depuis le site test', $_POST['message'], 'From : webmaster@free.fr');
        
        ?>
        </p>
    </body>
</html>