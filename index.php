<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css">
  <title>Vakapp</title>
</head>

<body>
  <main>
    <section class="front">
      <img class="front_image" src="/images/national-cancer-institute-opti.jpg" alt="Photo de médecins" />
      <h1 class="text_image">Rejoignez le mouvement Vakapp</h1>
    </section>
    <img class="logo" src="/images/Logo_Vak.png" alt="Logo de VakApp" />
    <section class="container">
      <article>
        <h2>L'application qui facilite les vacations</h2>
        <p>Découvrez Vakapp l'application qui à pour vocation de faciliter les vacations. Retrouvez des profils vérifiés, un agenda intégré, notre volonté : la simplicité.
      </article>
      <article>
        <h2>Qui sommes-nous ?</h2>
        <p>Nous sommes une jeune start-up qui avons des proches qui ont vécu ce problème et qui avons décidé d'y résoudre. Nous sommes 10 membres polyvalents et complémentaires qui regroupons nos compétences pour mettre au point l'application qui vise à simplifier et fiabiliser les vacations, dans les structures de la santé.</p>
      </article>
      <article>
        <h2>Pour les vacataires ...</h2>
        <div class="register_images">
          <div class="flex_div">
            <img class="flex_images" src="/images/post.png" alt="post" />
            <p class="flex_text">Inscrivez-vous</p>
          </div>
          <div class="flex_div">
            <img class="flex_images" src="/images/medical-app.png" alt="medical-app" />
            <p class="flex_text">Trouvez une vacation adaptée à vous</p>
          </div>
          <div class="flex_div">
            <img class="flex_images" src="/images/medal.png" alt="medal" />
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
            <img src="/images/filter.png" alt="filter" />
            <p class="flex_text">Utilisez les filtres et gagnez du temps</p>
          </div>
          <div class="flex_div">
            <img src="/images/presentation.png" alt="presentation" />
            <p class="flex_text">Trouvez le profil parfait pour vos besoins</p>
          </div>
          <div class="flex_div">
            <img src="/images/puzzle.png" alt="puzzle" />
            <p class="flex_text">Rencontrez le profil</p>
          </div>
        </div>
      </article>
    </section>
    <section class="valeur">
      <h2 class="valeur_titre">Nos valeurs</h2>
      <div class="register_images">
        <div class="flex_div">
          <img src="/images/high-quality.png" alt="high-quality" />
          <p class="valeur_text">Utilisez les filtres et gagnez du temps</p>
        </div>
        <div class="flex_div">
          <img src="/images/solidarity.png" alt="solidarity" />
          <p class="valeur_text">Trouvez le profil parfait pour vos besoins</p>
        </div>
        <div class="flex_div">
          <img src="/images/trust.png" alt="trust" />
          <p class="valeur_text">Rencontrez le profil</p>
        </div>
      </div>
    </section>
    <section class="container">
      <div class="register_images">
        <div>
          <a href="#"><img src="/images/facebook-2.png" alt="facebook-2" /></a>
        </div>
        <div>
          <a href="#"><img src="/images/linkedin-logo.png" alt="linkedin-logo" /></a>
        </div>
      </div>
    </section>
    <div class="form">
      <h2>Soyez le premier à être informé</h2>
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