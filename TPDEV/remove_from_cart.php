<?php
  session_start();
  if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    foreach ($_SESSION['cart'] as $key => $product) {
      if ($product['id'] == $product_id) {
        unset($_SESSION['cart'][$key]);
      }
    }
  }
  header('Location: panier.php');
  exit;
?>