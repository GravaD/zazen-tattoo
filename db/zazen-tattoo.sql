-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 15 Septembre 2014 à 11:46
-- Version du serveur: 5.5.38-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `zazen-tattoo`
--
CREATE DATABASE IF NOT EXISTS `zazen-tattoo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `zazen-tattoo`;

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

DROP TABLE IF EXISTS `artiste`;
CREATE TABLE IF NOT EXISTS `artiste` (
  `nom_art` varchar(25) NOT NULL,
  PRIMARY KEY (`nom_art`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `artiste`
--

INSERT INTO `artiste` (`nom_art`) VALUES
('Guillaume'),
('Mathieu');

-- --------------------------------------------------------

--
-- Structure de la table `a_realise`
--

DROP TABLE IF EXISTS `a_realise`;
CREATE TABLE IF NOT EXISTS `a_realise` (
  `nom_art` varchar(25) NOT NULL,
  `id_img` int(11) NOT NULL,
  PRIMARY KEY (`nom_art`,`id_img`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `est_tagge`
--

DROP TABLE IF EXISTS `est_tagge`;
CREATE TABLE IF NOT EXISTS `est_tagge` (
  `id_img` int(11) NOT NULL,
  `nom_tag` varchar(20) NOT NULL,
  PRIMARY KEY (`id_img`,`nom_tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id_img` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_img`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

DROP TABLE IF EXISTS `tag`;
CREATE TABLE IF NOT EXISTS `tag` (
  `nom_tag` varchar(20) NOT NULL,
  PRIMARY KEY (`nom_tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tag`
--

INSERT INTO `tag` (`nom_tag`) VALUES
('ailes'),
('animal'),
('dragon'),
('tribal');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
