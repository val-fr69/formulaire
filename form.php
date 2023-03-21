<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire</title>
</head>

<body>
  <main>
    <form action="thanks.php" method="POST">
      <div>
        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="firstname">
      </div>

      <div>
        <label for="lastname">Nom :</label>
        <input type="text" id="lastname" name="lastname">
      </div>

      <div>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email">
      </div>

      <div>
        <label for="telephone">Telephone:</label>
        <input type="text" id="telephone" name="telephone">
      </div>

      <div>
        <label for="select-choix">Choisir le sujet</label>

        <select name="select-choix" id="select-choix">
          <option value="">--Merci de choisir un sujet--</option>
          <option value="iphone">Iphone</option>
          <option value="samsung">Samsung</option>
          <option value="google">Google Pixel</option>
        </select>
      </div>

      <div>
        <label for="contact-message">Message:</label>
        <textarea name="contact-message" id="contact-message" rows="10"></textarea>
      </div>

      <div class="buttonsLine">
        <button type="submit">Envoyer</button>
      </div>
    </form>
  </main>

</body>

</html>