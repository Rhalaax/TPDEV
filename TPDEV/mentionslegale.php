<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mentions Légal - US.Enseignes</title>
  <link rel="stylesheet" type="text/css" href="css/stylementions.css">
  <link rel="icon" type="image/png" href="images/image001.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <script src="js/scriptmentions.js"defer></script>
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


<!-- Section mentions legales -->
<section id="mentions-legales">
  <div class="card">
    <div class="card-header">
      <h1>Mentions légales</h1>
    </div>
    <div class="card-body">
      <p><strong>Editeur :</strong> US.Enseignes SAS</p>
      <p><strong>Siège social :</strong> 12 rue des Enseignes, 31000 Toulouse</p>
      <p><strong>Téléphone :</strong> +33 (0)5 31 00 00 00</p>
      <p><strong>Email :</strong> contact@us-enseignes.com</p>
      <p><strong>Directeur de la publication :</strong> M. Quentin Clivot</p>
      <p><strong>Hébergement :</strong> OVH - 2 rue Kellermann, 59100 Roubaix</p>
      <p><strong>Crédits :</strong> Ce site a été réalisé par Quentin Clivot</p>
      <p><strong>Informations légales :</strong> US.Enseignes SAS est immatriculée au Registre du Commerce et des Sociétés de Toulouse sous le numéro SIRET 88888888888888</p>
    </div>
  </div>
</section>


    <section id="credit">
    <p>Conformément à l’article 39 de la loi « Informatique et Libertés » du 6 janvier 1978, l’utilisateur dispose d’un droit d’accès, 
    de modification, de rectification et de suppression des données le concernant. Pour l’exercice de ces droits, 
    l’utilisateur est invité à s’adresser par courriel à notre service client US.Enseignes. L’utilisateur peut également, 
    pour des motifs légitimes, s’opposer au traitement des données le concernant. L’utilisateur trouvera des informations sur ses droits 
    et devoirs et sur la protection des données individuelles sur le site de la « Commission Nationale Informatique et Libertés ». 
    Les utilisateurs du site Internet <a href="http://localhost/TPDEV/index.php">http://localhost/TPDEV/index.php</a> sont invités à faire connaître à US.Enseignes 
    leurs remarques sur d’éventuels dysfonctionnements du site, au regard des libertés individuelles, 
    à l’une ou l’autre des adresses indiquées ci-avant. Toute reproduction intégrale ou partielle, par quelque procédé que ce soit,
    faite sans le consentement préalable et écrit de US.Enseignes est illicite et constitue une contrefaçon donnant
    lieu à des sanctions pénales.
    En accédant au présent site, vous reconnaissez que les données le composant sont légalement protégées et, 
    conformément aux dispositions de la loi du 1er juillet 1998, vous vous interdisez notamment d’extraire, 
    réutiliser, stocker, reproduire, représenter ou conserver, directement ou indirectement, sur un support quelconque, 
    par tout moyen et sous toute forme que ce soit, tout ou partie qualitativement ou quantitativement substantielle du site de US.Enseignes,
     ainsi que d’en faire l’extraction ou la réutilisation répétée et systématique de parties qualitativement et quantitativement 
     non substantielles lorsque ces opérations excèdent manifestement les conditions d’utilisation normales.
    </p>

    <p>Crédit Photos :
    Les images et les photographies du site internet US.Enseignes sont non-contractuelles.
    La reproduction des textes et photographies, même partielle est strictement interdite, sans accord préalable de notre part.</p>
  <p>Paiement sécurisé Soyez rassuré
    Adhésifs garantis Longue durée de vie
    Sur mesure Possible</p>
    </section>
  </main>

  <!-- séparation -->
  <div style="border-top: 1px solid gray; margin: 50px 0;"></div>


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

    <!-- séparation -->
    <div style="border-top: 1px solid gray; margin: 50px 0;"></div>
  
  
 <!-- Footer-->
 <footer>
  <p><span>Copyright © 2023 US.Enseignes</span></p>
  <a href="mentionslegale.php">Mentions légal</a>
  <a href="newletters.php">Newletters</a>
</footer>



</body>
</html>
