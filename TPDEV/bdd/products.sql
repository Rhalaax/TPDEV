-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 22 jan. 2023 à 14:25
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `installation_options` varchar(255) DEFAULT NULL,
  `delivery_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `description`, `image`, `installation_options`, `delivery_time`) VALUES
(1, 'Enseigne lumineuse', 'Création', '500.00', 'Enseigne lumineuse personnalisée pour votre entreprise', 'images/enseignelumineuse.png', 'Sur mesure', 10),
(2, 'Bâche publicitaire', 'Impression', '200.00', 'Impression sur bâche pour vos événements', 'images/bache-recto-verso.jpg', 'Sur mesure', 5),
(3, 'Vitrophanie', 'Pose', '150.00', 'Vitrophanie pour votre vitrine', 'images/vitrophanie.png', 'Sur mesure', 7),
(4, 'Panneau signalétique', 'Création', '300.00', 'Panneau signalétique personnalisé pour votre entreprise', 'images/signaletique.png', 'Sur mesure', 15),
(5, 'Adhésif décoratif', 'Impression', '100.00', 'Impression sur adhésif pour votre décoration intérieure', 'images/deco.jpg', 'Sur mesure', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
