<?php
    // Paramètres de connexion à la base de données
    $host = '127.0.0.1';
    $username = 'root';
    $password = '';
    $dbname = 'test';
    
    // Connexion à la base de données
    $db = new mysqli($host, $username, $password, $dbname);
    
    // Vérifiez que la connexion a réussi
    if ($db->connect_error) {
        die("La connexion à la base de données a échoué : " . $db->connect_error);
    }
    
    // Vérifiez si les données de formulaire ont été soumises
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // Préparez la requête pour récupérer les informations d'enregistrement de l'utilisateur
        $query = "SELECT * FROM users WHERE username = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        
        // Vérifiez si les informations d'enregistrement sont correctes
        if ($user && password_verify($password, $user['password'])) {
            // Créez une session pour l'utilisateur
            session_start();
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            
            // Redirigez vers la page protégée pour les utilisateurs connectés
            header("Location: acceuil.php");
exit;
        } else {
            // Affichez un message d'erreur pour informer l'utilisateur que les informations d'enregistrement sont incorrectes
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
    <link rel="stylesheet" type="text/css" href="css/styleregister.css">
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



 <!-- Section pour s'inscrire -->
 <div class="form-container">
    <h2>Créez un compte</h2>
    <form action="register.php" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" placeholder="Choisir un nom d'utilisateur">
        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="email" placeholder="Entrer votre adresse e-mail">
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" placeholder="Choisir un mot de passe">
        <label for="password2">Confirmer le mot de passe :</label>
        <input type="password" id="password2" name="password2" placeholder="Confirmer votre mot de passe">
        <input type="submit" value="S'inscrire">
    </form>
</div>
<?php
    // Connexion à la base de données
    $db = mysqli_connect('127.0.0.1', 'root', '', 'test');
  

    // Vérifier la connexion
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Récupérer les données du formulaire d'inscription
    if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password2'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $client_id = uniqid(); //Generate a unique client ID
        // Vérifier que les mots de passe correspondent
        if($password == $password2){
            // Hacher le mot de passe
            $password = password_hash($password, PASSWORD_DEFAULT);
            // Préparer la requête d'insertion
            $sql = "INSERT INTO users (username, email, password, role, client_id) VALUES (?, ?, ?, 'user', ?)";
            $stmt = mysqli_prepare($db, $sql);
            // Lier les variables à la requête préparée
            mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $password, $client_id);
            // Exécuter la requête
            if (mysqli_stmt_execute($stmt)) {
                echo "Enregistrement réussi!";
            } else {
                echo "Error: " . mysqli_stmt_error($stmt);
            }
        }else{
            echo "Les mots de passe ne correspondent pas!";
        }
    }
?>

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