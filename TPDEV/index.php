
<!DOCTYPE html>
<html>
<head>
  <title>Accueil - US.Enseignes</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/png" href="images/image001.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <script src="js/scriptindex.js"defer></script>
  </head>
<body>
 
<!-- Début de mon header -->
   <header>
  <!-- Ma modale pour les cookie  -->
   <div id="cookieModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Politique de cookies</h2>
    <p>Nous utilisons des cookies pour améliorer votre expérience sur notre site web en enregistrant vos préférences et en fournissant des données analytiques anonymes.</p>
    <p>Si vous acceptez notre utilisation de cookies, cliquez sur "Accepter". Si vous préférez ne pas autoriser les cookies, cliquez sur "Refuser".</p>
    <br>
    <button id="acceptBtn">Accepter</button>
    <button id="declineBtn">Refuser</button>
  </div>
</div>

<!-- Ma div contact-info -->
<div class="contact-info">
  <span><i class="fas fa-phone"></i> 07 71 68 12 13</span>
  <span><i class="fas fa-envelope"></i> u.s.enseignes@gmail.com </span>
</div>

<!-- NAVBAR -->
<nav>
  <ul class="navbar-list">
    <!-- Bouton déconnexion -->
    <a href="logout.php" class="logout-button">Déconnexion</a>
    <?php
      session_start();
      if(isset($_SESSION["username"])){
        echo "<p class='welcome-message'>Bienvenue, " . $_SESSION["username"] . "</p>";
      }else{
        echo "<p class='welcome-message'>Vous n'êtes pas connecté.</p>";
      }
    ?>

    <li class="navbar-item"> 
      <a href="index.php"> 
        <img src="images/image001.png" alt="logo" height="30" class="navbar-logo"> 
      </a> 
    </li>
    <li class="navbar-item"><a href="index.php">Nos services</a></li>
    <li class="navbar-item"><a href="sommesnous.php">Qui sommes-nous ?</a></li>
    <li class="navbar-item"><a href="realisations.php">Nos réalisations</a></li>
    <li class="navbar-item"><a href="produits.php">Nos produits</a></li>
    <li class="navbar-item"> <a href="avis.php">Avis</a></li>
    <li class="navbar-item"><a href="login.php">Se connecter</a></li>
    <li class="navbar-item"><a href="contact.php">Nous contacter</a></li>
    <li class="navbar-item">
      <a href="https://www.facebook.com/usenseignestroyes/" target="_blank" class="facebook-button">
        <img src="images/fbgold.png" alt="Facebook" height="30">
      </a>
      <a href="panier.php" target="_blank" class="panier-button">
        <img src="images/paniergold.png" alt="Panier" height="30">
      </a>
    </li>
  </ul>
</nav>
  
  
  </header>
  
  
  
  <main>


  <img id="logo1"src="images/image001.png" alt="Logo sur mesure" style="width: 50%; display: block; margin: 0 auto; border: #FFD700 2px solid;margin-top: 50px;">

    <!-- séparation -->
    <div style="border-top: 1px solid gray; margin: 50px 0;"></div>

 <!-- Section 1 -->
 <section id="nos-services">
      <div class="section-content">
        <h1 class="section-title">Nos services</h1>
        <p class="section-text">En tant qu'entreprise spécialisée dans la pose d'enseignes, chez US.Enseignes,
           nous offrons une variété de services pour répondre aux besoins spécifiques de chaque client. 
           Voici quelques exemples de services que nous proposons :</p>
        <div class="section-video">
         <video width="320" height="240" controls>
         <source src="videos/Delta Enseignes  vidéo de présentation de lentreprise Delta Enseignes située à Plaisance du Touch.mp4" type="video/mp4">
         <source src="videos/Delta Enseignes  vidéo de présentation de lentreprise Delta Enseignes située à Plaisance du Touch.ogg" type="video/ogg">
          Your browser does not support the video tag.
         </video>
        </div>
        <ul class="section-list">
           <li>Conception et fabrication d'enseignes sur mesure</li>
           <li>Installation d'enseignes professionnelle</li>
           <li>Entretien et réparation d'enseignes</li>
           <li>Conception de signalétique pour orienter les clients</li>
           <li>Conception d'affiches pour promouvoir les produits et services</li>
        </ul>
      </div>
    </section>


    <!-- séparation -->
    <div style="border-top: 1px solid gray; margin: 50px 0;"></div>


