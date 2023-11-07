<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Voyage | freitas</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.0.0/swiper-bundle.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="style-reservation.css">
</head>

<body>
  <!-- Section de l'entête -->
  <section class="header">
    <!--<div="imag" alt="bizness logo" width="150px" height="120px"></div=>-->
    <div>
      <img src="./images/logo-Gabon.jpg" width="150px" height="120px">

    </div>
    <nav class="navbar">
      <a href="index.php">accueil</a>
      <a href="apropos.php">a propos</a>
      <a href="#">paquets</a>
      <a href="reservation.php">reservation</a>
    </nav>
    <div class="fas fa-bars" id="menu-btn"></div>
  </section>
  <!-- section de la banniere -->
  <section class="home">
    <div class="home-slider swiper">
      <div class="swiper-wrapper">
        <div class="slide swiper-slide" style="
              background: url(./images/WhatsApp-Image-2023-04-20-at-11.16.18.jpeg.webp)
                no-repeat;">
          <div class="content">
            <span>un guide de voyage passionnant</span>
            <h3>VOYAGER DANS LE GABON PROFOND l'avanture vous attend.</h3>
            <a href="#" class="btn"> découvrir plus</a>
          </div>
        </div>
        <div class="slide swiper-slide" style="
              background: url(./images/14062.jpeg) no-repeat;">
          <div class="content">
            <span>explorer, découvrir, voyage</span>
            <h3>Embarquez pour le GABON !</h3>
            <a href="#" class="btn"> découvrir plus</a>
          </div>
        </div>
        <div class="slide swiper-slide" style="
              background: url(./images/678393E9-3E48-4392-8E9D-636AE0C2CCE8.jpeg)no-repeat;">
          <div class="content">
            <span>explorer, découvrir, voyage</span>
            <h3>voyager,c'est grandir.</h3>
            <a href="#" class="btn"> découvrir plus</a>
          </div>
        </div>
        <div class="slide swiper-slide" style="background: url(./images/Gabon-Gabonmediatime_Foret-gabonaise_Tourisme_Gabon.jpeg) no-repeat;">
          <div class="content">
            <span>explorer, découvrir, voyage</span>
            <h3>découvrez les tresors cachés du gabon</h3>
            <a href="#" class="btn"> découvrir plus</a>
          </div>
        </div>
        <div class="slide swiper-slide" style="background: url(./images/Gabon-parc-tourisme.jpeg)no-repeat;">
          <div class="content">
            <span>découvrir de nouveaux endroits</span>
            <h3>planifiez votre itinéaire parfait</h3>
            <a href="#" class="btn"> découvrir plus</a>
          </div>
        </div>
        <div class="slide swiper-slide" style="
              background: url(./images/Capture-décran-2021-03-24-à-12.29.32-copie.jpeg)
                no-repeat;
            ">
          <div class="content">
            <span>explorer, découvrir, voyage</span>
            <h3>rendez votre visite intéressante</h3>
            <a href="#" class="btn">découvrir plus</a>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </section>
  <!-- section de la reservation -->
  <section class="reservation">
    <h1> contactez-nous</h1>
    <form action="traitement_formulaire.php" method="post">
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="nom" required><br><br>

      <label for="prenom">Prénom :</label>
      <input type="text" id="prenom" name="prenom" required><br><br>

      <label for="email">Email :</label>
      <input type="email" id="email" name="email" required><br><br>

      <label for="message">Message :</label>
      <textarea id="message" name="message" rows="4" required></textarea><br><br>

      <input type="submit" value="Envoyer">
    </form>
  </section>



  <!-- section du pied de la page -->
  <section class="footer">
    <div class="box-container">
      <div class="box">
        <h3>Liens rapides</h3>
        <a href="#"><i class="fas fa-angle-right"></i>accueil
        </a>
        <a href="#"><i class="fas fa-angle-right"></i>a propos
        </a>
        <a href="#"><i class="fas fa-angle-right"></i>visiter
        </a>
        <a href="#"><i class="fas fa-angle-right"></i>reservation
        </a>
      </div>
      <div class="box">
        <h3>Liens extra</h3>
        <a href="#"><i class="fas fa-angle-right"></i>posez
          questions
        </a>
        <a href="#"><i class="fas fa-angle-right"></i>a propos de
          nous
        </a>
        <a href="#"><i class="fas fa-angle-right"></i>politique de
          confidentialité
        </a>
        <a href="#"><i class="fas fa-angle-right"></i>nos termes
        </a>
      </div>
      <div class="box">
        <h3>info contact</h3>
        <a href="#"><i class="fas fa-phone"></i>+241 07123812</a>
        <a href="#"><i class="fas fa-phone"></i> +33 0767893411
        </a>
        <a href="#"><i class="fas fa-envelope"></i>freitasfranckeric@gmail.com
        </a>
        <a href="#"><i class="fas fa-map"></i>Libreville-Gabon
        </a>
      </div>
      <div class="box">
        <h3>suivez nous</h3>
        <a href="#"><i class="fab fa-facebook"></i>facebook
        </a>
        <a href="#"><i class="fab fa-twitter"></i>twitter
        </a>
        <a href="#"><i class="fab fa-instagram"></i>instagram
        </a>
        <a href="#"><i class="fab fa-linkedin"></i>linkedIn
        </a>
      </div>
    </div>
    <div class="home-right">
      créé par <span>Freitas franck</span> | tout droit
      reservé
    </div>
  </section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.0.0/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
</body>

</html>
</body>

</html>