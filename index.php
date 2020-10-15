<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Vakapp</title>
</head>

<body>
  <main>

    <section class="front">
      <img class="front_image" src="national-cancer-institute-opti.jpg" alt="Photo de médecins" />
      <h1 class="text_image">Rejoignez le mouvement Vakapp</h1>
    </section>
    <img class="logo" src="Logo_Vak.png" alt="Logo de VakApp" />

    <section class="container first_container">

      <article>
        <h2>L'application qui facilite les vacations</h2>
        <p class="p_first_container">Découvrez Vakapp l'application qui à pour vocation de faciliter les vacations. Retrouvez des profils vérifiés, un agenda intégré, notre volonté : la simplicité.
      </article>

      <article>
        <h2>Qui sommes-nous ?</h2>
        <p class="p_first_container">Nous sommes une jeune start-up qui avons des proches qui ont vécu ce problème et qui avons décidé d'y résoudre. Nous sommes 10 membres polyvalents et complémentaires qui regroupons nos compétences pour mettre au point l'application qui vise à simplifier et fiabiliser les vacations, dans les structures de la santé.</p>
      </article>

      <article>
        <h2 class="h2_dimension">Pour les vacataires ...</h2>
        <div class="register_images">
          <div class="flex_div">
            <img class="flex_images image_logo_height" src="post_redim.png" alt="post" />
            <p class="flex_text">Inscrivez-vous</p>
          </div>
          <div class="flex_div">
            <img class="flex_images" src="medical-app.png" alt="medical-app" />
            <p class="flex_text">Trouvez une vacation adaptée à vous</p>
          </div>
          <div class="flex_div">
            <img class="flex_images" src="medal.png" alt="medal" />
            <p class="flex_text">Recevez des récompenses pour vos intéractions</p>
          </div>
        </div>
      </article>

    </section>

    <hr class="division" />

    <section class="container">
      <article>
        <h2>Pour les structures ...</h2>
        <div class="register_images">
          <div class="flex_div">
            <img class="flex_images image_logo_height" src="filter_redim.png" alt="filter" />
            <p class="flex_text">Utilisez les filtres et gagnez du temps</p>
          </div>
          <div class="flex_div">
            <img class="flex_images image_logo_height" src="presentation_redim.png" alt="presentation" />
            <p class="flex_text">Trouvez le profil parfait pour vos besoins</p>
          </div>
          <div class="flex_div">
            <img class="flex_images image_logo_height" src="puzzle_redim.png" alt="puzzle" />
            <p class="flex_text">Rencontrez le profil</p>
          </div>
        </div>
      </article>
    </section>
    <section class="valeur">
      <h2 class="valeur_titre">Nos valeurs</h2>
      <div class="register_images_2">
        <div class="flex_div flex_div_margin">
          <img class="flex_images image_logo_height" src="high-quality_redim.png" alt="high-quality" />
          <p class="valeur_text">Utilisez les filtres et gagnez du temps</p>
        </div>
        <div class="flex_div flex_div_margin">
          <img class="flex_images image_logo_height" src="solidarity_redim.png" alt="solidarity" />
          <p class="valeur_text">Trouvez le profil parfait pour vos besoins</p>
        </div>
        <div class="flex_div flex_div_margin">
          <img class="flex_images image_logo_height" src="trust_redim.png" alt="trust" />
          <p class="valeur_text">Rencontrez le profil</p>
        </div>
      </div>
    </section>
    <section class="container">
    <p class="reseaux_text">Retrouvez nous sur les réseaux :</p>
      <div class="reseaux_sociaux">
        <div>
          <a href="#"><img class="reseaux_logo flex_images" src="facebook-2.png" alt="logo facebook" /></a>
        </div>
        <div>
          <a href="#"><img class="reseaux_logo flex_images" src="linkedin-logo.png" alt="logo linkedin" /></a>
        </div>
        <div>
          <a href="#"><img class="reseaux_logo flex_images" src="tiktok.png" alt="logo tiktok" /></a>
        </div>
      </div>
    </section>
    <div class="form">
      <h2 class="text_form">Soyez le premier à être informé</h2>
      <form action="form.php" method="post">
        <div>
          <input class="email" type="mail" name="email" placeholder="Email" />
          <input class="valid" type="submit" />
        </div>
        <?php if (isset($_GET['success'])) {
          echo ('<p>Le formulaire a bien été envoyé</p>');
        } else if (isset($_GET['error'])) {
          echo ('<p>Un problème est survenu</p>');
        }
        ?>
      </form>
    </div>

  </main>

  <footer>
    <p class="footer">© 2020 Vakapp - Website developped by Ruben Barros & Théo Rossignol</p>
  </footer>

</body>

</html>