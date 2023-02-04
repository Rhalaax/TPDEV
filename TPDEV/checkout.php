<?php 
include 'controller/config.php';
$total = 0
?>
<!DOCTYPE html>
<html>
<head>
  <title>Checkout - US.Enseignes</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/stylecheckout.css">
  <link rel="icon" type="image/png" href="images/image001.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
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
    
  <h1>Page de paiement</h1>
  <section class="payement">
  <table>
    <tr>
      <th>Nom</th>
      <th>Prix</th>
      <th>Quantité</th>
      <th>Sous-total</th>
    </tr>
    <?php
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
      $total = 0;
      foreach ($_SESSION['cart'] as $product) {
        $subtotal = $product['price'] * $product['quantity'];
        $total += $subtotal;
    ?>
      <tr>
        <td><?php echo $product['name']; ?></td>
        <td><?php echo $product['price']; ?></td>
        <td><?php echo $product['quantity']; ?></td>
        <td><?php echo $subtotal; ?></td>
      </tr>
    <?php
      }
    }
    ?>
    <tr>
      <td colspan="3">Total :</td>
      <td><?php echo $total; ?></td>
    </tr>
  </table>
  <form action="process_payment.php" method="post">
    <div style="margin-bottom: 10px;">
      <label for="name">Nom complet :</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div style="margin-bottom: 10px;">
      <label for="email">Adresse email :</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div style="margin-bottom: 10px;">
      <label for="card_number">Numéro de carte :</label>
      <input type="text" id="card_number" name="card_number" required>
    </div>
    <div style="margin-bottom: 10px;">
      <label for="expiration_date">Date d'expiration :</label>
      <input type="month" id="expiration_date" name="expiration_date" required>
    </div>
    <div style="margin-bottom: 10px;">
      <label for="cvv">CVV :</label>
      <input type="text" id="cvv" name="cvv" required>
    </div>
    <input type="submit" value="Processer le paiement">
  </form>
</section>
</main>
  
  
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



<!-- section au dessus du footer  -->
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
</footer>


</body>
</html>
