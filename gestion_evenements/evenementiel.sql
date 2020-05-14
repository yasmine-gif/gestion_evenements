-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 11 mai 2020 à 06:27
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `evenementiel`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id_admin` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id_admin`, `nom`, `email`, `password`) VALUES
(1, 'multix07', 'YasmineSimplon@gmail.com', 'b3aca92c793ee0e9b1a9b0a5f5fc044e05140df3'),
(13, 'mandson', 'mandson1er@gmail.com', '162e40ee944e16d1dbe544101db897f2b973fcbc'),
(14, 'admin', 'admin@gmail.com', '6c7ca345f63f835cb353ff15bd6c5e052ec08e7a');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `email` varchar(255) NOT NULL,
  `nom_visiteur` varchar(255) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `id_evenement` int(11) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `organisateur` varchar(255) NOT NULL,
  `date_debut` varchar(255) NOT NULL,
  `date_fin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id_evenement`, `categorie`, `description`, `organisateur`, `date_debut`, `date_fin`) VALUES
(10, 'MARIAGE', 'l y a vingt-cinq ans, c’est le grand jour pour Anne-Françoise et Marc, 27 et 28 ans à l’époque. Avant leur union civile en mairie de Nantes, ils vont embrasser les grands-parents de la future mariée qui habitent rue d’Havelooze, quartier Viarme, à Nantes.', 'SIMPLON', '2020-05-13', '2020-05-15'),
(11, 'MARIAGE', 'La cérémonie laïque en mairie de Pacé, près de Rennes, devait précéder une grande soirée au domaine Ma cabane au Canada, à Gosné. Les alliances étaient gravées. Les faire-part de mariage, envoyés aux 170 convives. Le fleuriste, le DJ, la décoration, le traiteur… Tout était bouclé. Le couple avait investi du temps et de l’argent. Il était dans les derniers préparatifs, quand le Covid-19 est venu jouer les trouble-fêtes.', 'COVID Prod', '2020-06-17', '2020-06-19'),
(12, 'ANNIVERSAIRE', 'La cérémonie laïque en mairie de Pacé, près de Rennes, devait précéder une grande soirée au domaine Ma cabane au Canada, à Gosné. Les alliances étaient gravées. Les faire-part de mariage, envoyés aux 170 convives. Le fleuriste, le DJ, la décoration, le traiteur… Tout était bouclé. Le couple avait investi du temps et de l’argent. Il était dans les derniers préparatifs, quand le Covid-19 est venu jouer les trouble-fêtes.', 'COVID Prod', '2020-06-13', '2020-07-05');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id_evenement`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id_evenement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
