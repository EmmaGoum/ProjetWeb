-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 15 fév. 2018 à 18:15
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `responsum`
--

-- --------------------------------------------------------

--
-- Structure de la table `campagne`
--

DROP TABLE IF EXISTS `campagne`;
CREATE TABLE IF NOT EXISTS `campagne` (
  `idCampagne` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `typeQuestionnaire` int(11) NOT NULL,
  PRIMARY KEY (`idCampagne`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `idCompte` int(11) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  PRIMARY KEY (`idCompte`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`idCompte`, `mail`, `prenom`, `nom`, `mdp`) VALUES
(1, 'jean.dupont@gmail.com', 'Jean', 'Dupont', 'jeandupont'),
(2, 'coraline.lamaline@gmail.com', 'Coraline', 'Lamaline', 'coralinelamaline');

-- --------------------------------------------------------

--
-- Structure de la table `creer_par`
--

DROP TABLE IF EXISTS `creer_par`;
CREATE TABLE IF NOT EXISTS `creer_par` (
  `idCampagne` int(11) NOT NULL,
  `idCompte` int(11) NOT NULL,
  PRIMARY KEY (`idCampagne`,`idCompte`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `participation`
--

DROP TABLE IF EXISTS `participation`;
CREATE TABLE IF NOT EXISTS `participation` (
  `idCampagne` int(11) NOT NULL,
  `idCompte` int(11) NOT NULL,
  PRIMARY KEY (`idCampagne`,`idCompte`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `questionnaire_sus`
--

DROP TABLE IF EXISTS `questionnaire_sus`;
CREATE TABLE IF NOT EXISTS `questionnaire_sus` (
  `idQuestionnaire` int(11) NOT NULL,
  `idCampagne` int(11) NOT NULL,
  `idCompte` int(11) NOT NULL,
  `groupe` varchar(20) NOT NULL,
  `score` int(11) NOT NULL,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `q6` int(11) NOT NULL,
  `q7` int(11) NOT NULL,
  `q8` int(11) NOT NULL,
  `q9` int(11) NOT NULL,
  `q10` int(11) NOT NULL,
  PRIMARY KEY (`idQuestionnaire`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
