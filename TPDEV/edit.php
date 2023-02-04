<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "test");

$id = isset($_POST['id']) ? $_POST['id'] : '';
$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
$societe = isset($_POST['societe']) ? $_POST['societe'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
$adresse = isset($_POST['adresse']) ? $_POST['adresse'] : '';
$ville = isset($_POST['ville']) ? $_POST['ville'] : '';
$code_postal = isset($_POST['code_postal']) ? $_POST['code_postal'] : '';
$pays = isset($_POST['pays']) ? $_POST['pays'] : '';
$commentaires = isset($_POST['commentaires']) ? $_POST['commentaires'] : '';

// Vérifiez les entrées pour éviter les injections SQL
$nom = mysqli_real_escape_string($conn, $nom);
$prenom = mysqli_real_escape_string($conn, $prenom);
$societe = mysqli_real_escape_string($conn, $societe);
$email = mysqli_real_escape_string($conn, $email);
$telephone = mysqli_real_escape_string($conn, $telephone);
$adresse = mysqli_real_escape_string($conn, $adresse);
$ville = mysqli_real_escape_string($conn, $ville);
$code_postal = mysqli_real_escape_string($conn, $code_postal);
$pays = mysqli_real_escape_string($conn, $pays);
$commentaires = mysqli_real_escape_string($conn, $commentaires);

// Mettre à jour les données dans la base de données
$sql = "UPDATE client SET nom='$nom', prenom='$prenom', societe='$societe', email='$email', telephone='$telephone', adresse='$adresse', ville='$ville', code_postal='$code_postal', pays='$pays', commentaires='$commentaires' WHERE id='$id'";

$result = mysqli_query($conn, $sql);



?>
<form action="edit.php?id=<?php echo $id; ?>" method="post">
<?php
// Continuation de la suite de code
echo "<br><br>";
echo "<label for='nom'>Nom</label>";
echo "<input type='text' id='nom' name='nom' value='" . $nom . "'>";
echo "<br><br>";
echo "<label for='prenom'>Prénom</label>";
echo "<input type='text' id='prenom' name='prenom' value='" . $prenom . "'>";
echo "<br><br>";

echo "<label for='email'>Email</label>";
echo "<input type='email' id='email' name='email' value='" . $email . "'>";
echo "<br><br>";
echo "<label for='telephone'>Téléphone</label>";
echo "<input type='tel' id='telephone' name='telephone' value='" . $telephone . "'>";
echo "<br><br>";
echo "<label for='adresse'>Adresse</label>";
echo "<input type='text' id='adresse' name='adresse' value='" . $adresse . "'>";
echo "<br><br>";
echo "<label for='ville'>Ville</label>";
echo "<input type='text' id='ville' name='ville' value='" . $ville . "'>";
echo "<br><br>";
echo "<label for='code_postal'>Code Postal</label>";
echo "<input type='text' id='code_postal' name='code_postal' value='" . $code_postal . "'>";
echo "<br><br>";
echo "<label for='pays'>Pays</label>";
echo "<input type='text' id='pays' name='pays' value='" . $pays . "'>";
echo "<br><br>";
echo "<label for='commentaires'>Commentaires</label>";
echo "<textarea id='commentaires' name='commentaires'>" . $commentaires . "</textarea>";
echo "<br><br>";
echo "<input type='hidden' name='id' value='" . $id . "'>";
echo "<input type='submit' name='submit' value='Enregistrer les modifications'>";
echo "</form>";

if ($result) {
    echo "Record updated successfully";
    header("location: index.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);

  