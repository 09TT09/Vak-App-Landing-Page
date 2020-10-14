<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vakapp</title>
</head>

<body>
  <form action="form.php" method="post">
    <input type="text" name="nom" placeholder="Nom" />
    <input type="text" name="prenom" placeholder="Prenom" />
    <input type="mail" name="email" placeholder="Email" />
    <input type="submit" />
  </form>
  <?php if (isset($_GET['success'])) {
    echo ('<p>Le formulaire a bien été envoyé</p>');
  } else if (isset($_GET['error'])) {
    echo ('<p>Un problème est survenu</p>');
  }
  ?>

</body>

</html>