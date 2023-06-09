-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 09 juin 2023 à 10:08
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
-- Base de données : `m2l`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `Civilite` varchar(244) NOT NULL,
  `Categorie` varchar(244) NOT NULL,
  `nom` varchar(244) NOT NULL,
  `prenom` varchar(244) NOT NULL,
  `mail` varchar(244) NOT NULL,
  `psw` varchar(244) NOT NULL,
  `pswC` varchar(244) NOT NULL,
  `tel` int(12) NOT NULL,
  `Birthdate` date NOT NULL,
  `Ville` varchar(244) NOT NULL,
  `Pays` varchar(244) NOT NULL,
  `URL` varchar(244) NOT NULL,
  `id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`Civilite`, `Categorie`, `nom`, `prenom`, `mail`, `psw`, `pswC`, `tel`, `Birthdate`, `Ville`, `Pays`, `URL`, `id`) VALUES
('Homme', 'admin', 'Anil charif', 'Zoher', 'zoher@gmail.com', '$2y$10$SqMQ5G.QT.aRA3LY7UIRK.gQbdEvUjx3rbLualFC3Gjorbcyim36O', '$2y$10$2bcgdg/ZZW0I89zbTLpeiup1MYbsUNBbFmt7uDxMt3BhzRfcYlaEm', 754576107, '2000-06-21', 'Courneuve', 'France', 'https://i0.wp.com/reussir-son-management.com/wp-content/uploads/2021/05/rigueur-au-travail.jpg?fit=800%2C422&ssl=1', 11),
('Homme', 'Manager', 'Owen', 'Lopez', 'owen@gmail.com', '$2y$10$l1E9.ypNrexXjrcbbdMP4.NI4CfBn29C7QZ2sRKzgWiG/uJRh6.Xu', '$2y$10$QCnVbfzk41wGgRQiY4gXj.o798icbqnDdHhWsp1/z9SIfTrcogxe6', 754576107, '2004-06-21', 'Nante', 'France', 'https://maplr.co/wp-content/uploads/2022/08/linkedin-sales-solutions-GHwRwNHUilY-unsplash-1-scaled.jpg', 19),
('Femme', 'Technicien', 'Casandra', 'Roy', 'casandra@gmail.com', '$2y$10$VfJn7tn6Myj73u4HLoU9k.sr8rkc4jyDe02JMsSFQj/ku2qiuGSoC', '$2y$10$VWPLlsgcOAZ59e3RyjxRFeQpq4FaLsvPsbKVOpkHQW6VE9I0ZWoSK', 754692359, '1999-03-12', 'Nanterre', 'France', 'https://journalmetro.com/wp-content/uploads/2022/01/iStock-1284106261-e1642172456177.jpg?resize=1051%2C591', 25),
('Homme', 'Commercial', 'Hamdi', 'Rahma', 'rahma@gmail.com', '$2y$10$6jNCxnP5bORP6TrDxPV5S.q9oR7fta.syyE1U1Rmioe1Z/v5iv93.', '$2y$10$3nxYyPt/Q29SlH6NmizuQOI0uqJu.8eetOs1VJGQdq2O2mM/kIFJS', 565210255, '1998-04-01', 'Bezon', 'France', 'https://www.fl-executivesearch.com/wp-content/uploads/2019/12/profil_atypique.jpg', 30),
('Homme', 'Client', 'dupon', 'danier', 'dupon@gmail.com', '$2y$10$KFeX5vbcR3N.yfImY77TuO21i4SBWuk8cN4GpmO7RbrqQ1GbLU58G', '$2y$10$39lADkpKP1weCvZCaBKY8.vDQhEHstR3sBu1K15zIXRwtjCSfoFL2', 754861234, '1998-04-21', 'bercy', 'France', 'https://www.lesmotspositifs.com/wp-content/uploads/2021/04/profil-FB.jpeg', 31),
('Homme', 'Manager', 'Theo', 'babak', 'theo@gmail.com', '$2y$10$iR0VZjRE2Fqw1alZZkZJ.ef.bzjn7fObiCmON5ROcssi45j6POYdW', '$2y$10$GoUbIymUaI3.RhFnG9CZpeK4FwnyXxkJ7b9Pftmr74BZzAfLFkOUm', 754514563, '1999-04-14', 'Clichy', 'France', 'https://img.20mn.fr/QrpiUimLRy2dnpsifrQJ3w/1200x768_jim-carrell-k-michael-scott-serie-televisee-the-office', 32);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
