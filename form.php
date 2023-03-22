<?php

$errors=[];

if($_SERVER['REQUEST_METHOD'] === 'POST') {

if(!isset($_POST['firstname']) || trim($_POST['firstname']) === '')
  $errors[] = "Le prénom est obligatoire";

if(!isset($_POST['lastname']) || trim($_POST['lastname']) === '')
  $errors[] = "Le nom est obligatoire";

if(!isset($_POST['email']) || trim($_POST['email']) === '')
  $errors[] = "L'adresse email est obligatoire"; 

if(!isset($_POST['telephone']) || trim($_POST['telephone']) === '')
  $errors[] = "Le numéro de téléphone est obligatoire";

if(!isset($_POST['select-choix']) || trim($_POST['select-choix']) === '')
  $errors[] = "Le sélection du sujet est obligatoire";

if(isset($_POST['mail']) && !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))
  $errors[] = "Le format de l'email est incorrect";

if(!isset($_POST['contact-message']) || trim($_POST['contact-message']) === '')
  $errors[] = "Le message est obligatoire";

if(empty($errors)) {
  die();
}
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire</title>
</head>

<body>

<?php 
             if (count($errors) > 0) : ?>
                <div>
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
        <?php endif; 
?>

  <main>
    <form action="" method="POST">
      <div>
        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="firstname" >
      </div>

      <div>
        <label for="lastname">Nom :</label>
        <input type="text" id="lastname" name="lastname" >
      </div>

      <div>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" >
      </div>

      <div>
        <label for="telephone">Telephone:</label>
        <input type="text" id="telephone" name="telephone" >
      </div>

      <div>
        <label for="select-choix">Choisir le sujet</label>

        <select name="select-choix" id="select-choix" >
          <option value="">--Merci de choisir un sujet--</option>
          <option value="iphone">Iphone</option>
          <option value="samsung">Samsung</option>
          <option value="google">Google Pixel</option>
        </select>
      </div>

      <div>
        <label for="contact-message">Message:</label>
        <textarea name="contact-message" id="contact-message" rows="10" ></textarea>
      </div>

      <div class="buttonsLine">
        <button type="submit" name="submit">Envoyer</button>
      </div>
    </form>
  </main>

</body>

</html>