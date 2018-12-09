<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Envoi d'un email par formulaire</title>
    </head>
    <body>
        <p>
        <?php
        $retour = mail('exemple@test.com', 'Envoi depuis le site test', $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['message'], 'From : exemple@test.com');
        
        ?>
        </p>
    </body>
</html>