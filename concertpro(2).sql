-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 21 Mai 2014 à 08:05
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `concertpro`
--
CREATE DATABASE IF NOT EXISTS `concertpro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `concertpro`;

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE IF NOT EXISTS `groupe` (
  `ID_Groupe` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(45) DEFAULT NULL,
  `Membre` varchar(45) DEFAULT NULL,
  `Creation` int(11) DEFAULT NULL,
  `Nation` varchar(45) DEFAULT NULL,
  `Genre` varchar(45) DEFAULT NULL,
  `Password` text NOT NULL,
  PRIMARY KEY (`ID_Groupe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `Groupe_ID_Groupe` int(11) NOT NULL,
  `Salle_ID_Salle` int(11) NOT NULL,
  `ID_Image` int(11) NOT NULL,
  `Nom Image` varchar(45) DEFAULT NULL,
  `Chemin Image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID_Image`),
  KEY `fk_Image_Groupe1_idx` (`Groupe_ID_Groupe`),
  KEY `fk_Image_Salle1_idx` (`Salle_ID_Salle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Login` text NOT NULL,
  `Password` text NOT NULL,
  `Mail` text NOT NULL,
  `Date` int(11) NOT NULL,
  `Tel` int(11) NOT NULL,
  `NumVoie` int(11) NOT NULL,
  `Rue` text NOT NULL,
  `Zipcode` int(11) NOT NULL,
  `City` text NOT NULL,
  `Style` text NOT NULL,
  `Fan` text NOT NULL,
  `Prenom` text NOT NULL,
  `Nom` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`ID`, `Login`, `Password`, `Mail`, `Date`, `Tel`, `NumVoie`, `Rue`, `Zipcode`, `City`, `Style`, `Fan`, `Prenom`, `Nom`) VALUES
(1, 'Julie Mesko', 'Julie Mesko', '', 0, 0, 0, '', 0, '', '', '', '', ''),
(2, 'Julie Mesko', 'Julie Mesko', '', 0, 0, 0, '', 0, '', '', '', '', ''),
(3, 'Julie Mesko', 'Julie Mesko', '', 0, 0, 0, '', 0, '', '', '', '', ''),
(4, 'p', 'kjkk', '', 0, 0, 0, '', 0, '', '', '', '', ''),
(5, 'p', 'gff', '', 0, 0, 0, '', 0, '', '', '', '', ''),
(6, 'hgj', 'gh', '', 0, 0, 0, '', 0, '', '', '', '', ''),
(7, 'gf', 'dfs', '', 0, 0, 0, '', 0, '', '', '', '', ''),
(8, 'dddddddddd', 'dddddddd', '', 0, 0, 0, '', 0, '', '', '', '', ''),
(9, 'dddddddddd', 'dddddddd', '', 0, 0, 0, '', 0, '', '', '', 'dddddd', 'ddddddd'),
(10, 'dddddddddd', 'dddddddd', '', 0, 0, 0, '', 0, '', '', '', 'dddddd', 'ddddddd'),
(11, 'Poliakos', 'Poliakov', '', 110001, 0, 0, '', 0, '', '', '', 'fdsfsdfsdfsdf', 'dffsdfsdfsd'),
(12, 'Poliakos', 'Poliakov', '', 110001, 0, 0, '', 100, 'fdsfsdfsdfsdf', '', '', 'fdsfsdfsdfsdf', 'dffsdfsdfsd'),
(13, 'Julie Mesko', 'dfsdfsdfd', '', 0, 0, 0, '', 0, '', '', '', 'fff', 'fff'),
(14, 'dsqdqsd', '1dd945d31f950bfa4a27a9e33b3858484d506d8c', '', 0, 0, 0, '', 0, '', '', '', 'vjfklxglfjsdl', 'vjdkljvklcx'),
(15, 'dsqdqsd', '1dd945d31f950bfa4a27a9e33b3858484d506d8c', '', 0, 0, 0, '', 0, '', '', '', 'vjfklxglfjsdl', 'vjdkljvklcx'),
(16, 'Julie Mesko', 'e772048bc502b1c4ae2f1f0d28ea6e59cc16f889', '', 0, 0, 0, '', 0, '', '', '', 'fdsfsdfsdfsdf', 'ddddddd'),
(17, 'Vico', '9cf95dacd226dcf43da376cdb6cbba7035218921', '', 0, 0, 0, '', 0, '', '', '', 'Victorien', 'Gauch');

-- --------------------------------------------------------

--
-- Structure de la table `musique`
--

CREATE TABLE IF NOT EXISTS `musique` (
  `ID_Musique` int(11) NOT NULL AUTO_INCREMENT,
  `Nom Musique` varchar(45) DEFAULT NULL,
  `Chemin Musique` varchar(45) DEFAULT NULL,
  `Groupe_ID_Groupe` int(11) NOT NULL,
  PRIMARY KEY (`ID_Musique`),
  KEY `fk_Musique_Groupe1_idx` (`Groupe_ID_Groupe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE IF NOT EXISTS `salle` (
  `ID_Salle` int(11) NOT NULL AUTO_INCREMENT,
  `Gérant` varchar(45) DEFAULT NULL,
  `Nom de la salle` varchar(45) DEFAULT NULL,
  `Téléphone` int(11) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Adresse` varchar(45) DEFAULT NULL,
  `Code Postal` int(11) DEFAULT NULL,
  `Ville` varchar(45) DEFAULT NULL,
  `Capacité` int(11) DEFAULT NULL,
  `Equipement` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID_Salle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `idtopic` int(11) NOT NULL AUTO_INCREMENT,
  `Login` varchar(11) DEFAULT NULL,
  `Nom` varchar(45) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  PRIMARY KEY (`idtopic`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `topic`
--

INSERT INTO `topic` (`idtopic`, `Login`, `Nom`, `Date`) VALUES
(1, 'ggggg', 'gggggg', '2014-05-02');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
