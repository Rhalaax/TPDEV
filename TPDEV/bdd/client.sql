-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 28 jan. 2023 à 19:52
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
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `societe` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(100) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `code_postal` varchar(10) DEFAULT NULL,
  `pays` varchar(100) DEFAULT NULL,
  `commentaires` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `societe`, `email`, `telephone`, `adresse`, `ville`, `code_postal`, `pays`, `commentaires`) VALUES
(1, 'Dupont', 'Jean', 'Acme Inc.', 'jean.dupont@acme.com', '+33123456789', '1 rue de l\'entreprise', 'Paris', '75000', 'France', 'Client fidèle depuis 10 ans'),
(2, 'Smith', 'John', 'Smith Corp.', 'john.smith@smithcorp.com', '+44987654321', '2 High Street', 'London', 'SW1A 1AA', 'United Kingdom', 'Aucun commentaire particulier'),
(3, 'Miyamoto', 'Mario', 'Nintendo', 'mario@nintendo.com', '+819012345678', 'Nintendo HQ', 'Kyoto', '604-8006', 'Japan', 'Client VIP'),
(4, 'Brent', 'Gallegos', 'Entreprise 1', 'brentgallegos@gmail.com', '(367) 423-3437', 'Ap #386-8718 Nunc Ave', 'New York', '968248', 'USA', 'Avis positif'),
(5, 'Xander', 'Nelson', 'Entreprise 2', 'xandernelson@gmail.com', '(544) 347-9757', 'Ap #183-9520 Donec Avenue', 'Los Angeles', '5631-6462', 'USA', 'Avis négatif'),
(6, 'Hedley', 'Underwood', 'Entreprise 3', 'hedleyunderwood@gmail.com', '(685) 609-5730', 'Ap #841-5854 Semper Avenue', 'Chicago', '8406', 'USA', 'Avis mitigé'),
(7, 'Avye', 'Contreras', 'Entreprise 4', 'avyecontreras@gmail.com', '1-931-716-7085', '110-8137 Euismod Rd.', 'Houston', '212529', 'USA', 'Avis positif');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
