<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" type="image/png" href="images/image001.png">
   
    <title>Qui Sommes-Nous ?</title>
    
    <link rel="stylesheet" type="text/css" href="css/stylesommenous.css">
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <script src="js/scriptavis.js"defer></script>
  </head>



<body>
    

<header>
   
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

  <!-- Section Qui Sommes-Nous ? -->
  <div id="card">
  <h1 id="title">Qui Sommes-Nous ?</h1>
  <section id="quisommesnous">
    <div id="content">
      <p>US.Enseignes est dirigé par Sébastien Urbain, un gérant expérimenté avec plus de 10 ans d'expérience dans la pose d'enseignes. Il a acquis une grande expertise grâce à sa passion pour son travail et son engagement envers la qualité. </p>
      <p>Sous la direction de Sébastien, US.Enseignes est devenu un leader dans le domaine de la pose d'enseignes et a établi une réputation solide pour la qualité de son travail et son excellent service client. Il travaille dans tout le secteur de l'Aube et est prêt à étendre ses services plus loin si nécessaire.</p>
      <p>Pour toute demande, n'hésitez pas à nous contacter au 07.71.68.12 13 ou par email à u.s.enseignes@gmail.com.</p>
      <p>L'équipe US.Enseignes.</p>
    </div>
  </section>
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


<!-- Section au dessus du footer  -->
<section id="securite-sur-mesure-fabrication">
    <div class="securite">
      <img src="images/cadenas.png" alt="Logo cadenas"height="30">
      <p>PAIEMENT SÉCURISÉ</p>
    </div>
    <div class="sur-mesure">
      <img src="images/surmesure.png" alt="Logo sur mesure"height="30">
      <p>SUR MESURE</p>
    </div>
    <div class="fabrication-france">
      <img src="images/logo-france.png" alt="Logo France"height="30">
      <p>FABRICATION EN FRANCE</p>
    </div>
  </section>
  
 
 <!-- Footer-->
 <footer>
  <p><span>Copyright © 2023 US.Enseignes</span></p>
  <a href="mentionslegale.php">Mentions légal</a>
  <a href="newletters.php">Newletters</a>


  <div class="footer-container">
        <div class="footer-info">
            <h3>INFORMATIONS</h3>
            <p> US.Enseignes</p>
            <p>12 rue des Enseignes</p>
            <p>31000 Toulouse</p>
            <p>France</p>
        </div>
        <div class="footer-contact">
            <h3>CONTACT</h3>
            <p>Appelez-nous :</p>
            <p>07 71 68 12 13</p>
            <p>Écrivez-nous :</p>
            <p> u.s.enseignes@gmail.com</p>
        </div>
    </div>
</footer>
</body>
</html>
