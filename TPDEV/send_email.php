<?php

// Vérifier que tous les champs ont été remplis
if (empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['message'])) {
    // Rediriger l'utilisateur vers la page de formulaire
    header('Location: index.php');
    exit;
}

// Récupérer les données du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];

// Construire l'e-mail
$to = 'lerhalaaxv3@gmail.com';
$subject = 'Nouveau message de ' . $nom;
$message = 'De : ' . $nom . ' (' . $email . ')' . "\n\n" . $message;
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Envoyer l'e-mail
mail($to, $subject, $message, $headers);

// Rediriger l'utilisateur vers la page de confirmation
header('Location: confirmation.php');

?>