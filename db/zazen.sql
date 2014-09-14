-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 14 Septembre 2014 à 12:51
-- Version du serveur: 5.5.38-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `zazen`
--
CREATE DATABASE IF NOT EXISTS `zazen` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `zazen`;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(42) NOT NULL AUTO_INCREMENT COMMENT '?',
  `nom_fichier` varchar(100) CHARACTER SET utf8 NOT NULL,
  `artiste` enum('Mathieu','Guillaume') COLLATE utf8_bin NOT NULL,
  `tags` varchar(100) COLLATE utf8_bin NOT NULL COMMENT 'séparer tags par virgule',
  PRIMARY KEY (`id`),
  UNIQUE KEY `chemin` (`nom_fichier`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id`, `nom_fichier`, `artiste`, `tags`) VALUES
(1, '1.jpg', 'Mathieu', 'sword,snake'),
(2, '2.jpg', 'Mathieu', 'ailes,dragon'),
(3, '3.jpg', 'Mathieu', 'ailes,dragon'),
(5, '4.jpg', 'Mathieu', 'ailes,dragon'),
(6, '5.jpg', 'Guillaume', 'ailes,dragon');

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

DROP TABLE IF EXISTS `rdv`;
CREATE TABLE IF NOT EXISTS `rdv` (
  `date` date NOT NULL,
  `nom` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
