<!DOCTYPE html>
<html>
<head>
  <title>Nos réalisations - US.Enseignes</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style3.css">
    <link rel="icon" type="image/png" href="images/image001.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <script src="js/script3.js"defer></script>

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

 
    
      <h1>Nos réalisations</h1>
      <!-- Section réalisations -->
      <section id="realisations">
      <p>Découvrez quelques-unes de nos réalisations en matière d'enseignes pour les entreprises et les commerces:</p>
     

         <div class="card">
    <img src="images/flocage-illustration-véhicule-utilitaire-franck-porrozzi-maçonerie-carcès.jpg" alt="Réalisation 1">
    <p>Chez US.Enseignes, nous sommes fiers de vous présenter notre dernière réalisation pour l'entreprise 
      "Maçonnerie Porrozzi Franck" : le flocage de leur camion. Nous avons utilisé des matériaux de qualité supérieure 
      pour garantir que le flocage restera en bon état même après des milliers de kilomètres parcourus. Le design accrocheur,
       mettant en avant les compétences de l'entreprise et leur contact, attirera l'attention des passants 
       et permettra à "Maçonnerie Durand" de se démarquer de leurs concurrents. 
       Nous sommes ravis de voir le succès de cette réalisation et nous sommes impatients de continuer à 
       travailler avec "Maçonnerie Durand" pour améliorer leur image de marque.
        Si vous souhaitez utiliser votre flotte de véhicules pour promouvoir votre entreprise, 
        n'hésitez pas à nous contacter. Nous pouvons vous aider à créer un design accrocheur pour vos camions 
        ou vos voitures qui reflétera votre entreprise professionnelle et moderne.</p>
  </div>
        
        </section>
       

          <!-- séparation -->
    <div style="border-top: 1px solid gray; margin: 50px 0;"></div>


          <!-- Réalisations 2 -->
          <div class="card">
          <img src="images/692645080.jpg" alt="Réalisation 2"style=" border: #FFD700 1px solid;">
          <p>Restaurant "Mademoiselle Anna" : la création de leur logo. Nous avons travaillé en étroite collaboration
             avec les propriétaires pour comprendre leur vision et leur personnalité, pour créer un logo qui reflète 
             l'ambiance chaleureuse et conviviale de leur établissement. Nous avons utilisé des couleurs vives et des formes organiques 
             pour créer un look accueillant et invitant. Le logo met en valeur le nom du restaurant tout en étant simple et 
             facilement reconnaissable.</p>
             <p>Nous sommes ravis de voir le succès de cette réalisation et nous sommes impatients de continuer à travailler 
                avec "Le Bistrot Gourmand" pour améliorer leur image de marque.
               Si vous cherchez à créer un logo pour votre entreprise, n'hésitez pas à nous contacter. 
               Nous sommes là pour vous aider à créer un logo qui reflète votre entreprise et qui attirera l'attention de 
               vos clients potentiels.</p>
    </div>
       
       

          <!-- séparation -->
    <div style="border-top: 1px solid gray; margin: 50px 0;"></div>


       
          <!-- Réalisation 3 -->
          <div class="card">
          <img src="images/Capture d’écran 2023-01-04 194700.jpg" alt="Réalisation 3"style=" border: #FFD700 1px solid;">
          <p>Chez US.Enseignes, nous sommes fiers de vous présenter notre dernière réalisation pour le salon de coiffure "Hair Couture" à Troyes.
             Nous avons retravaillé leur logo pour lui donner un look plus moderne et accrocheur. Le nouveau logo, qui est maintenant en relief,
              est devenu le point focal de leur enseigne lumineuse. Les couleurs vives et les lignes épurées attirent l'attention des passants 
              et donnent au salon un look professionnel et tendance.
              Nous sommes heureux de voir le succès de cette réalisation et nous sommes impatients de continuer à travailler 
              avec "Hair Couture" pour améliorer leur image de marque.
              Si vous voulez donner un coup de jeune à votre enseigne ou à votre logo, n'hésitez pas à nous contacter. 
              Nous sommes à votre disposition pour vous aider à mettre en valeur votre entreprise.</p>
    </div>
        </section>
     

          <!-- séparation -->
    <div style="border-top: 1px solid gray; margin: 50px 0;"></div>


     
          <!-- Réalisation 4 -->
          <div class="card">
          <img src="images/enseigne-lumineuse.jpg" alt="Réalisation 4"style=" border: #FFD700 1px solid;">
          <p>Chez US.Enseignes, nous sommes fiers de vous présenter notre toute dernière réalisation pour Just Audio : 
            une enseigne lumineuse de couleur violette. Cette enseigne est non seulement esthétique, 
            mais elle est également conçue pour être durable et écoénergétique.

              Notre équipe de professionnels a travaillé en étroite collaboration avec Just Audio pour créer une enseigne
              qui reflète parfaitement leur image de marque et qui attire l'attention des clients. Nous avons utilisé des matériaux
              de haute qualité pour garantir une longue durée de vie de l'enseigne et nous avons également intégré 
              des éléments de technologie moderne pour améliorer son efficacité énergétique.</p>
         </div>
        </section>
        

          <!-- séparation -->
    <div style="border-top: 1px solid gray; margin: 50px 0;"></div>


        
          <!-- Réalisation 5 -->
          <div class="card">
          <img src="images/nautica.jpg" alt="Réalisation 5"style=" border: #FFD700 1px solid;">
          <p>Chez US.Enseignes, nous sommes fiers de présenter notre dernière réalisation pour l'entreprise Nautica 
            : une enseigne lumineuse de couleur noire avec un fond qui reflète sur le mur en blanc. 
            Cette enseigne élégante et moderne est le choix parfait pour tous les magasins de sports nautiques et les marques liées à la mer
            . Elle attirera l'attention des passants et des clients potentiels de manière efficace. La qualité de fabrication de 
            notre enseigne est irréprochable, garantissant une longue durée de vie et une utilisation fiable. </p>
    </div>
        </section>

          <!-- séparation -->
    <div style="border-top: 1px solid gray; margin: 50px 0;"></div>

       
    
          <!-- Réalisation 6 -->
          <div class="card">
          <img src="images/chez_roger.jpg" alt="Réalisation 5"style=" border: #FFD700 1px solid;">
          <p>Chez US Enseignes, nous sommes fiers de présenter notre dernière réalisation pour le restaurant Chez Roger Friterie.
             Nous avons créé une enseigne lumineuse de couleur noir avec un fond qui reflète sur le mur en blanc 
             pour une présentation élégante et moderne. Cette enseigne attirera certainement l'attention des passants et ajoutera 
             une touche de sophistication à l'extérieur de votre établissement. N'hésitez pas à nous contacter pour tous 
             vos besoins en matière d'enseignes lumineuses.</p>
           </div>
        </section>

   
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
  
  
    <!-- Bouton remonter la page -->
    <button class="top-button" onclick="goToTop()">Retour en haut de page</button>



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