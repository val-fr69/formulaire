<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    
</head>

<body> 
     
<?php
    $firstName = ($_POST["firstname"]);
    $lastName = ($_POST["lastname"]);
    $email = ($_POST["email"]);
    $tel = ($_POST["telephone"]);
    $select = ($_POST["select-choix"]);
    $message = ($_POST["contact-message"]);
?>
          
<div> 

Merci <?= $firstName ?> <?=$lastName?> de nous avoir contacté à propos de “<?=$select?>”.

Un de nos conseillers vous contactera soit à l’adresse <?=$email?> ou par téléphone au <?=$tel?> dans les plus brefs délais pour traiter votre demande : 

<?=$message?> </p>

</div>
            
    
</body>

</html>