<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" type="image/png" href="images/image001.png">
   
    <title>Contact - US.Enseignes</title>
    
    <link rel="stylesheet" type="text/css" href="css/stylecontact.css">
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <script src="js/scriptcontact.js"defer></script>
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
       
    
    <section id="nous-contacter">
            <h1>Nous contacter</h1>
            <form action="send_email.php" method="post">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea><br>

                <input type="submit" value="Envoyer">
            </form>
            <img src="images/37174BAB162843328B0DA2FC0B55DD46[11803443].png" alt="Réalisation 3">
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



<?php
if (isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["message"])) {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "contact@entreprise-enseignes.com";
    $subject = "Demande de renseignements";
    $headers = "From: $email" . "\r\n" .
                "Reply-To: $email" . "\r\n" .
                "X-Mailer: PHP/" . phpversion();

    $body = "Nom: $nom\n" .
            "Email: $email\n" .
            "Message: $message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur est survenue lors de l'envoi de votre message.";
    }
}
?>

