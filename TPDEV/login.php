<?php


// Paramètres de connexion à la base de données
$host = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'test';

// Connexion à la base de données
$conn = mysqli_connect($host, $username, $password, $dbname);


    session_start();
    // Connexion à la base de données
    $conn = mysqli_connect("127.0.0.1", "root", "", "test");

    // Vérification de la connexion
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Récupération des données de l'utilisateur
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) > 0) {
            // Stockage des données de l'utilisateur dans une session
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];
            if ($row['role'] == 'admin') {
                // Redirection vers la page d'administration
                header("Location: admin.php");
            } else {
                // Redirection vers la page d'accueil
                header("Location: index.php");
            }
        } else {
            echo "";
        }
    }





    // Ajoutez votre formulaire HTML pour la saisie des informations d'enregistrement de l'utilisateur ici
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connectez vous - US.Enseignes</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css">
    <link rel="icon" type="image/png" href="images/image001.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <script src="js/scriptlogin.js"defer></script>
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

   <!-- Connectez vous -->

   <div class="form-container">
    <h2>Connectez-vous</h2>
    <form action="login.php" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" placeholder="Entrez votre nom d'utilisateur">
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe">
        <input type="submit" value="Se connecter">
        <p>Pas encore de compte ? <a href="register.php">S'inscrire</a></p>
    </form>
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

  <!-- Section au dessus du Footer -->

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
  <a href="mentionslegale.php">Mentions légals</a>
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