<!-- Section 2 -->
<section id="notre-equipe">
      <h1 class="section-title">Notre équipe</h1>
      <div class="team-container">
          <p class="team-description">Chez US.Enseignes, nous avons une équipe de professionnels expérimentés qui se consacrent 
            à la création de logos pour nos clients. Nous comprenons l'importance d'avoir un logo qui reflète l'image de marque de 
            votre entreprise et attire l'attention des clients. Nous travaillons en étroite collaboration avec nos clients pour comprendre 
            leurs besoins et créer un logo qui les représente de manière unique et mémorable.</p>
          <p class="team-description">Une fois le logo créé, notre équipe s'occupe de l'impression sur 
            différents supports tels que des bâches, des panneaux, des adhésifs, des panneaux de signalisation, 
            des plaques professionnelles, etc. Nous utilisons des techniques d'impression de qualité supérieure 
            pour garantir que les couleurs et les détails du logo restent vifs et nets.</p>
          <p class="team-description">Après l'impression, notre équipe professionnelle s'occupe de la pose de ces enseignes. 
            Nous nous assurons que l'installation se fait en respectant les normes de sécurité et de qualité pour garantir 
            la bonne tenue des éléments. Nous nous occupons également de l'entretien et de la réparation de ces éléments 
            pour garantir leur bonne tenue dans le temps.</p>
      </div>

      <div class="team-container">
    <div class="team-member">
      <img src="images/sebastien.jpg" alt="Photo de membre d'équipe">
      <h3>Sébastien Urbain</h3>
      <p>Directeur de US.Enseignes</p>
      <p>Sébastien Urbain est le Directeur de US.Enseignes,
         une entreprise spécialisée dans la pose d'enseignes. En tant que dirigeant, 
         il est responsable de la direction générale de l'entreprise et de la mise en œuvre de sa stratégie. 
         Avec son expertise en gestion d'entreprise et développement commercial, Sébastien Urbain est un leader déterminé et visionnaire, 
         axé sur les résultats.</p>
    </div>
    <div class="team-member">
      <img src="images/rhlx.png" alt="Photo de membre d'équipe">
      <h3>Quentin Clivot</h3>
      <p>Stagiare Développeur Web</p>
      <p>Quentin Clivot est un stagiaire développeur web passionné par les technologies de l'information et la création de sites web 
        et d'applications. Il est en train de développer ses compétences en programmation et en développement web en travaillant sur 
        des projets concrets sous la supervision d'experts du domaine. Quentin est enthousiaste à l'idée d'acquérir de l'expérience 
        pratique et de développer ses compétences pour devenir un développeur web accompli.</p>
    </div>
    <div class="team-member">
      <img src="images/vincent.jpg" alt="Photo de membre d'équipe">
      <h3>Vincent Ripoll</h3>
      <p>Infographiste et Développeur Web</p>
      <p>Vincent Ripoll est un talentueux infographiste et développeur web.
         En tant que gérant de kocktail, une entreprise de communication web, 
         il utilise ses compétences en infographie et en développement pour aider les clients à atteindre leurs objectifs de communication
          en ligne. Vincent a une solide expérience en création de sites web, en développement d'applications et en graphisme, 
          ce qui lui permet de comprendre les besoins de ses clients et de fournir des solutions personnalisées et efficaces. 
          Il est un leader créatif et déterminé, toujours à la recherche de nouvelles façons d'améliorer les services de son entreprise.</p>
    </div>
  </div>
  </section>

    <!-- séparation -->
    <div style="border-top: 1px solid gray; margin: 50px 0;"></div>


<!-- Section 3 -->
    <section id="nos-realisations">
      <h1>Nos réalisations</h1>
      <p>Découvrez quelques-unes de nos réalisations en matière d'enseignes pour les entreprises et les commerces.</p>
      <img src="images/692645080.jpg" alt="Réalisation 1"height="500">
      <img src="images/Capture d’écran 2023-01-04 194700.jpg" alt="Réalisation 2">
      <img src="images/37174BAB162843328B0DA2FC0B55DD46[11803443].png" alt="Réalisation 3">
    </section>

      <!-- séparation -->
      <div style="border-top: 1px solid gray; margin: 50px 0;"></div>

<!-- Section 4 -->
<div id="card">
  <div id="title">Nous contacter</div>
  <div id="content">
    <p>Pour toute demande de renseignements ou de devis, n'hésitez pas à nous contacter par téléphone au 07.71.68.12.13 
      ou par email à u.s.enseignes@gmail.com.</p>
  </div>
</div>


      </main>

        <!-- séparation -->
    <div style="border-top: 1px solid gray; margin: 50px 0;"></div>


<!-- Pagination -->
<div class="pagination">
  <a href="index.php">1</a>
  <a href="sommesnous.php">2</a>
  <a href="realisations.php">3</a>
  <a href="produits.php">4</a>
  <a href="avis.php">5</a>
  <a href="login.php">6</a>
  <a href="contact.php">7</a>
</div>

<div class="survey-container">
  <button class="survey" onclick="survey()">Lancez le sondage</button>
</div>

 

<!-- Section juste au dessus du footer -->
<section id="securite-sur-mesure-fabrication">
   
    <div class="securite">
      <img src="images/cadenas.png" alt="Logo cadenas"height="30">
      <p>PAIEMENT SÉCURISÉ </p>
    </div>

    <div class="sur-mesure">
      <img src="images/surmesure.png" alt="Logo sur mesure"height="30">
      <p>SUR MESURE </p>
    </div>

    <div class="fabrication-france">
      <img src="images/logo-france.png" alt="Logo France"height="30">
      <p>FABRICATION EN FRANCE </p>
    </div>

  </section>

  <!-- Bouton remonter la page -->
  <button class="top-button" onclick="goToTop()">Retour en haut de page</button>

<!-- Footer-->
<footer>
  <p><span>Copyright © 2023 US.Enseignes</span></p>
  <a href="mentionslegale.php">Mentions légal</a>
  <a href="newletters.php">Newletters</a>



  <div class="footer-container">
        <div class="footer-info">
            <h3>INFORMATIONS </h3>
            <p> US.Enseignes</p>
            <p>12 rue des Enseignes</p>
            <p>31000 Toulouse</p>
            <p>France</p>
        </div>

        <div class="footer-contact">
            <h3>CONTACT </h3>
            <p> Appelez-nous :</p>
            <p>07 71 68 12 13</p>
            <p>Écrivez-nous :</p>
            <p> u.s.enseignes@gmail.com</p>
        </div>
    </div>
</footer>


</body>
</html>
