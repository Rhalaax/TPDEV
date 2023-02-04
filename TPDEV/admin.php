<?php
session_start();

// Vérification de l'autorisation de l'utilisateur pour accéder à la page d'administration
if(!isset($_SESSION["username"]) || !isset($_SESSION["role"]) || $_SESSION["role"] != "admin"){
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Nos réalisations - US.Enseignes</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/styleadmin.css">
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
  <h1>Panneau d'administration</h1>
  <?php
  // Stockage de l'heure de connexion dans une variable de session
  if(!isset($_SESSION["login_time"])){
    $_SESSION["login_time"] = time();
}

// Calcul de la durée de la session
$duration = time() - $_SESSION["login_time"];


if(isset($_SESSION["username"])){
    echo "<p style='color:red;'>Bienvenue, " . $_SESSION["username"] . ", sur le panneau d'administration.</p>";
    echo "<p>Date : " . date("d-m-Y") . "</p>";
    echo "<p>Heure : " . date("h:i:sa") . "</p>";
    echo "<p>Durée de la session : " . gmdate("H:i:s", $duration) . "</p>";
  }
else{
    echo "<p>Vous n'êtes pas connecté.</p>";
}
?>


<!-- Bouton déconnexion -->
  <a href="logout.php" class="logout-button">Déconnexion</a>


<!-- TABLEAU SQL CLIENT-->
  <h1>Tableau des clients</h1>
  <?php
    // Connexion à la base de données
    $host = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "test";
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // Vérifiez la connexion
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo " <br>";

    // Récupération des données de la table "client"
    $sql = "SELECT * FROM client";
    $result = mysqli_query($conn, $sql);

    // Vérifiez s'il y a des résultats
    if (mysqli_num_rows($result) > 0) {
        // Affichage des données dans un tableau
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nom</th>";
        echo "<th>Prénom</th>";
        echo "<th>Société</th>";
        echo "<th>Email</th>";
        echo "<th>Téléphone</th>";
        echo "<th>Adresse</th>";
        echo "<th>Ville</th>";
        echo "<th>Code Postal</th>";
        echo "<th>Pays</th>";
        echo "<th>Commentaires</th>";
        echo "<th>Modifier</th>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nom"] . "</td>";
            echo "<td>" . $row["prenom"] . "</td>";
            echo "<td>" . $row["societe"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["telephone"] . "</td>";
            echo "<td>" . $row["adresse"] . "</td>";
            echo "<td>" . $row["ville"] . "</td>";
            echo "<td>" . $row["code_postal"] . "</td>";
            echo "<td>" . $row["pays"] . "</td>";
            echo "<td>" . $row["commentaires"] . "</td>";
            echo "<td> <a href='edit.php?id=". $row['id'] ."'>Edit</a> </td>";
            echo "</tr>";
            }
echo "</table>";
} else {
echo "0 results";
}

?>


<!-- TABLEAU SQL PRODUITS -->
<h1>Tableau des produits</h1>
<?php
// Récupération des données de la table "products"
$query = 'SELECT * FROM products';
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nom</th>";
    echo "<th>Catégorie</th>";
    echo "<th>Prix</th>";
    echo "<th>Description</th>";
    echo "<th>Image</th>";
    echo "<th>Options d'installation</th>";
    echo "<th>Temps de livraison</th>";
    echo "<th>Modifier</th>";
    echo "</tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["category"] . "</td>";
        echo "<td>" . $row["price"] . "</td>";
        echo "<td>" . $row["description"] . "</td>";
        echo "<td>" . $row["image"] . "</td>";
        echo "<td>" . $row["installation_options"] . "</td>";
        echo "<td>" . $row["delivery_time"] . "</td>";
        echo "<td> <a href='edit.php?id=". $row['id'] ."'>Edit</a> </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Aucun résultat trouvé dans la table 'products'.";
}
?>


<!-- TABLEAU SQL USERS -->
<h1>Tableau des utilisateurs</h1>
<?php
$sql = "SELECT * FROM users LIMIT 0, 42";
$result = $conn->query($sql);

echo "<table border='1'>";
echo "<tr>
        <th>ID</th>
        <th>Mot de passe</th>
        <th>Pseudo</th>
        <th>role</th>
    </tr>";

if ($result->num_rows > 0) {
    // Affichage des lignes
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["password"]. "</td>
                <td>" . $row["username"]. "</td>
                <td>" . $row["role"]. "</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>

<?php


// Récupération des données de la table "clients"
$query = "SELECT * FROM client";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        // Génération d'un mot de passe aléatoire
        $password = bin2hex(random_bytes(4));
        
        // Insertion des données du client dans la table "users"
        $query = "INSERT INTO users (username, password, role, created_at) VALUES ('" . $row["email"] . "', '" . password_hash($password, PASSWORD_DEFAULT) . "', 'client', now())";
        mysqli_query($conn, $query);
    }
}

// Insertion des utilisateurs de base en dernière position
$query = "INSERT INTO users (username, password, role, created_at) VALUES ('user1', '" . password_hash('password1', PASSWORD_DEFAULT) . "', 'admin', now())";
mysqli_query($conn, $query);

$query = "INSERT INTO users (username, password, role, created_at) VALUES ('user2', '" . password_hash('password2', PASSWORD_DEFAULT) . "', 'user', now())";
mysqli_query($conn, $query);



?>
<!-- TABLEAU SQL COMMANDES -->

<h1>Tableau des commandes</h1>
<?php
// Récupération des données de la table "commande"
$query = 'SELECT commande.*, client.nom, client.prenom FROM commande LEFT JOIN client ON commande.client_id = client.id';
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nom client</th>";
    echo "<th>Prenom client</th>";
    echo "<th>Référence</th>";
    echo "<th>Date</th>";
    echo "<th>Total</th>";
    echo "</tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nom"] . "</td>";
        echo "<td>" . $row["prenom"] . "</td>";
        echo "<td>" . $row["reference"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["total"] . "</td>";
        if ($row['livraison'] == "livré") {
          echo '<td style="color: green;">Livré</td>';
      } else if ($row['livraison'] == "en attente") {
          echo '<td style="color: orange;">En attente</td>';
      } else {
          echo '<td style="color: red;">Pas encore livré</td>';
      }
        echo "</tr>";
    }
    echo "</table>";
    
} else {
    echo "Aucun résultat trouvé dans la table 'commande'.";
}

?>
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
