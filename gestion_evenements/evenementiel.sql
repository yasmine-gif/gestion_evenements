-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 14 mai 2020 à 22:43
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
(14, 'admin', 'admin@gmail.com', '6c7ca345f63f835cb353ff15bd6c5e052ec08e7a'),
(15, 'mande', 'mbaii@gmaidfl.com', '9cf95dacd226dcf43da376cdb6cbba7035218921');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `email` varchar(255) NOT NULL,
  `nom_visiteur` varchar(255) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`email`, `nom_visiteur`, `message`) VALUES
('FTK@gmail.com', 'FTK', 'bonjours j\'aimerai participer a l\'venement du 13/05/2021.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam unde ea qui amet dolorem ad sit maxime odio earum rem cum dolorum laudantium'),
('mandson1er@gmail.com', 'mande', 'bonjours j\'aimerai participer a l\'venement du 13/05/2021.\r\n'),
('mbaii@gmail.com', 'zert', 'zerty'),
('yasmine@gmail.com', 'yasmine', 'je veut organiser mon mariage alors comment vous contacter pour l\'organisation de l\'evenement');

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
(12, 'ANNIVERSAIRE', 'La cérémonie laïque en mairie de Pacé, près de Rennes, devait précéder une grande soirée au domaine Ma cabane au Canada, à Gosné. Les alliances étaient gravées. Les faire-part de mariage, envoyés aux 170 convives. Le fleuriste, le DJ, la décoration, le traiteur… Tout était bouclé. Le couple avait investi du temps et de l’argent. Il était dans les derniers préparatifs, quand le Covid-19 est venu jouer les trouble-fêtes.', 'COVID Prod', '2020-06-13', '2020-07-05'),
(14, 'Burkina Faso : inauguration de la Fabrique Numérique du Campus numérique de l’espace universitaire francophone Joseph Ki-zerbo de Ouagadougou', 'L’AUF, la société Simplon et l’Université Joseph Ki-Zerbo ont organisé le mardi 21 janvier 2020, au sein du Campus numérique de l’espace universitaire francophone (CNEUF) de Ouagadougou, l’inauguration de la Fabrique numérique inclusive Simplon-AUF. Cette Fabrique permettra à une trentaine de jeunes burkinabés de bénéficier pendant neuf mois d’une formation intensive en développement web.\r\n\r\nLa troisième Fabrique numérique Simplon-AUF en l’Afrique de l’Ouest (après celles de Dakar et d’Abidjan) a été inaugurée dans les locaux du CNEUF de Ouagadougou, en présence de l’Ambassadeur de France au Burkina Faso, du Vice-Président de l’Université Joseph Ki-Zerbo, du Directeur régional de l’Agence universitaire de la Francophonie, du Directeur général de la société Simplon et de nombreux acteurs de l’écosystème socio-économique et institutionnel.\r\n\r\nLa première promotion de cette Fabrique numérique formera des jeunes burkinabés au métier de « développeur web », fonction incontournable dans les entreprises aujourd’hui et considérée comme un métier d’avenir. A l’issue de neuf mois d’apprentissage, un accompagnement professionnel personnalisé sera proposé à ces jeunes développeurs.\r\n\r\nM. Luc Hallade, Ambassadeur de France au Burkina Faso, a salué la mise en place de la Fabrique numérique qui constitue selon lui « une initiative à vocation sociale et solidaire qui pourrait permettre de combler le manque d’expertise numérique dans l’écosystème socio-économique burkinabé ». Professeur Jemaiel Ben Brahim, Directeur régional de l’AUF en Afrique de l’Ouest, précise que « la Fabrique a pour vocation de proposer des formations numériques innovantes et gratuites pour les jeunes apprenants » s’adressant « en priorité aux jeunes issus de l’université, en difficulté d’intégration dans le monde du travail ». L’objectif à atteindre est d’améliorer leur employabilité.', 'SIMPLON/AUF OUAGA', '2020-01-21', '2020-10-21');

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id_evenement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
